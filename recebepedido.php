<?php include_once"config.php";?>
<html>
<body>
<?php 
$nome = $_POST["nome"];
$endereço = $_POST["endereço"];
$numero = $_POST["numero"];
$tipogalao = $_POST["tipogalao"];
$quant = $_POST["quant"];



$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
mysqli_select_db($conn,$dbname);
$sql = "INSERT INTO galoesloja (nome,endereço,numero,tipogalao,quant,created) VALUES ('$nome', '$endereço','$numero','$tipogalao','$quant', NOW())";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('Seu pedido foi feito com sucesso !'); window.location = 'index.php';</script>";

}else{
 echo "Deu errro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>