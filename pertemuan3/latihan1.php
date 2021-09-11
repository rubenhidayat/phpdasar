<!-- <?php 
//pengulangan

//for
// for ($i=0; $i < 5; $i++) { 
// 	echo "Ruben Hidayat <br>";
// }

//while
// $i=0;
// while ($i < 10) {
// 	echo "Ruben Hidayat While<br>";
// 	$i++;
// }

//do.. while
// $i=0;
// do{
// 	echo "Ruben Hidayat DO<br>";
// 	$i++;
// }while ($i < 5);

//foreach : pengulangan khusus array



 ?> -->

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
    <style>
        .warna-baris{
            background-color: silver;
        }
    </style>
 </head>
 <body>
 <table border="1" cellpadding="10" cellspacing="0">
 	<?php for ($i=1; $i <=5 ; $i++) : ?>
        <?php if($i % 2 == 1): ?>
 		<tr class="warna-baris">
        <?php else: ?>
        <tr>
        <?php endif ?>
 			<?php for ($j=1; $j <=10 ; $j++) :?>
 				<td><?php echo "$i , $j"; ?></td>
 			<?php endfor; ?>
 		</tr>

 	 <?php endfor; ?>
 </table>
 	
 </body>
 </html>