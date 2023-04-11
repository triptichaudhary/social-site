<?php
error_reporting(0);
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
$user_id = "";
$user_id = $_SESSION['USERID'];
if ($user_id != '') {
    include_once "connection/dbconfig.php"; //Connection */
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
                                include("header.php");
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td valign="top">
                                <?php include("leftmenu.php"); ?>
                            </td>
                            <td  height="500" valign="top" style="padding-left: 50px;">
                                <form action="sourcecode/updateprofile.php" method="post">
                                    <table cellpadding="5" cellspacing="5" border="0" width="500">
                                        <tr>
                                            <td class="heading" colspan="2">View Profile</td>
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
                                        <?php
                                                $id = $_GET['id'];
                                                $query = "select * from regestration where id = '$id'";
                                                $result = mysql_query($query);
                                                while ($row = mysql_fetch_array($result)) {
                                        ?>
                                                    <tr>
                                                        <td rowspan="5" valign="top">
                                                            <img src="uploadedimages/<?php echo $row ['img_path']; ?>" height="180" width="240" border="1">
                                                        </td>
                                                        <td class="teamname">Name:</td>
                                                        <td><?php echo $row ['name']; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="teamname">Email:</td>
                                                        <td><?php echo $row ['email']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="teamname">Phone:</td>
                                                        <td><?php echo $row ['phone']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="teamname">DOB:</td>
                                                        <td><?php echo $row ['dob']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="teamname">Location:</td>
                                                        <td><?php echo $row ['contact_as']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center"><a href="sourcecode/addfriends.php?fid=<?php echo $row ['id']; ?>" class="leftlink">Add Friends</a></td>
                                                        <td class="teamname">City:</td>
                                                        <td><?php echo $row ['address']; ?></td>
                                                    </tr>
                                        <?php
                                                }
                                        ?>
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
<?php
                                            } else {
                                                $_SESSION['MSG'] = "You must be login"; //set message in sessiong
                                                header("location:index.php");
                                            }
?>


