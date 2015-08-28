<?php 
	require_once('../connect.php');

	// print_r($_POST);
	if(!(isset($_POST['title']) && (!empty($_POST['title'])))) {
		echo "<script>alert('标题不能为空'); window.location.href='article.add.php'</script>";
	}
	//获取信息
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$dateline = time();
	$insertsql = "insert into article(title,author,description,content,dateline) values('$title','$author','$description','$content','$dateline')";
	
	if(mysql_query($insertsql)) {
		echo "<script>alert('发布文章成功'); window.location.href='article.manage.php'</script>";
	} else {
		echo "<script>alert('发布文章失败，请重试'); window.location.href='article.add.php'</script>";
	}


 ?>