

<?php
//connexion
$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','',array(PDO::ATTR_EMULATE_PREPARES => false,
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


if(((empty($_POST['Name']))||(empty($_POST['Telephone']))||(empty($_POST['Email']))||(empty($_POST['Password']))||(empty($_POST['Cmdp']))))
{   
    echo'<body onLoad="alert(\'Fill up the form ❌\')">';
  
}
elseif(!($_POST['Password']==$_POST['Cmdp'])){
    echo'<body onLoad="alert(\'You should input identical passwords\')">';
    echo'<meta http-equiv="refresh" content="0;URL=signup.html">'; 
}

else{ 
    $email=$_POST['Email'];
    $stmt = $db->prepare("SELECT * FROM user WHERE (email=:email)");
    $stmt->execute(array(':email' => $email));
    
    if ($stmt->rowCount() > 0) {
        $data = $stmt->fetch(PDO::FETCH_OBJ);
        echo'<body onLoad="alert(\'Email existant ❌😡\')">';
        echo'<meta http-equiv="refresh" content="0;URL=signup.html">';

    } else {
        $username=$_POST['Name'];
        $phone=$_POST['Telephone'];
        $pass=$_POST['Password'];

        $stmt = $db->prepare("INSERT INTO user(username,email,phone,password) VALUES (:username, :email, :phone, :pass)");
        $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':pass', $pass);
    $stmt->execute();
    echo'<meta http-equiv="refresh" content="0;URL=signin.html">'; 
 }}
?>
