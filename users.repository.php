<?php
function FindUserByEmail($email){
    $servername = "localhost";
    $username = "stijn_webshop_educom";
    //super goed wachtwoord ik weet
    $sqlpassword = "Stijnstijn12";
    $dbname = "stijn_webshop";
    $conn = mysqli_connect($servername, $username, $sqlpassword, $dbname);
    if (!$conn) {
        throw new Exception("Er is geen verbinden gevonden met het database");
    }
    $sql = "SELECT naam, email, wachtwoord FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            return array("email" => $row["email"], "name" => $row["naam"], "password" => $row["wachtwoord"]);
        }
    } else {
        return null;
    }
    mysqli_close($conn);
}
function FindPassword($password){
    $servername = "localhost";
    $username = "stijn_webshop_educom";
    //super goed wachtwoord ik weet
    $sqlpassword = "Stijnstijn12";
    $dbname = "stijn_webshop";
    $conn = mysqli_connect($servername, $username, $sqlpassword, $dbname);
    if (!$conn) {
        throw new Exception("Er is geen verbinden gevonden met het database");
    }
    $sql = "SELECT naam, email, wachtwoord FROM users WHERE wachtwoord='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return null;
    }
    mysqli_close($conn);
}
function SaveUser($email, $name, $password, $databaseErr){
    $servername = "localhost";
    $username = "stijn_webshop_educom";
    //super goed wachtwoord ik weet
    $sqlpassword = "Stijnstijn12";
    $dbname = "stijn_webshop";
    $conn = mysqli_connect($servername, $username, $sqlpassword, $dbname);
    if (!$conn) {
        throw new Exception("Er is geen verbinden gevonden met het database");
    }
    $sql = "INSERT INTO users (naam, email, wachtwoord)
    VALUES ('$name', '$email', '$password')";
    if (mysqli_query($conn, $sql) === FALSE) {
        throw new Exception("Het is niet gelukt om het in het database te zetten");
      }
    mysqli_close($conn);
}
function UpdateUser($password, $email){
    $servername = "localhost";
    $username = "stijn_webshop_educom";
    //super goed wachtwoord ik weet
    $sqlpassword = "Stijnstijn12";
    $dbname = "stijn_webshop";
    $conn = mysqli_connect($servername, $username, $sqlpassword, $dbname);
    if (!$conn) {
        throw new Exception("Er is geen verbinden gevonden met het database");
      } 
    $sql = "UPDATE users SET wachtwoord='$password' WHERE email='$email'";
    if (mysqli_query($conn, $sql) === FALSE) {
        throw new Exception("Het is niet gelukt om het in het database te zetten");
      }
    mysqli_close($conn);
}