<form action="dangnhap.php" method="POST">
    <input type="submit" value="Test">
</form>
<?php>
$test = "mucluc";
if(isset($_GET["mod"]))
    $test = $_GET["mod"];
switch ($test) {
    case 'mucluc': 
        include "./giohang/index.php";
        break;
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Danh sách sản phẩm</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
  <i class="fas fa-bars" style="font-size:24px"></i> <b>Danh sách sản phẩm</b>
</body>
</html>