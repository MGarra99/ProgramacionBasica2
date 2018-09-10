<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>Pokedex</title>
</head>
<body>

	<?php

	$pokemons = array(   "Charmander"=>['img'=>'<img src="imagenes/charmander.png">',
										'tipo'=>'<img src="imagenes/tipo_fuego.png">',
										'genero'=>'Hembra',
										'ataque'=>'Llamarada'],
						 "Pikachu"=>['img'=>'<img src="imagenes/pikachu.png">',
						 			 'tipo'=>'<img src="imagenes/tipo_electrico.png">',
						 			 'genero'=>'Macho',
						 			 'ataque'=>'Electrovoltio'],
						 "Squirtle"=>['img'=>'<img src="imagenes/squirtle.png">',
						 			 'tipo'=>'<img src="imagenes/tipo_agua.png">',
						 			 'genero'=>'Macho',
						 			 'ataque'=>'Hidropulso'],
						 "Gengar"=>['img'=>'<img src="imagenes/gengar.png">',
						 			'tipo'=>'<img src="imagenes/tipo_fantasma.png">',
						 			'genero'=>'Hembra',
						 			'ataque'=>'Pesadilla'],
						 "Bulbasaur"=>['img'=>'<img src="imagenes/bulbasaur.png">',
						 			   'tipo'=>'<img src="imagenes/tipo_planta.png">',
						 			   'genero'=>'Macho',
						 			   'ataque'=>'Rayo solar']
						);

	ksort($pokemons);
	
	echo '<div class="container" style="padding-top:3%; padding-bottom:5%">';

	echo '<h1 style=color:steelblue;text-align:center;padding-bottom:3%>Pokedex regional</h1>';

	if(!isset($_GET['whoisthatpokemon']) || empty($_GET['whoisthatpokemon'])){
		foreach ($pokemons as $key => $pokemon) {

				echo '<div class="container" style="padding-left:20%; padding-right:20%; text-align: center">';
			
				echo '<table class="table table-bordered">';

				echo '<thead>
					    <tr>
					      <th scope="col">'.$key.'</th>
					      <th scope="col">'.'Genero'.'</th>
					      <th scope="col">'.'Ataque'.'</th>
					      <th scope="col">'.'Tipo'.'</th>
					    </tr>
					  </thead>';

				echo '<tbody>
					    <tr >
					      <td>'.$pokemons[$key]['img'].'</th>
					      <td style="padding-top:6.5%">'.$pokemons[$key]['genero'].'</td>
					      <td style="padding-top:6.5%">'.$pokemons[$key]['ataque'].'</td>
					      <td style="padding-top:6.5%">'.$pokemons[$key]['tipo'].'</img></td>
					    </tr>
					    <tr>
					  </tbody>';

				echo '</table>';

				echo '</div>';
					
			}
		
	}else{
		$buscar = $_GET['whoisthatpokemon']; 
		$flag = false;

		foreach ($pokemons as $key => $pokemon) {
			if($key == $buscar) $flag = true;
		}

		if($flag){
		
			echo '<div class="container" style="padding-left:20%; padding-right:20%; 
				 text-align: center">';
			
			echo '<table class="table table-bordered">';

			echo '<thead>
				    <tr>
				      <th scope="col">'.$buscar.'</th>
				      <th scope="col">'.'Genero'.'</th>
				      <th scope="col">'.'Ataque'.'</th>
				      <th scope="col">'.'Tipo'.'</th>
				    </tr>
				  </thead>';

			echo '<tbody>
				    <tr >
				      <td>'.$pokemons[$buscar]['img'].'</th>
				      <td style="padding-top:6.5%">'.$pokemons[$buscar]['genero'].'</td>
				      <td style="padding-top:6.5%">'.$pokemons[$buscar]['ataque'].'</td>
				      <td style="padding-top:6.5%">'.$pokemons[$buscar]['tipo'].'</img></td>
				    </tr>
				    <tr>
				  </tbody>';

			echo '</table>';

			echo '</div>';

		}else {
			echo'<h2 style=color:tomato;text-align:center>No existe ese pokemon</h1>';
			echo'<h4 style=color:black;text-align:center>(Asegurate de que escribes la primer letra en mayuscula)</h1>';
		}
		
	}
	echo '</div>';
	?>

</body>
</html>

	
	

