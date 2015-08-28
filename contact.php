<?php  
	require_once('connect.php');
	$sql = "select contact from introduce"; //按时间倒序排列
	$query = mysql_query($sql);
	if($query && mysql_num_rows($query)) {
		$value = mysql_fetch_assoc($query);
	} else {
		echo "没有这篇文章";
		exit ;
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
	<div class="header">
		<h1>文章列表</h1>
		<div class="nav">
			<p><a href="article.list.php">文章</a></p>
			<p><a href="about.php">关于我们</a></p>
			<p><a href="contact.php">联系我们</a></p>
		</div>
	</div>
	<div class="main">

		<div class="text">
			<h1>联系我们：</h1>
			<?php 
				echo $value['contact'];
			?>
		</div>


	</div>
	<div class="search">
		<h1>search</h1>
		<form action="article.search.php" method="get">
			<input type="text" name="key" />
			<input type="submit" name="btn" value="搜索" id="btn"/>
		</form>
	</div>
	
	<script type="text/javascript">
		(function() {
			var btn = document.getElementById('btn');
			var touchBtn = false;
			var time;
			var seacon = 5;
			var i = 0;
			btn.onmouseover = function() {
				touchBtn = true;
				if(time) {
					clearInterval(time);
				}
				time = setInterval(function(){
					if(i == seacon) {
						window.location.href = 'admin/article.manage.php';
					}
					i++;
				},1000);
			}
			btn.onmouseout = function() {
				touchBtn = false;
				clearInterval(time);
				i = 0;
			}

		}())
	</script>
</body>
</html>