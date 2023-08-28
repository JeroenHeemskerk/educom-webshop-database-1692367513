<?php 
include_once "user.service.php";
function CheckLogin() {
    $emailErr = $passwordErr = $genericErr  = "";
    $name = TestInput(getPostVar('name'));
    $email = TestInput(getPostVar('email'));
    $password = TestInput(getPostVar('password'));
    $loginvalid = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $userInfo = AuthorizeUserByEmail($email, $password);
            switch($userInfo['result']) {
                case RESULT_UNKNOWN_USER:
                    $emailErr = "deze email is niet gevonden in het database";
                    break;
                case RESULT_WRONG_PASSWORD:
                    $passwordErr = "wachtwoord hoort niet bij deze email";
                    break;
                case RESULT_OK:
                    $name = $userInfo["user"]["name"];
                    $userId = $userInfo["user"]["id"];
                    $loginvalid = true;
                    break;
                default: 
                   logDebug("Onbekend result " . $userInfo['result']);
                   break;
                }
            } catch(Exception $e){
                $data['genericErr'] = 'sorry er is een technische storing3';
            }
        }
    return array ("loginvalid"=> $loginvalid, "email" => $email, "password" => $password, 
    "emailErr" => $emailErr, "passwordErr" => $passwordErr, "genericErr" => $genericErr, "name" => $name, "userId" => $userId);
}

function ShowLoginForm($data) { echo '
    <form action="index.php" method="post" name="login">
        <div>
            <input type="hidden" name="page" value="login">
        </div>
        <div>
            <label class="form" for="email">email:</label>
            <input class="input" type="text" id="email" name="email" 
                value="'.(!empty($data["email"]) ? $data["email"] : '') .'">';
            echo '<span class="error">' . $data['emailErr'] . '</span>';
            echo '
        </div>
        <div>
            <label class="form" for="password">wachtwoord:</label>
            <input class="input" type="text" id="password" name="password" 
                value="'.(!empty($data["password"]) ? $data["password"] : '') .'">';
            echo '<span class="error">' . $data['passwordErr'] . '</span>';
            echo '
        </div>
        <div>
            <input type="submit" value="verstuur">
        </div>
';}