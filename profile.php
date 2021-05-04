<?php
session_start();
if (isset($_SESSION["id"]))
{
    echo 'Hello, ' . $_SESSION["username"] .'!';
    echo '<img src="' . $_SESSION["profileimage"] . '" alt="avatar">';
    echo '<br>';
    echo '<br>';
    echo 'Here you can edit your profile!';
    echo '<form action="includes/profile.inc.php" method="POST" enctype="multipart/form-data">';
    echo '<input type="file" name="profileimage" accept="image/*">';
    echo '<br>';
    echo '<button type="submit" name="edit">Edit</button>';
    echo '</form>';
}

?>