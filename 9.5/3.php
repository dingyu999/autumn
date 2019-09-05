<?php 
$pdo= new PDO('mysql:host=127.0.0.1;dbname=september','root','root');
$res=$pdo->query('select * from message')->exec();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td>id</td>
			<td>用户</td>
			<td>内容</td>
		</tr>
		<?php foreach ($res as $k => $v) {
		 ?>
		<tr>
			<td><?php echo $v['id'] ?></td>
			<td><?php  echo $v['name'] ?></td>
			<td><?php  echo $v['content']; ?></td>
		</tr>
		<?php }?>
	</table>
</body>
</html>