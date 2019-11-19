
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


   $id = $_POST['id'];

   $sql = "UPDATE books SET book_title= '$booktitle', book_author = '$bookauthor', book_publishing_date = '$bookpubdate', book_publisher= '$bookpublisher', book_img='$bookimg', ISBN-Code='$bookcode', book_category='$bookcatergory', book_description='$bookdesc', status='$bookstatus';

   WHERE id = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>