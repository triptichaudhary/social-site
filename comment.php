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
                    var  img = document.getElementById('textcomment');
                    if(img.value.trim() == ""){
                        alert('Please enter comments.!!');
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
                            <td  height="500" valign="top" style="padding-left: 10px;">
                                <form action="sourcecode/comments.php" method="post">
                                    <table cellpadding="5" cellspacing="5" border="0">
                                        <tr>
                                            <td class="heading" colspan="2">Add Commnets</td>
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
                                            <td >Comment:</td>
                                            <td>
                                                <textarea style="height: 60px;width: 400px;" name="textcomment" id="textcomment"></textarea>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="2" align="right"><input type="submit" name="btncomment" id="btncomment" class="button" value="Post" onclick="return validate();"/></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <div style="height: 300px;overflow: auto;">
                                                    <table cellpadding="2" cellspacing="2" width="100%">
                                                        <tr>
                                                            <td class="heading_lable">Comment</td>
                                                            <td class="heading_lable">Date</td>
                                                            <td class="heading_lable">Delete</td>
                                                        </tr>
                                                        <?php
                                                        $ctr = 0;
                                                        $query2 = "select * from comments where user_id = '$user_id' order by date desc";
                                                        $res2 = mysql_query($query2);
                                                        while ($row2 = mysql_fetch_array($res2)) {
                                                            $ctr++;
                                                        ?>
                                                        <tr bgcolor="#f2f2f2">
                                                            <td height="25" style="max-width: 250px;line-height: 20px;color: #232323;">
                                                                <?php echo $row2 ['comment']; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row2 ['date']; ?>
                                                            </td>
                                                            <td>
                                                                <a class="leftlink" href="sourcecode/comments.php?commentid=<?php echo $row2 ['comment_id']; ?>">Delete</a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        }
                                                        ?>


                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" class="footer" align="center">Design & Develop By : Aditya Raj & Simran Suri</td>
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


