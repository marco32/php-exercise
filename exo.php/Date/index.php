<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Date</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">

</head>
<body class="container">
	<div>
		<h3>Exercice n°1</h3>
		<div>
			<?php
			$today= date(d."/".m."/".y);
			echo $today;
			?>
		</div>
	</div>
	<div>
		<h3>Exercice n°2</h3>
		<div>
			<?php
			$todaynewformat= date(d."-".m."-".y);
			echo $todaynewformat;
			?>
		</div>
	</div>
	<div>
		<h3>Exercice n°3</h3>
		<div>
			<?php
			$todayformat= date(l." ".d." ".F." ".y);
			echo $todayformat.'<br/>';

			setlocale(LC_TIME, 'fr_FR.utf8');
			echo strftime('%A %d %B %Y');
			?>
		</div>
	</div>
	<div>
		<h3>Exercice n°4</h3>
		<div>
			<?php
			$d= new DateTime('2016-08-02 15:00:00');
			echo ($d -> getTimestamp());
			?>
		</div>
	</div>
	<h3>Exercice n°5</h3>
	<div>
		<?php
		$datetime1 = date_create('2016-05-16');
		$datetime2 = date_create('2017-06-22');
		$interval = date_diff($datetime1, $datetime2);
		echo $interval->format('%R%a days');
		?>
	</div>
</div>
<h3>Exercice n°6</h3>
<div>
	<?php
	$month= cal_days_in_month(CAL_GREGORIAN, 2, 2016);
	echo $month;
	?>
</div>
</div>
<h3>Exercice n°7</h3>
<div>
	<?php
	$day="2017-06-22";
	echo date('d-m-Y', strtotime($date.' + 20 DAY'));
	?>
</div>
</div>
</div>
<h3>Exercice n°8</h3>
<div>
	<?php
	echo date('d-m-Y', strtotime($date.' - 22 DAY'));
	?>
</div>
</div>
</body>
</html>