<?php
$db = new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root','',array(PDO::ATTR_EMULATE_PREPARES => false,
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if(!((empty($_POST['Prob']))&&(empty($_POST['Telephone']))&&
 (empty($_POST['Email']))&&(empty($_POST['Bing']))
)){
    //tsami les variables kifma theb juste ki tji bch taamel l requete kifma fl base
    $category=$_POST['Prob'];
    $email=$_POST['Email'];
    $phone=$_POST['Telephone'];
    $reqq=$_POST['Bing'];
   
   

    $stmt = $db->prepare("INSERT INTO inq(email,phone,category,reqq) VALUES (:email, :phone,:category, :reqq)");
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':reqq', $reqq);
    $stmt->execute();
    echo'<meta http-equiv="refresh" content="0;URL=contact.php">';
    echo'<body onLoad="alert(\'Request sent succefully\')">'; 
 }else{ echo'<body onLoad="alert(\'moch mawjoud\')">';}
?>
