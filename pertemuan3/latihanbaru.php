<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan Baru</title>
	<style>
		.warna-baris{
			background-color: silver;
		}
	</style>
</head>
<body>
	<form action="">
		<table border="1" cellpadding="10" cellspacing="0">
			<?php 
				 for($i = 1;$i <= 3; $i++){
				 	echo "<tr>";
				 	for($j = 1; $j <= 5; $j++){
				 		echo "<td>$i ,$j</td>";
				 	}
				 	echo "</tr>";
				 }
			 ?>
		</table>
	</form>

	<hr>
		<form action="">
		<table border="1" cellpadding="10" cellspacing="0">
			<?php for($i = 1; $i <= 5; $i++):?>
				<?php if($i % 2 == 1 ): ?>
				<tr class="warna-baris">
				<?php else: ?>
				<tr></tr>
				<?php endif; ?>
					<?php for($j=1; $j <= 5; $j++): ?>
					<td><?php echo "$i,$j"; ?></td>
					<?php endfor; ?>
				</tr>
			<?php endfor; ?>
		</table>
	</form>
</body>
</html>