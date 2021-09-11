<?php $angka = [
	[1,2,3,4,5,6,7,8,9],
	[1,2,3,4,5,6,7,8,9],
	[9,8,7,6,5,4,3,2,1]
];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
	.kotak{
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		}
 	.clear {
 		clear: both;
 	}
	</style>
</head>
<body>
	<?php foreach ($angka as $a): ?>
		<?php foreach ($a as $b): ?>
			 <div class="kotak"><?php echo $b; ?></div>
		<?php endforeach; ?>
		<div class="clear"></div>
	<?php endforeach; ?>
	
</body>
</html>