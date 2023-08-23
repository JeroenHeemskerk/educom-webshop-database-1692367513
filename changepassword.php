<?php
include_once 'sessions.php';
include_once "user.service.php";
function ChangePassword() {
    $oldpasswordErr = $passwordErr = $passwordcheckErr = "";
    $oldpassword = TestInput(getPostVar('oldpassword'));
    $password = TestInput(getPostVar('password'));
    $passwordcheck = TestInput(getPostVar('passwordcheck'));
    $passwordvalid = false;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($password)) {
            $passwordErr = "wachtwoord is verplicht";
        } else if (empty($passwordcheck)) {
            $passwordcheckErr = "herhaal wachtwoord is verplicht";
        } else if ($password != $passwordcheck) {
            $passwordErr = $passwordcheckErr = "wachtwoorden moeten hetzelfde zijn";
        }
        if (empty($oldpassword)) {
            $oldpasswordErr = "wachtwoord is verplicht";
        } else {
            $user = AuthorizeUser(getLogInEmail() ,$oldpassword);
                if($user == "error"){
                    $oldpasswordErr = "deze wachtwoord hoort niet bij dit account";
                }         
            }
        if (empty($oldpasswordErr) && empty($passwordErr) && empty($passwordcheckErr)) {
            $passwordvalid = true;
        }
    }
    return array ("passwordvalid"=> $passwordvalid, "oldpassword" => $oldpassword, "password" => $password, "passwordcheck" => $passwordcheck,
    "oldpasswordErr" => $oldpasswordErr, "passwordErr" => $passwordErr, "passwordcheckErr" => $passwordcheckErr);
}

function ShowPasswordForm($data) {echo '
    <form action="index.php" method="post" name="changepassword">
        <div>
            <input type="hidden" name="page" value="changepassword">
        </div>
        <div>
            <label class="form" for="oldpassword">oud wachtwoord:</label>
            <input class="input" type="text" id="oldpassword" name="oldpassword" 
                value="'.(!empty($data["oldpassword"]) ? $data["oldpassword"] : '') .'">';
            echo '<span class="error">' . $data['oldpasswordErr'] . '</span>';
            echo '
        </div>
        <div>
            <label class="form" for="password">nieuw wachtwoord:</label>
            <input class="input" type="text" id="password" name="password" 
                value="'.(!empty($data["password"]) ? $data["password"] : '') .'">';
            echo '<span class="error">' . $data['passwordErr'] . '</span>';
            echo '
        </div>
        <div>
            <label class="form" for="passwordcheck">herhaal wachtwoord:</label>
            <input class="input" type="text" id="passwordcheck" name="passwordcheck" 
                value="'.(!empty($data["passwordcheck"]) ? $data["passwordcheck"] : '') .'">';
            echo '<span class="error">' . $data['passwordcheckErr'] . '</span>';
            echo '
        </div>
        <div>
            <input type="submit" value="verstuur">
        </div>
';}