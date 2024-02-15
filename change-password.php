<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="change-p.php" method="post">
     	<h2>Change Password</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>Password Lama</label>
     	<input type="password" 
     	       name="op" 
     	       placeholder="Password Lama">
     	       <br>

     	<label>Password Baru</label>
     	<input type="password" 
     	       name="np" 
     	       placeholder="Password Baru">
     	       <br>

     	<label>Konfirmasi Password Baru</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Konfirmasi Password Baru">
     	       <br>

     	<button type="submit">UBAH PASSWORD</button>
          <a href="home.php" class="ca">HOME</a>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>