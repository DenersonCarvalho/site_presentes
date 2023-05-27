<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Convite de Aniversário</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<h1>Juntos, construindo nosso lar - Escolha um presente para celebrar!</h1>
		<p>Bem-vindos ao nosso cantinho virtual, um espaço especialmente criado para celebrar a construção do nosso novo lar! É com grande alegria que compartilhamos esse momento tão especial com vocês, nossos amigos e familiares queridos.</p>
		<p>11 de Junho, 2023</p>
		<p>18:00 - 20:00</p>
		<p>182, Rua Seis, Marabaixo</p>
	</header>

	<section class="gifts">
		<h2>Lista de Presentes</h2>
		<?php
		include_once("conexao.php");

		$sql = "SELECT * FROM imagens ORDER BY ativo DESC";
		$result = mysqli_query($conn, $sql);

		while($imagens = mysqli_fetch_array($result)){
		?>
			<div class="gift-item">
				<img src="<?php echo $imagens['caminho'];?>" alt="Presente 1" 
				class="<?php $x = $imagens['ativo']==0 ? 'escolhida':'none'; echo $x; ?>">
				<h3><?php echo $imagens['nome'] ?></h3>
				
				<a href="<?php $x = $imagens['ativo']<>0 ? "escolher.php?id=".$imagens['id']:'#'; echo $x; ?>"><span id="texto">
					<?php $x = $imagens['ativo']==0 ? 'Escolhido':'Escolher'; echo $x; ?></span>
				</a>
			</div>
		<?php
		}
		mysqli_close($conn);
		?>

	<script src="script.js"></script>
</body>
</html>
