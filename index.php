<?php 
include('dbthing.php');

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=ConnectionExercice;charset=utf8', 'root', 'root');

}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}

//PDO error mode to exception
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "\nconnect to mysqlSever sucessfully sucessfully";

$user= new User();
$user->setId(1);
$user->setName("chabo");
$user->setAge(12);
$user->setPassword(12);

echo "\n\n";
print_r($user); 

$req = $bdd->prepare('INSERT INTO USER( id, name, age, password) 
VALUES( :id, :name, :age, :password) ');


$req->execute(array(
  'id'       => 0,
  'name'     => $user->name(),
  'age'      => $user->age(),
  'password' => $user->password()
));
echo "\n";

if($req->rowCount() > 0){
  echo 'Record Inserted Successfully';
}else{
  throw new Exception('SQL ERROR occur: Check the syntax or Data'."\n");
}

echo "\n";

?>


