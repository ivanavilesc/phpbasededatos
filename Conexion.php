
<?php

// la base de datos se llama TEST2

try {
    $usuario = "root";
    $password = "";
    if($mbd = new PDO('mysql:host=localhost;dbname=test2', $usuario, $password))
    {
        echo 'Conexion exitosa';
        $val = $mbd->prepare('select * from persona');
        $result=$val->execute();
        var_dump($result);
        
    }
    
    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {

    echo "ERROR: " . $e->getMessage();
}
?>