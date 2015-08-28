<?php  
	require_once('connect.php');
	$sql = "select * from article order by dateline desc"; //按时间倒序排列
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
	<title>文章列表</title>
	<style type="text/css">
		html,body {
			height: 100%;
			font-family: 'Microsoft Yahei';
		}
		.header {
			overflow:hidden;
			background-color:#FF8686;
			border-bottom:2px solid #999;
		}
		.header h1 {
			margin-left:10px;
		}
		.nav {
			float: right;
		}
		.nav p {
			display: inline-block;
		}
		.nav a ,.totext a{
			color:green;
			text-decoration: none;
			padding-right: 10px;
		}
		.nav a:hover ,.totext a:hover{
			text-decoration: underline;
		}
		.main {
			float:left;
			width:75%;
		}
		.text {
			border-bottom:5px solid #aaa;
		}
		.text-title{
			border-bottom:15px solid #aaa;
		}
		.text-title span{
			font-size:15px;
			margin-left:15px;
			color: #aaa;
		}
		.search {
			float:right;
			width:20%;
		}
		.search h1 {
			border-bottom:15px solid #aaa;
		}
	</style>
</head>
<body>
	<?php 
		tophp('header.php');
	 ?>
	<div class="main">
		<?php
			if(empty($data)){
				echo "<script>alert('当前没有文章,请管理员添加文章')</script>";
			} else {
				foreach ($data as $value) {
		?>
					<div class="text">
					<h1 class="text-title">
						<?php echo $value['title'] ?><span>作者：<?php echo $value['author'] ?></span><span>发布时间：<?php echo date('Y-m-d',$value['dateline'])?></span>
					</h1>
					<p class="desc">
						<?php echo $value['description'] ?>
					</p>
					<p class="totext"><a href="article.show.php?id=<?php echo $value['id'] ?>">查看详情</a></p>
					</div>
		<?php
				}
			}
		?>

	</div>
	<div class="search">
		<h1>search</h1>
		<form action="article.search.php" method="get">
			<input type="text" name="key" />
			<input type="submit" name="btn" value="搜索" />
		</form>
	</div>
</body>
</html>