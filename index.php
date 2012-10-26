<?php
	require_once('Dado.php');

	$miDado = new Dado();
	$max = 100;

	$ops = array(0,0,0,0,0,0);
	$porc = array(0,0,0,0,0,0);

	for($i=0;$i<$max;$i++){
		$ops[$miDado->nuevaTirada()-1]++;
	}

	for($i=0;$i<count($ops);$i++){
		$porc[$i] = $ops[$i] * 100 / $max;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Porcentajes Dados</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<header>
		<h2>Porcentajes por n&uacute;mero al tirar <?php echo $max; ?> veces</h2>
	</header>
	<section id="resultados">
		<?php
			$colors = array('#e70e0e','#11942a','#0958c3','#b908bb','#e6a21f','#94e61f');
			for($i=0;$i<count($ops);$i++){
				echo "\t\t".'<article style="width:'.$porc[$i].'%;background:'.$colors[$i].';"><span class="op">'.($i + 1).'</span><span class="por">';
					printf("%.1f",$porc[$i]);
				echo '%</span></article>'."\n";
			}
		?>
	</section>		
</body>
</html>