<?php
require('config.php');

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adress = $_POST['adress'];
    $ville = $_POST['ville'];
    $telephone = $_POST['telephone'];
    $email = $_POST['login'];
    $pass = $_POST['password'];


    $query = "INSERT INTO clients (nom, prenom, ,tel, adresse,ville, pass,email) VALUES ('$nom', '$prenom', '$telephone','$adress', '$ville' , '$pass', '$email')";
    if (mysqli_query($conn, $query)) {
        echo "New book added successfully";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="connexion.php" method="post">

        <!-- <div> -->
        <p id="hh">connexion :</p>
        <!-- nom -->
        <span>* nom :</span> <input type="text" id="nom" name="nom"><span>*</span><br>
        <!-- prenom -->
        <span>* prenom :</span><input type="text" id="prenom" name="prenom"><span></span><br>
        <span>* Adrees :</span><input type="text" id="prenom" name="adress"><span></span><br>
        <span>* telephone :</span><input type="number" id="prenom" name="telephone"><span></span><br>
        <!-- email -->
        <!-- <span>* e-mail  :</span><input type="text"  id="e-mail" name="adress"><span></span><br> -->
        <!-- user name -->
        <p id="rr" class="p"></p>
        <span>LOGIN :</span><input type="text" name="login" id="user"><br>
        <!-- sexe -->
        <!-- <p>sexe :</p>
        <div id="radio">
            <input type="radio"  name="choix" value="femme"> femme
            <input type="radio" name="choix" value="homme"> homme
        </div> -->
        <!-- password -->
        <span>mode de pass :</span><input type="text" name="password" id="psw"><br>
        <p id="r" class="p"></p>
        <!-- confermation modepass -->

        <!-- ville -->
        <p> ville</p>
        <select name="ville">
            <!-- options -->
            <option value="1">ville 1</option>
            <option value="2">ville 2</option>
            <option value="3">ville 3</option>
            <option value="4">ville 4</option>
            <option value="5">ville 5</option>
        </select>
        <input type="submit" name="submit" value="Submit">
        <!-- </div> -->
    </form>

</body>

</html>