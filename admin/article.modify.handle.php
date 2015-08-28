<?php 
	require_once('../connect.php');

	// print_r($_POST);
	if(!(isset($_POST['title']) && (!empty($_POST['title'])))) {
		echo "<script>alert('标题不能为空'); window.location.href='article.manage.php'</script>";
	}
	//获取信息
	$id = $_POST['id'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$dateline = time();
	$updatesql = "update  article set title='$title',author='$author',description='$description',content='$content',dateline='$dateline' where id='$id'";
	
	if(mysql_query($updatesql)) {
		echo "<script>alert('修改文章成功'); window.location.href='article.manage.php'</script>";
	} else {
		echo "<script>alert('修改文章失败，请重试'); window.location.href='article.manage.php'</script>";
	}


 ?>