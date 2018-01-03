$(document).ready(function(){
	var working = false;
	$('#addCommentForm').submit(function(e){
 		e.preventDefault();
		if(working) return false;
		working = true;
		$('#submit').val('正在提交...');
		$('span.error').remove();
		$.post('submit.php',$(this).serialize(),function(msg){
			working = false;
			$('#submit').val('提交评论');
			alert("所有节目已评分完毕，去往获奖结果页面！"); 
			self.location='last.php'; 
			if(msg.status){
				$(msg.html).hide().insertBefore('#addCommentContainer').slideDown();
				$('#body').val('');
			}
			else {
				$.each(msg.errors,function(k,v){
					$('label[for='+k+']').append('<span class="error">'+v+'</span>');
				});
			}
		},'json');
	});
});