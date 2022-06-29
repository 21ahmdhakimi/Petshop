<?php
require 'fx.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>PetShop | Log In</title>
</head>
<style>
    body {
        margin: 0;
        font-family: monospace;
        background-color: #E6E2DD;
        font-size: 20px;
    }

    #header {
        top: 0;
        width: 100%;
        position: fixed;
        overflow: hidden;
        background-color: #7DA2A9;
        padding: 20px 10px;
    }

    #header a {
        color: black;
        padding: 12px;
        font-size: 18px;
        font-weight: bold;
        text-decoration: none;
        line-height: 25px;
        border-radius: 4px;
    }

    #header a:hover {
        background-color: #ddd;
        color: black;
    }

    #footer {
        overflow: hidden;
        padding: 22px 10px;
        background-color: #7DA2A9;
        color: black;
        text-align: center;
    }

    #button {
        background-color: #7DA2A9;
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>

<body>
    <div id="header" align="center">
        <h1>Pet Shop Website</h1>
    </div>

    <br><br><br><br><br><br><br>

    <div align="center">
        <h1>Log In</h1>
        <input type="radio" name="loginRadio" onclick="showForm(this.value)" value="customer" checked>Customer
        <input type="radio" name="loginRadio" onclick="showForm(this.value)" value="admin">Admin<br>
    </div>

    <script language="javascript">
        function showForm(value) {
            if (value == "customer") {
                document.getElementById("customerLogin").hidden = false;
                document.getElementById("adminLogin").hidden = true;
            } else {
                document.getElementById("customerLogin").hidden = true;
                document.getElementById("adminLogin").hidden = false;
            }
        }
    </script>

    <div id="customerLogin">
        <form action="" method="post">
            <table align="center">
                <tr>
                    <td><label for="cust_username">Username:</label></td>
                    <td><input type="text" id="cust_username" name="cust_username" /></td>
                </tr>
                <tr>
                    <td><label for="cust_password">Password:</label></td>
                    <td><input type="password" id="cust_password" name="cust_password" /></td>
                </tr>
            </table>
            <br>
            <div align="center">
                <button type="submit" name="submit" id="button">Login</button><br>
                <a style="font-size: 12px;" href="registerphp.php">Don't have account? Register now.</a>
            </div>
        </form>
    </div>
    <div id="adminLogin" hidden>
        <form action="" method="post">
            <table align="center">
                <tr>
                    <td><label for="admin_id">Admin ID:</label></td>
                    <td><input type="text" id="admin_id" name="admin_id" /></td>
                </tr>
                <tr>
                    <td><label for="admin_password">Password:</label></td>
                    <td><input type="password" id="admin_password" name="admin_password" /></td>
                </tr>
            </table>
            <br>
            <div align="center">
                <button type="submit" name="submit" id="button">Login</button>
            </div>
        </form>
    </div>

    <br><br><br><br><br><br><br>

    <div id="footer">
        <b>&copy; MyPet Sdn Bhd. All Rights Reserved (Educational Purposes)</b>
    </div>
</body>

</html>