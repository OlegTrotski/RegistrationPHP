<?php
if (isset($_POST["edit"]))
{
    session_start();
    $username = $_SESSION["username"];
    echo $username;
    include_once('functions.inc.php');
    include_once('db.inc.php');
    unset($_SESSION["profileimage"]);
    $uploaddir = "/uploads/";
    $profileimage_name = $_FILES['profileimage']['name'];
    $profileimage_tmp = $_FILES['profileimage']['tmp_name'];
    $_SESSION["profileimage"] = $uploaddir . $profileimage_name;
    $uploadedfile = $uploaddir . $profileimage_name;
    move_uploaded_file($profileimage_tmp,"../".$uploaddir.$profileimage_name);
    profileEdit($username,$uploadedfile,$connection);
}   

?>
