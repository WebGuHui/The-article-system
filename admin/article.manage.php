<?php 
	require_once('../connect.php');
	$sql = "select * from article order by dateline desc";
	$query = mysql_query($sql);
	if($query && mysql_num_rows($query)) {
		while($row = mysql_fetch_assoc($query)) {
			$data[] = $row;
		}
	} else {
		$data = array();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章管理</title>
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
		width: 70%;
		float: right;
		margin-right: 20px;
		margin-top: 20px;
	}
	</style>
</head>
<body>
	<div class="header">
		<h1>文章管理</h1>
	</div>
	<div class="list">
		<p><a href="article.add.php">发布文章</a></p>

		<p><a href="article.manage.php">管理文章</a></p>
	</div>
	<div class="main">
		<table width="100%" border="0" cellpadding="8" cellspacing="1" bgcolor="000">
			<tr>
				<td colspan="3" align="center" bgcolor="#fff">文章管理列表</td>
			</tr>
			<tr>
				<td width="37" bgcolor="#fff">编号</td>
				<td width="572" bgcolor="#fff">标题</td>
				<td width="82" bgcolor="#fff">操作</td>
			</tr>
			<?php 
				if(!empty($data)) {
					foreach ($data as $value) {
			?>
			<tr>
				<td bgcolor="#fff">&nbsp;<?php echo $value['id']?></td>
				<td bgcolor="#fff">&nbsp;<?php echo $value['title']?></td>
				<td bgcolor="#fff">
				<a href="article.del.handle.php?id=<?php echo $value['id']?>">删除</a>
				<a href="article.modify.php?id=<?php echo $value['id'] ?>">修改</a>
				</td>
			</tr>
			<?php 
					}
				}
			?>
		</table>

	</div>
</body>
</html>