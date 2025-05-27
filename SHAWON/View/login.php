<?php

include "../Control/LoginValidation.php";

?>
<html>
<head>
    <title>Login</title>
    <script>
        function validate() {
            let phone = document.getElementById("phone").value;
            let password = document.getElementById("password").value;

            if (!phone || !password) {
                alert("All fields are required!");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <form method="post" action="../Control/LoginValidation.php" onsubmit="return validate()" align="center">
        <fieldset>
            <legend>Login</legend>
            <table align="center">
                <tr>
                    <td>phone:</td>
                    <td><input type="text" phone="phone" name="phone" value="" required /></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="password" name="password" value="" required /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="login" value="Login" />
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>