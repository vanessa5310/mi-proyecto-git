<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
		td{width: 100px}

	</style>
</head>
<body>
	<form>
	<table border="2px">
		<thead>
		<tr>
			<th>ESCENARIO</th>
		
		</tr>
		</thead>
		<tr>
		<?php
        //aqui definimos el arreglo en este caso es un arreglo multidimensional
        $persona=array(
            array('maria','gonzalez',22),
            array('daniela','Beltran',25),
            array('vanessa','os0rio',33),
            
           );
        //aqui se hace uso de la estructura foreach para recorrer el array nombre
           
          
     /*foreach ($nombre as $valor){
          echo "<td>".$valor[0]."</td>"."<br>";
      } ; */
      for ($fila=0; $fila <count($persona) ; $fila++) { 
      	for ($columna=0; $columna < count($persona[$fila]); $columna++) { 
        echo $persona[$fila][$columna]."<br>";
    };
echo "<hr>";
};


/*foreach ($nombre as $valor){
          echo "<td>".$valor[0]."</td>"."<br>";
      };
      ?>
  </tr>
  <tr>
      <?php
      foreach ($nombre as $valor){
          echo "<td>".$valor[1]."</td>"."<br>";
      };
 
           ?>
       </tr>
       <?php*/

       for ($i=1; $i <=10; $i++) { 
       	echo $i."<br>";
       };
       $p=1;
       while($p<=15) {
       	echo $p."<br>";
       	$p=$p+3;
       };
       $cicloDo=1;
       do{ echo "la letra v vale".$cicloDo."<br>";
       $cicloDo++;
        }
        while ( $cicloDo<= 10);
$ciclo=3;
        switch ($ciclo) {
        	case '1':
        		echo "es uno 1";
        		break;
        	
        	case '3':
        		echo "es tres 3";
        		break;
        		
        };

        $numeros=[2,4,5,6,6,5];
        foreach ($numeros as $key ) {
        	echo "los indexados".$key."<br>";
        };

        //array asociativo
        $asociativo= array(
        	'nombre' => 'vanessa',
        	'apellido'=>'osorio',
        	'edad'=>33,
        	 );
        	echo "array asociativo".$asociativo['nombre'];
        	foreach ($asociativo as $key => $valor) {
        		echo $valor."<br>";
        	};

        	//array ejemplo

        	$data=[
        		[
        			'nombre'=>'victor',
        			'email' =>'victor@gmail.com',
        			'celular' => 315889,

        		],
        		[
        			'nombre'=>'carlos',
        			'email' =>'carlos@gmail.com',
        			'celular' => 317856,
        		],
        		[
        			'nombre'=>'pedro',
        			'email' =>'pedro@gmail.com',
        			'celular' =>3828692, 
        		],
        	
        	];

        	foreach ($data as $item ) {
        		echo $item['nombre']."<br>";
        		echo $item['email']."<br>";
        		echo $item['celular']."<br>";

        	};

        	$probando=array(
                      array("vanessa","leidy","nata"),
                      array("osorio","ortiz","cardoza"),
                      	array(33,39,25),
        	);

        	for ($i=0; $i < count($probando); $i++) { 
        		foreach ($probando as $key ) {
        			echo $key[$i]."<br>";
        		};
        	};
        	n_array("vanessa",$probando);
        	
       ?>
        
		<!--<tr align="">
				<td></td>
			<td>1</td>
				<td>2</td>
					<td>3</td>
						<td>4</td>
							<td>5</td>

		</tr>
		<tr align="">
				<td>1</td>
			<td> <input type="" value="L" name=""></td>
				<td></td>
					<td></td>
						<td></td>
							<td></td>

		</tr>
		<tr align="">
				<td>2</td>
			<td></td>
				<td></td>
					<td></td>
						<td></td>
							<td></td>

		</tr>
		<tr align="">
				<td>3</td>
			<td></td>
				<td></td>
					<td></td>
						<td></td>
							<td></td>

		</tr>
		<tr align="">
				<td>4</td>
			<td></td>
				<td></td>
					<td></td>
						<td></td>
							<td></td>

		</tr>
		<tr align="">
				<td>5</td>
			<td></td>
				<td></td>
					<td></td>
						<td></td>
							<td></td>

		</tr>
		
	</table><br>
	-->
	<input type="" name="">
	<input type="" name="">
	<label>Fila</label>
	<input type="" name=""><br><br>
	<label>Puesto</label>
	<input type="" name=""><br><br>
	<label>Reserva</label>
	<input type="radio"  id="reserva" name="opcion"><br><br>
	<label>Comprar</label>
	<input type="radio"  id="comprar" name="opcion"><br><br>
	<label>Liberar</label>
	<input type="radio"  id="liberar" name="opcion"><br><br>
<input type="submit" name="" value="enviar">
<a href=".php"><button type="button"  class="btn btn-info">Eliminar</button></a>
</form>

</body>
</html>