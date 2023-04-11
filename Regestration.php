<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
error_reporting(0);
ob_start();
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/headerbar.css" rel="Stylesheet" type="text/css">
        <script type="text/javascript" src="js/scw.js"></script>
        <title>Friends World</title>
        <script type="text/javascript">
            function validate(){

                var name = document.getElementById("txt_name").value;
                if(name == ""){
                    alert('Name field cannot be blank.');
                    return false;
                }
                var dob = document.getElementById("txt_dob").value;
                if(dob == ""){
                    alert('Please Enter Your Date Of Birth.');
                    return false;
                }
                var gender = document.getElementById("txt_gndr").value;
                if(gender=="na")
                {
                    alert('Please select a gender');
                    return false;
                }
                var phone = document.getElementById("txt_phone").value;
                if(phone == ""){
                    alert('Please Enter Your Contact Number.');
                    return false;
                }
                var Contact_as = document.getElementById("txt_cntas").value;
                if(Contact_as == ""){
                    alert('Please Select Contact As.');
                    return false;
                }
                var Email = document.getElementById("txt_eml").value;
                if(Email  == ""){
                    alert('Please Enter Your Email.');
                    return false;
                }
                var a = document.getElementById("txt_pass").value;
                if(a == ""){
                    alert('Password field cannot be blank.');
                    return false;
                }
                var b = document.getElementById("txtcpass").value;
                if(b == ""){
                    alert('Confirm Password field cannot be blank.');
                    return false;
                }
                if(a != b){
                    alert('Confirm password does not matched.');
                    return false;
                }
            }

            //check for Integer
            function checkInteger(i)
            {
                if(i.value.length>0)
                {
                    i.value = i.value.replace(/[^\d]+/g, '');


                }

            }
        </script>
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
                            <td>
                                <?php include("side_bar.php"); ?>                               

                            </td>
                            <td>
                                <form id="frm" action="sourcecode/registration.php" method="post">
                                    <table align="center" cellpadding="5" cellspacing="5">
                                        <tr>
                                            <td class="heading" colspan="2">Registration</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="middle" align="center">
                                                <?php
                                                if ($_SESSION['MSG'] != '') {
                                                    echo '<div class="msgbox">' . $_SESSION['MSG'] . '</div>';
                                                    $_SESSION['MSG'] = "";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >Name:</td>
                                            <td><input type="text"  id="txt_name" name="txt_name" style="width: 250px; height: 25px;"></td>
                                        </tr>
                                        <tr>
                                            <td >DOB:</td>
                                            <td><input type="text"  id="txt_dob" name="txt_dob"style="width: 250px; height: 25px;" readonly onClick="scwShow(this,event)"></td>
                                        </tr>
                                        <tr>
                                            <td >Gender:</td>
                                            <td>
                                                <select   id="txt_gndr" name="txt_gndr" style="width: 250px; height: 25px;">
                                                    <option value="select"> - - - -Select - - - - </option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >Phone</td>
            <td><input type="text"  id="txt_phone" name="txt_phone" style="width: 250px; height: 25px;" onKeyUp="checkInteger(this,value)"></td>
                                        </tr>
                                        <tr>
                                            <td >Location:</td>
                                            <td><input type="text"  id="txt_adrs" name="txt_adrs" style="width: 250px; height: 25px;"></td>
                                        </tr>
                                        <tr>
                                            <td >City:</td>
                                            <td><input type="text" id="txt_cntas" name="txt_cntas" style="width: 250px; height: 25px;"></td>
                                        </tr>

                                        <tr>
                                            <td >Email:</td>
                                            <td><input type="text"  id="txt_eml" name="txt_eml" style="width: 250px; height: 25px;"></td>
                                        </tr>
                                        <tr>
                                            <td >Password:</td>
                                            <td><input type="password"  id="txt_pass" name="txt_pass" style="width: 250px; height: 25px;"></td>
                                        </tr>
                                        <tr>
                                            <td >Confirm Password:</td>
                                            <td><input type="password"  id="txtcpass" name="txtcpass" style="width: 250px; height: 25px;"></td>
                                        </tr>
                                        <tr>
                                            <td align="center" colspan="2">
                                                <input type="submit" class="button" value="Submit" onClick="return validate();">
                                                <input type="reset" class="button" value="Reset">
                                            </td>
                                        </tr>
                                    </table>
                                </form>

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
