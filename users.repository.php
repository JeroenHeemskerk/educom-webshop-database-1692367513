<?php
function FindUserByEmail($email){
    $servername = "localhost";
    $username = "stijn_webshop_educom";
    //super goed wachtwoord ik weet
    $sqlpassword = "Stijnstijn12";
    $dbname = "stijn_webshop";
    $conn = new mysqli($servername, $username, $sqlpassword, $dbname);
    if ($conn->connect_error) {
        throw new Exception("Er is geen verbinden gevonden met het database");
    }
    $sql = "SELECT naam, email, wachtwoord FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            return array("email" => $row["email"], "name" => $row["naam"], "password" => $row["wachtwoord"]);
        }
    } else {
        return null;
    }
    $conn->close();
}
function FindPassword($password){
    $servername = "localhost";
    $username = "stijn_webshop_educom";
    //super goed wachtwoord ik weet
    $sqlpassword = "Stijnstijn12";
    $dbname = "stijn_webshop";
    $conn = new mysqli($servername, $username, $sqlpassword, $dbname);
    if ($conn->connect_error) {
        throw new Exception("Er is geen verbinden gevonden met het database");
    }
    $sql = "SELECT naam, email, wachtwoord FROM users WHERE wachtwoord='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return true;
    } else {
        return null;
    }
    $conn->close();
}
function SaveUser($email, $name, $password, $databaseErr){
    $servername = "localhost";
    $username = "stijn_webshop_educom";
    //super goed wachtwoord ik weet
    $sqlpassword = "Stijnstijn12";
    $dbname = "stijn_webshop";
    $conn = new mysqli($servername, $username, $sqlpassword, $dbname);
    if ($conn->connect_error) {
        throw new Exception("Er is geen verbinden gevonden met het database");
    }
    $sql = "INSERT INTO users (naam, email, wachtwoord)
    VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === FALSE) {
        throw new Exception("Het is niet gelukt om het in het database te zetten");
      }
    $conn->close();
}
function UpdateUser($password, $email){
    $servername = "localhost";
    $username = "stijn_webshop_educom";
    //super goed wachtwoord ik weet
    $sqlpassword = "Stijnstijn12";
    $dbname = "stijn_webshop";
    $conn = new mysqli($servername, $username, $sqlpassword, $dbname);
    if ($conn->connect_error) {
        throw new Exception("Er is geen verbinden gevonden met het database");
      } 
    $sql = "UPDATE users SET wachtwoord='$password' WHERE email='$email'";
    if ($conn->query($sql) === FALSE) {
        throw new Exception("Het is niet gelukt om het in het database te zetten");
      }
    $conn->close();
}