<?php
$error="";
if(!empty($_POST['usuario']) && !empty($_POST['contrasena'])){
    $name = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];    
    
    if($name == "usuario" && $contrasena == "123"){
        $error = "ok";
        header("Location: index.html");        
    }else if($name == "admin" && $contrasena =="asd"){        
        $error = "ok";
        header("Location: adm.html");
    }else{        
        $error = "vacio";
        header("Location: login.php?error-$error");
    }
        
}else{
    $error = "vacio";    
    header("Location: login.php?error-$error");
}
   