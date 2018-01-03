<?php
class Comment
{
	private $data = array();
	public function __construct($row)
	{
		$this->data = $row;
	}
	public function markup()
	{
		$d = &$this->data;
		$link_open = '';
		$link_close = '';
		if($d['url']){
			$link_open = '<a href="'.$d['url'].'">';
			$link_close =  '</a>';
		}
		if(empty($d['dt'])){$d['dt']=date('Y-m-d H:i:s');}
		$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
		return '
			<div class="comment">
				<div class="name"><img src="'.dirname($url).'/img/user.gif" />  '.$d['name'].'</div>
				<div class="date" title="Added at '.$d['dt'].'">'.$d['dt'].'</div>
	            <p>'.$d['body'].'</p>
			</div>
		';
	}
	public static function validate(&$arr)
	{
		$errors = array();
		$data	= array();
		if(!($data['body'] = filter_input(INPUT_POST,'body',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			//$errors['body'] = 'Please .';
		}
		if(!($data['txtstar'] = filter_input(INPUT_POST,'txtstar',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			//$errors['txtstar'] = '';
		}
		if(!($data['name'] = filter_input(INPUT_POST,'name',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			//$errors['name'] = 'Please .';
		}
		if(!empty($errors)){
			$arr = $errors;
			return false;
		}
		foreach($data as $k=>$v){
			$arr[$k] = mysql_real_escape_string($v);
		}
		$arr['email'] = strtolower(trim($arr['email']));
		return true;
	}
	private static function validate_text($str)
	{
		if(mb_strlen($str,'utf8')<1)
			return false;
		$str = nl2br(htmlspecialchars($str));
		$str = str_replace(array(chr(10),chr(13)),'',$str);
		return $str;
	}
}
?>
