<?php 
	require_once('../connect.php');
	$id = $_GET['id'];
	$query = mysql_query("select * from article where id = '$id'" );
	$data = mysql_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章修改</title>
	<style type="text/css">
	html,body {
		height:100%;
		overflow:hidden;
		font-family: 'Microsoft Yahei';
	}
	.header {
		border-bottom:1px solid #000;
		text-align: center;
		height:10%;
	}
	.list {
		float: left;
		width: 20%;
		height:90%;
		margin-left:20px;
		border-right:1px solid #000;
	}
	.main {
		height:90%;
		width: 60%;
		float: right;
	}
	</style>
</head>
<body>
	<div class="header">
		<h1>文章修改</h1>
	</div>
	<div class="list">
		<p><a href="article.add.php">发布文章</a></p>

		<p><a href="article.manage.php">管理文章</a></p>
	</div>
	<div class="main">
		<form name="form1" method="post" action="article.modify.handle.php" >
			<input type="hidden" name="id" value="<?php echo $data['id'] ?>" >
			<table width="779" border="0" cellpadding="8" cellspacing="1">
				<tr>
					<td colspan="2" align="center">修改文章</td>
				</tr>
				<tr>
					<td width="119">标题</td>
					<td width="625">
						<label for="title"></label>
						<input type="text" name="title" id="title" value="<?php echo $data['title'] ?>" />
					</td>
				</tr>
				<tr>
					<td>作者</td>
					<td>
						<input type="text" name="author" id="author" value="<?php echo $data['author'] ?>" />
					</td>
				</tr>
				<tr>
					<td>摘要</td>
					<td>
						<label for="description"></label>
						<textarea name="description" id="description" cols="60" rows="5"><?php echo $data['description'] ?></textarea>
					</td>
				</tr>
				<tr>
					<td>内容</td>
					<td>
						<textarea name="content" id="content" cols="60" rows="15"><?php echo $data['content'] ?></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="button" id="button" value="提交" />
					</td>
				</tr>
			</table>

		</form>
	</div>
</body>
</html>