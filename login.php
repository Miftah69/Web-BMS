<?php 
$title="Login";
$error=null;
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
	$user = $_POST['username'];
	$passwd = $_POST['password'];
	$sql = "SELECT * FROM login WHERE username='{$user}' AND password='{$passwd}'";
	$result = mysqli_query($conn, $sql);
	if ($result && $result->num_rows > 0) {
		session_start();
		$_SESSION['isLogin'] = 1;
		header('location: index.php');
	} else
		$error = "username atau Password salah.";
}
include_once 'header.php';
 ?>
 <div id="templatemo_content_container">
        <div id="templatemo_content">
            <div id="templatemo_content_left">
            <div class="templatemo_post">
                    <div class="post_title">LOGIN</div>
					<div class="post_body">
						<form name="f1" action="" method="post">
							<table width="400" height="153" border=1>
								<tr>
									<th align="center">User Type:</th>
									<td align="center">
										<select name="usrtype">
											<option value="">--Select--</option>
											<option value="Student">Student</option>
											<option value="Staff">Staff</option>
										</select>
									</td>
								<tr>
									<td align="center">User name</td>
									<th align="center"><input type="text" name="name" /></th>
								</tr>
								<tr>
									<td align="center">Password</td>
									<th align="center"><input type="password" name="pw" /></th>
								</tr>
								<tr>
									<td colspan=2 align="center"><input type="submit" align="center" name="submit" value="login" class="CSSButton"/></td>
								</tr>
								<tr>
									<th colspan="2" align="center"><a href="forgotpassword.php">Forget Password? Click Here</a></th></tr>
							</table>
						</form>
                    </div>
                    <div id="templatemo_content_right">
          <div class="templatemo_right_section">
           
            <img src="img/user.jpg" width="150" height="200"/>
          </div>
          </div>
 <?php include_once 'footer.php' ?>