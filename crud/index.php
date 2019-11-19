<?php require_once 'actions/db_conection.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>CodeReview10</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">

   <style type ="text/css">
      

        table {
           width: 100%;
            margin-top: 20px;
       }
       .d-flex button{
  margin: 1.5em 0.6em;
  padding: 0.5em 2.4em;
}
   </style>

</head>
<body>
<div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Big library</h1>
            
<div class ="manageUser">
  <div class="d-flex"> 
   <a href= "create.php"><button type="button" class=" btn btn-success" title="Create" ><i class='fas fa-plus'></i> Create Books</button></a>
  </div>
</a>
</div>

<div class="d-flex table-data justify-content-center">
            
            <table class="table table-striped table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Publish date</th>
                        <th>Publisher</th>
                        <th>Category</th>
                        <th>ISBN-Code</th>
                        <th>Descripton</th>
                        <th>Image</th>
                    </tr>
                </thead>
<tbody>

            <?php
           $sql = "SELECT * FROM books WHERE active = 0";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['book_title']." </td>
                       <td>" .$row['book_author']."</td>
                       <td>" .$row['status']."</td>

                        <td>" .$row['book_publishing_date']."</td> 
                        <td>" .$row['book_publisher']."</td> 
                        <td>" .$row['book_category']."</td> 
                        <td>" .$row['ISBN_CODE']."</td> 
                        <td>" .$row['book_description']."</td> 
                         <td><img src=".$row['book_img']."alt='book image'></td>

                       <td>
                           <a href='update.php?id=" .$row['id']."'><button type='button' class='btn btn-secondary btn-primary'><i class='fas fa-edit'></i></button></a>
                           <a href='delete.php?id=" .$row['id']."'><button type='button'class='btn btn-secondary btn-danger'><i class='fas fa-trash-alt'></i></button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

           
       </tbody>
            </table>
        </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>