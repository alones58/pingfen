֧��Ajax����ͶƱ��PHP��ˢ�����۳���+��ҳ V1.0
ͨ��PHP+jQueryʵ����ˢ�����ۣ�������ҳ�����������Ǽ����֡���΢����PHP��MYSQL�����ѾͿɽ�������Ƕ�뵽�Լ���PHP��վ�У�

ʹ��ע������Ͱ�װ����˵����

���ݿⰲװ��
1���ֶ���phpmyadmin����һ�������ݿ⣬��������Ϊ"mytest",�����ɹ���ѡ��������ݿ⣬Ȼ�����Ҳ�phpmyadmin�Ҳ��ϲ��Ĳ˵���ѡ��SQL����Ȼ���Դ��Ŀ¼�µġ�mytest.sql��ȫѡ���ƣ�������ű�ճ����"SQL"���п��У�ִ�нű������ɽ���ɹ���
2�����޸�connect.php�е����ݿ����ơ��û����������Լ����ݿ����ƣ�����������������Ѷ���

���������ݿ�������Զ����ֶΣ���Ҫע�����¼��㣬������demo.php������ֶΣ��밴���²�����
<label for="test">����</label><input type="text" name="test" id="test" />
1��label��ǩ��for���Ʊ�����input�е�name��idһ��
2����comment.class.php�У�����Ӧλ�ã����ƵĴ��룩����
   if(!($data['test'] = filter_input(INPUT_POST,'test',FILTER_CALLBACK,array	('options'=>'Comment::validate_text'))))
		{
			//$errors['test'] = '';
		}
3����submit.php��
   INSERT INTO�м�����Ӧ�����ݿ��б������ֶ�ֵ��