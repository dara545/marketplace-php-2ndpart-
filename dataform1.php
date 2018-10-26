<?php










$errors= array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        array_push($errors, "naam is niet ingevuld");
    }
    else {
        $name = $_POST["username"];
    }

    if (empty($_POST["password"])) {
        array_push($errors, "wachtwoord is niet ingevuld");
    }
    else {
        $address = $_POST["password"];
    }
    
}

if (count($errors)==0){
 echo $_POST["username"]; 
 echo $_POST["password"];
include 'dbinlogformulier.php';

}
else{
    echo "gegevens zijn niet compleet!";
    foreach ($errors as $error) {
        echo $error;
 }

}



    




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    





</body>
</html>