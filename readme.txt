支持Ajax星星投票的PHP无刷新评论程序+分页 V1.0
通过PHP+jQuery实现无刷新评论，包含分页！！还包含星级评分。稍微懂得PHP、MYSQL的朋友就可将本功能嵌入到自己的PHP网站中！

使用注意事项和安装调试说明：

数据库安装：
1、手动用phpmyadmin创建一个新数据库，名字命名为"mytest",创建成功后，选中这个数据库，然后在右侧phpmyadmin右侧上部的菜单中选择“SQL”，然后打开源码目录下的“mytest.sql”全选复制，将建库脚本粘贴到"SQL"运行框中，执行脚本，即可建库成功。
2、请修改connect.php中的数据库名称、用户名和密码以及数据库名称，这个根据你的情况自已定。

如需在数据库中添加自定义字段，需要注意以下几点，比如在demo.php中添加字段，请按以下操作：
<label for="test">测试</label><input type="text" name="test" id="test" />
1、label标签的for名称必须与input中的name、id一致
2、在comment.class.php中，在相应位置（类似的代码）加上
   if(!($data['test'] = filter_input(INPUT_POST,'test',FILTER_CALLBACK,array	('options'=>'Comment::validate_text'))))
		{
			//$errors['test'] = '';
		}
3、在submit.php中
   INSERT INTO中加入相应的数据库列表列与字段值。