<?php
/*
*�Զ���api���� android�ͻ���ɨ�����ʣ���ָ����username���浽��Ӧλ��
*���ղ��� randnumber username
*�޷���ֵ
*
*
*/
$randnumber = $_GET['randnumber'];
$username = $_GET['username'];

require 'mysql_connect.php';
mysql_query("update login_record set username = '$username' where randnumber = '$randnumber'");
	
	
?>