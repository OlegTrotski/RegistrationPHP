<?php
session_start();
if (isset($_SESSION["id"]))
{
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
    ?>
        <?php echo  'Hello, ' . $_SESSION["username"] .'!'; ?>
        <img src=" <?php echo $_SESSION["profileimage"] ?>" alt="avatar">
        <br>
        <br>
        First name: <?php echo $first_name ?>
        <br>
        Last name: <?php echo $last_name ?>
        <br>
        Here you can edit your profile!
        <form action="includes/profile.inc.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="profileimage" accept="image/*">
        <br>
        <button type="submit" name="edit">Edit</button>
        </form>
    <form action="includes/profile.inc.php" method="POST">
        <input type="text" name="fname" placeholder="First Name" size="25">
        <br>
        <input type="text" name="lname" placeholder="Last Name" size="25">
        <br>
        <button type="submit" name="save">Save</button>
    </form>   

    <?php
}
?>