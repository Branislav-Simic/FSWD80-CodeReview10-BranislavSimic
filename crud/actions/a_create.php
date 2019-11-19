<!DOCTYPE html>
<html>
<head>

   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cr10</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
</head>

<?php 

require_once 'db_conection.php';

if ($_POST) {
   $booktitle = $_POST['book_title'];
   $bookauthor = $_POST['book_author'];
   $bookpubdate = $_POST['book_publishing_date'];
   $bookpublisher = $_POST['book_publisher'];
   $bookimg = $_POST['book_img'];
   $bookcode = $_POST['ISBN-Code'];
   $bookcatergory = $_POST['book_category'];
   $bookdesc = $_POST['book_description'];
   $bookstatus = $_POST['status'];

   

   $sql = "INSERT INTO books (book_title,book_author, book_publishing_date, book_publisher,book_img, ISBN_CODE, book_category, book_description, status )
    VALUES ('$booktitle','$bookauthor','$bookpubdate','$bookpublisher','$bookimg','$bookcode','$bookcatergory','$bookdesc','$bookstatus')";

    if($connect->query($sql) === TRUE) {
       echo "<p class='justify-content-center'>New Record Successfully Created</p>" ;
    
      echo "<a href='../create.php'><button type='button' class=' btn btn btn-secondary btn-dark btn-lg mx-4 px-4' title='Back'><i class='fas fa-long-arrow-alt-left'></i></button></a>";

        echo "<a href='../index.php'><button type='button' class=' btn btn btn-secondary btn-success btn-lg mx-4 px-4' title='Home'><i class='fas fa-home'></i></button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>
<body>
  
</body>
</html>