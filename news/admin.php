<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
    <h1>ADMIN PAGE</h1>
    <form method="POST" action="">
        <b>enter your news:<b><br>
        <textarea type="textarea" name="txtarea" rows="30" cols="60" required></textarea><br><br>
        <input type="submit" name="upload" value="upload"><br><br>
    </form>
    <a href="logout.php">logout</a>
</body>
</html>