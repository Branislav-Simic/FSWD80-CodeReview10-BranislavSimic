<?php 

require_once 'actions/db_conection.php';

if ($_GET['id']) {
   $id = $_GET['id'];
   // echo $id; 

   $sql = "SELECT * FROM books WHERE id = {$id}";
   // echo $sql;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit User</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">

   <style type= "text/css">
       fieldset {
          /*  margin : auto; */
          /*  margin-top: 20%; */
           margin-left: 21%;
            width: 100%;

       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update user</legend>

  <form action="actions/a_create.php" method="POST" class="w-50">
                    <!-- Book title -->
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-heading"></i></i></div>
                        </div>
                        <input type="text" name="book_title" autocomplete="off" placeholder="Title" value="<?php echo $data['book_title'] ?>" class="form-control" id="inlineFormInputGroup">
                   <!--Author  -->
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-at"></i></i></div>
                        </div>
                        <input type="text" name="book_author" autocomplete="off" placeholder="Author Fullname" value="<?php echo $data['book_author'] ?>" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                    </div>
                    <!-- two inputs in one row -->
                    <div class="row pt-2">
                        <!-- Column with the PUBLISH DATE -->
                        <div class="col">
                            <div class="input-group mb-2 ">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-warning"><i class="fas fa-upload"></i></i></div>
                                </div>
                                <input type="date" name="book_publishing_date" autocomplete="off" placeholder="Publishing date" value="<?php echo $data['book_publishing_date'] ?>" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            </div>
                        </div>
                        <!-- Column with the CATEGORY -->
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-warning"><i class="fas fa-list-alt"></i></i></div>
                                </div>
                                <input type="text" name="book_category" autocomplete="off" placeholder="category" value="<?php echo $data['book_category'] ?>" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <!-- Publishing company -->
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-building"></i></div>
                        </div>
                        <input type="text" name="book_publisher" autocomplete="off" placeholder="Publisher"  value="<?php echo $data['book_publisher'] ?>"class="form-control" id="inlineFormInputGroup" placeholder="Username">
                    </div>
                    <!-- two inputs in one row -->
                    <div class="row pt-2">
                        <!-- Column with the STATUS -->
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-warning"><i class="fas fa-question-circle"></i></i></div>
                                </div>
                                <input type="text" name="status" autocomplete="off" placeholder="Availible or reserved" value="<?php echo $data['status'] ?>" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            </div>
                        </div>
                        <div class="col">
                            <!-- Column with the ISBN-CODE -->
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-warning"><i class="fas fa-barcode"></i></i></div>
                                </div>
                                <input type="text" name="ISBN-Code" autocomplete="off" placeholder="ISBN-Code" value="<?php echo $data['ISBN_CODE'] ?>" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-image"></i></div>
                        </div>
                        <input type="text" name="book_img" autocomplete="off" placeholder="Insert Book image as URL" value="<?php echo $data['book_img'] ?>" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Book Description</label>
                        <textarea class="form-control" name="book_description" placeholder="Insert a Book description" value="<?php echo $data['book_description'] ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
            </div>
          
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><button  type= "submit" class="btn btn-success btn-lg px-4"><i class=" fas fa-check"></i></button ></td>
               <td><a  href= "index.php"><button  type="button" class="btn btn-dark btn-lg px-4"><i class="fas fa-long-arrow-alt-left"></i></button ></a ></td >
           </tr>
  

</fieldset >

</body >
</html >

<?php
}
?>