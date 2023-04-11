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
                            <td  height="500" valign="top" style="padding-left: 20px;">

                                <table cellpadding="5" cellspacing="5" border="0">
                                    <tr>
                                        <td class="heading" colspan="2">Friends Comments</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table align="center" border="0" cellpadding="2" cellspacing="2">

                                                <?php
                                                $result = mysql_query("select d.name,d.img_path,d.id from regestration d join freinds_list f where f.friend_id = d.id and f.user_id='$user_id' limit 10");
                                                while ($row = mysql_fetch_array($result)) {
                                                ?>
                                                    <tr align="center" bgcolor="#F9F9F9">
                                                        <td valign="top">
                                                            <a href="viewprofile.php?id=<?php echo $row ['id']; ?>">
                                                                <img src="uploadedimages/<?php echo $row ['img_path']; ?>" height="80" width="120"/>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <table cellpadding="5" cellspacing="5" width="500">
                                                                <tr>
                                                                    <td class="leftlink"><?php echo $row ['name']; ?></td>
                                                                </tr>
                                                            <?php
                                                            $ctr = 0;
                                                            $query2 = "select * from comments where user_id = '" . $row ['id'] . "' order by date desc limit 6";
                                                            $res2 = mysql_query($query2);
                                                            while ($row2 = mysql_fetch_array($res2)) {
                                                                $ctr++;
                                                            ?>
                                                                <tr>
                                                                    <td height="25" style="max-width: 250px;line-height: 20px;color: #232323;">
                                                                    <?php echo $row2 ['comment']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row2 ['date']; ?>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                                    $query3 = "select * from postcomments where comment_id ='" . $row2 ['comment_id'] . "'";
                                                                    $res3 = mysql_query($query3);
                                                                    while ($row3 = mysql_fetch_array($res3)) {
                                                            ?>
                                                                        <tr>
                                                                            <td height="25" style="max-width: 250px;line-height: 20px;color: #232323;">
                                                                                <b><?php echo $row3 ['uname']; ?> :</b>
                                                                    <?php echo $row3 ['comment']; ?>
                                                                    </td>
                                                                    <td>
                                                                    <?php echo $row3 ['date']; ?>
                                                                    </td>
                                                                </tr>

                                                            <?php } ?>

                                                                    <tr>
                                                                        <td colspan="2" valign="baseline">
                                                                            <form action="sourcecode/postcomment.php" method="post">
                                                                                <input type="hidden" value=" <?php echo $row2 ['comment_id']; ?>" name="hidcommentid" id="hidcommentid"/>
                                                                                <textarea rows="2" cols="25" name="postcomment" id="postcomment"></textarea>&nbsp;&nbsp;<input type="submit" value="Comment" class="button" />
                                                                            </form>
                                                                        </td>
                                                                    </tr>
                                                            <?php
                                                                }
                                                            ?>

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


