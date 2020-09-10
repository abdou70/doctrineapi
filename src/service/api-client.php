<?php
header("Content-Type:apllication/json");
header("Acces-Control-Allow-Origin: *");

$data= json_decode(file_get_contents("php://input"),true);

$psearch=$data['nom'];

 require_once "../../bootstrap.php";

// $query = "SELECT * FROM produits WHERE name LIKE  '%".$psearch."%'";

$pdo = new PDO("mysql:host=localhost;dbname=baseapi","root","");

$a = $pdo->query("SELECT * FROM TableClient WHERE nom LIKE '%$psearch%'")->fetchAll();

// var_dump($a);
// die;

// $result= mysqli_query($conn,$query) or die("Select Query Failed.");
// $count=mysqli_num_rows($result);

if($a != false )
{
    // $row = mysqli_fetch_all($result , MYSQLI_ASSOC);

    echo json_encode($a);
}
else
{
    echo json_encode(array("message" => "No Search Found.","status" => false));

}



?>