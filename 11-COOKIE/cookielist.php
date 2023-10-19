<html>
<head>
<title>Choose List Cookies</title>
<style>#footer{
position:fixed;
padding:20px 20px 20px 10px;
bottom:0;
width:100%;
height:40px;
}
</style>
</head>
<body>
<form action="displaycookie.php" method="POST"/>
<input type="submit" name="submit" value="List Cookies"/>
</form>
<?php
setcookie("Name","surendra");
setcookie("user","srit");
setcookie("user1","srit1");
?>
<div id="footer">
<p align="center">&copy;surendra all rights reserved </p>
</div>
</body>
</html>