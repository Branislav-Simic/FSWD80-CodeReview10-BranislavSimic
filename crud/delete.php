


<?php 

require_once 'actions/db_conection.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM books WHERE id = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete User</title>
   <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">

</head>
<body>

<h3>Do you really want to delete this user?</h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['id']?>" />
   <button type="submit" class="btn btn-outline-success">Yes, delete it!</button >
   <a href="index.php"><button type="button" class="btn btn-outline-danger">No, go back!</button ></a>
</form>

</body>
</html>

<?php
}