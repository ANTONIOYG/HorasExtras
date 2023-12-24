<?php


//function conexion (){
   $servidor = "localhost";// 127.0.0.1
   $usuario = "root";
   $password = "";
   $bd = "hextra";

 try {
   $con = new PDO("mysql:host=$servidor;dbname=$bd",$usuario,$password);
   echo "conectado ";
 } catch (Exception $ex) {
   echo $ex->getMessage();
   
 } 
 // $con = mysqli_connect ( $host , $usuario , $password );

  // mysqli_select_db ( $con , $bd );

  // return  $con ;




?>