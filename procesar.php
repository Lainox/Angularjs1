<?php 

include('class.Conexion.php');
   $db = new Conexion();
    $sql = $db->query("SELECT * from ciudades");
            
    while($x = $db->recorrer($sql))
    { 
        $datos[] = array(
             'id' => $x['id_ciudad'],
            'nombre' => $x['nombre']
                   

            ); 
    };

    echo json_encode($datos);


 ?>