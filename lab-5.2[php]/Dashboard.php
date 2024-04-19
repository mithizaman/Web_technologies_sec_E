<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body>
        <center>
            <table border="1" height="auto" width="800px">
            <tr>
                <td colspan="8">
                    <table width="800px">
                        <tr>
                            <td align="Left">
                            <h1><b>XCompany</b></h1>
                            </td>
                            <td align="Right">
                            Logged in as Bob
                                <a href="View_profile.php"><?=$_SESSION['user']['username']?></a> 
                                <a href="../logout.php">Logout</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="150px" width="200px">
                    Account<br><hr>
                    <ul>
                        <li><a href="Dashboard.php">Dashboard</a></li>
                        <li><a href="View.Profile.php">View Profile</a></li>
                        <li><a href="Edit_Profile.php">Edit Profile</a></li>
                        <li><a href="Change_Profile_Picture.php">Change Profile Picture</a></li>
                        <li><a href="Change_Password.Php">Change Password</a></li>
                        <li><a href="Logout.php">Logout</a></li>
                    </ul>
                </td>
                <td>
                    <b>Welcome Bob <?=$_SESSION['user']['username']?></b>
                </td>
            </tr>
            <tr>
                <td align="middle"colspan="8">
                <p>Copyright 2017</p>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
<?php
	
	}else{
		header('location: LOGIN .php');
	}
?>