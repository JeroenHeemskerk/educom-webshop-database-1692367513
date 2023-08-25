<?php
function ConnectDB(){
    $servername = "localhost";
    $username = "stijn_webshop_educom";
    //super goed wachtwoord ik weet
    $sqlpassword = "Stijnstijn12";
    $dbname = "stijn_webshop";
    $conn = mysqli_connect($servername, $username, $sqlpassword, $dbname);
    if (!$conn) {
        throw new Exception("Er is geen verbinden gevonden met het database");
    }
    return $conn;
}

function FindUserByEmail($email){
    $conn = ConnectDB();
    try {
        $sql = "SELECT naam, email, wachtwoord FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                return array("email" => $row["email"], "name" => $row["naam"], "password" => $row["wachtwoord"]);
            }
        } else {
            return null;
        }
    } finally {
    mysqli_close($conn);
    }
}
function SaveUser($email, $name, $password, $databaseErr){
    $conn = ConnectDB();
    try {
        $sql = "INSERT INTO users (naam, email, wachtwoord)
        VALUES ('$name', '$email', '$password')";
        if (mysqli_query($conn, $sql) === FALSE) {
            throw new Exception("Het is niet gelukt om het in het database te zetten");
        }
    } finally {    
    mysqli_close($conn);
    }
}
function UpdateUser($password, $email){
    $conn = ConnectDB();
    try {
        $sql = "UPDATE users SET wachtwoord='$password' WHERE email='$email'";
        if (mysqli_query($conn, $sql) === FALSE) {
            throw new Exception("Het is niet gelukt om het in het database te zetten");
        }
    } finally {    
    mysqli_close($conn);
    }
}