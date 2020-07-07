<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses login</title>
</head>
<body>
    <?php 
    $username = $_POST['username'];
    $password = $_POST ['password'];
    if ($username =="Joko") {
      if ($password == "12345*") {
        echo "Anda Berhasil Login!";
      } else {
        echo "Password anda salah!";
      };
      
    } else {
        echo "username anda salah!";
    };
      
    ?>
    <a href="form_login.php"></a>
</body>
</html>