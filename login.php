<?php
error_reporting(0);

//clear cache
header('Cache-control: private'); // IE 6 FIX
// always modified
header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
// HTTP/1.1
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
// HTTP/1.0
header('Pragma: no-cache');


//session management
ob_start(); //start obeject
session_start(); //start sessiong
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/headerbar.css" rel="Stylesheet" type="text/css">
        <title>Friends World</title>
    </head>
    <body>
        <table cellpadding="0" rules="none" frame="box" cellspacing="0" border="0"  width="100%">
            <tr>
                <td>
                    <table cellpadding="0" cellspacing="0"  border="0" bgcolor="white" width="950px" align="center">
                      <tr>
                            <td colspan="2">
                                <?php
                                include("home_links.php");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" height="500" align="center">
                                <table>
                                    <tr>
                                        <td><img src="images/user_login.jpg"/></td>
                                        <td>
                                            <form id="frm" action="sourcecode/login.php" method="post">
                                                <fieldset style="height: auto;width: 300px;padding: 10px;">
                                                    <legend>Login</legend>
                                                    <table align="center" cellpadding="5" cellspacing="5">                                                       
                                                        <tr>
                                                            <td>
                                                                Login As
                                                            </td>
                                                            <td>
                                                      <input type="radio" name="rdologin" id="rdodoctor" value="admin"/>&nbsp;&nbsp;Admin
                                                      <input type="radio" name="rdologin" id="rdopatient" value="user" checked/>&nbsp;&nbsp;User
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>User Name:</td>
                                                            <td><input type="text" id="txtemailid" name="txtemailid" style="font-size: 15px; width: 180px; height: 30px;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Password:</td>
                                                            <td><input type="password" id="txtpass" name="txtpass" style="font-size: 15px; font-weight: bold; height: 30px; width: 180px;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" align="right">
                                                                <input type="submit" value="Login" name="btnlogin" id="btnlogin" class="button">
                                                            </td>
                                                        </tr>
                                                    </table>

                                                </fieldset>
                                            </form>
                                        </td>
                                        <td><img src="images/user_login.jpg"/></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" class="footer" align="center">Design & Develop By :Nidhi Kumari </td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table>
    </body>
</html>
