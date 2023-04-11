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
            <script type="text/javascript">
                //function for balnk field
                function validate(){
                    var  img = document.getElementById('fileimage');
                    if(img.value.trim() == ""){
                        alert('Please select image.!!');
                        img.focus();
                        return false;
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
                                include("header.php");
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td valign="top">
                                <?php include("leftmenu.php"); ?>
                            </td>
                            <td  height="500" valign="top" style="padding-left: 20px;">
                                <form action="sourcecode/uploadimge.php" method="post">
                                    <table cellpadding="5" cellspacing="5" border="0">
                                        <tr>
                                            <td class="heading" colspan="2">Friends List</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table align="center" border="0" cellpadding="2" cellspacing="2">
                                                    <?php
      $result = mysql_query("select f.friend_id,r.name,r.dob,r.gender,r.img_path from freinds_list f join regestration r where f.friend_id = r.id  and f.user_id='$user_id' ");
                                                    while ($row = mysql_fetch_array($result)) {
                                                    ?>
                                                        <tr align="center" bgcolor="#F9F9F9">
                                                            <td>
                                                      <img src="uploadedimages/<?php echo $row ['img_path']; ?>" height="80" width="120"/>
                                                            </td>
                                                            <td>
                                                                <table cellpadding="5" cellspacing="5" width="500">
                                                                    <tr>
                                                                        <td>Name : </td>
                                                                        <td class="leftlink"><?php echo $row ['name']; ?></td>
                                                                        <td>Gender : </td>
                                                                        <td><?php echo $row ['gender']; ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Email ID : </td>
                                                                        <td class="leftlink"><?php echo $row ['email']; ?></td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" class="footer" align="center">Design & Develop By : Nidhi Kumari</td>
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


