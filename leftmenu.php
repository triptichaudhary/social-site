<?php
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
$query1 = "select * from regestration where id = '$user_id'";
$res1 = mysql_query($query1);
while ($row1 = mysql_fetch_array($res1)) {
?>
    <div style="border-right: solid 1px #E17009;height: 500px;">
        <table width="200px" bgcolor="#fff" cellpadding="5" cellspacing="5">
            <tr>
                <td><img src="uploadedimages/<?php echo $row1 ['img_path']; ?>" height="150" width="180" border="1"></td>
            </tr>
            <tr>
                <td><a href="commenthome.php" class="leftlink">Home</a></td>
            </tr>
            <tr>
                <td><a href="commentimage.php" class="leftlink">Upload Image</a></td>
            </tr>
            <tr>
                <td><a href="comment.php" class="leftlink">Comment</a></td>
            </tr>
            <tr>
                <td><a href="chatting.php" class="leftlink">Chatting</a></td>
            </tr>    
            <tr>
                <td><a href="searchfriends.php" class="leftlink">Search Friends</a></td>
            </tr>
            <tr>
                <td><a href="FreintList.php" class="leftlink">Friend List</a></td>
            </tr>
            <tr>
                <td><a href="addcontacts.php" class="leftlink">Add Contacts</a></td>
            </tr>
            <tr>
                <td><a href="updateprofile.php" class="leftlink">Account Setting</a></td>
            </tr>
            <tr>
                <td><a href="uploadimage.php" class="leftlink">Change Profile Image</a></td>
            </tr>
            <tr>
                <td><a href="changepwd.php" class="leftlink">Change Password</a></td>
            </tr>
        </table>
    </div>
<?php
}
?>
