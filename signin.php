<?php
session_start(); // start session
// connexion
$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','',array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if((empty($_POST['Email']))&&(empty($_POST['Password']))){
    echo'<body onLoad="alert(\'3ammer les données\')">';
    echo'<meta http-equiv="refresh" content="0;URL=signin.html">'; 
} else {
    // tsami les variables kifma theb juste ki tji bch taamel l requete kifma fl base
    $email=$_POST['Email'];
    $pass=$_POST['Password'];
   
    $stmt = $db->prepare("SELECT * FROM user WHERE email=:email AND password=:pass");
    $stmt->bindParam(':pass', $pass);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
         // set session variable
        echo'<meta http-equiv="refresh" content="0;URL=home.php">'; 
    } else {
        echo'<body onLoad="alert(\'Wrong combination\')">'; 
        echo'<meta http-equiv="refresh" content="0;URL=signin.html">'; 
    }
}
?>
