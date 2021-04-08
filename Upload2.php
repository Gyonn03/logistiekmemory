<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'db_unity');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
 
try {
  $pdo = new PDO(
    "mysql:host=". DB_HOST .";charset=". DB_CHARSET .";dbname=". DB_NAME,
    DB_USER, DB_PASSWORD, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }

$db_var = $_POST["db_var"];
$timeremaining = $_POST["tijdover"];
$id = $_POST["id"];
$fouten = $_POST["fouten"];

$sql = "INSERT INTO `tb_dat` (`id`, `score`) VALUES (?, ?)";
 
try {
  $stmt = $pdo->prepare($sql);
  $gegevens = ["$db_var", "$timeremaining", "$fouten"];
  $stmt->execute(["$id", json_encode($gegevens)]);
  echo "JSON OK";
} catch (Exception $ex) { exit($ex->getMessage()); }
?>