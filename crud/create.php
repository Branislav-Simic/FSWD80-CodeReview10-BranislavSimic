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

<body>
    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Big library</h1>
            <div class="d-flex justify-content-center">
                <form action="actions/a_create.php" method="POST" class="w-50">
                    <!-- Book title -->
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-heading"></i></i></div>
                        </div>
                        <input type="text" name="book_title" autocomplete="off" placeholder="Title" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                    </div>
                    <!--Author  -->
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-at"></i></i></div>
                        </div>
                        <input type="text" name="book_author" autocomplete="off" placeholder="Author Fullname" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                    </div>
                    <!-- two inputs in one row -->
                    <div class="row pt-2">
                        <!-- Column with the PUBLISH DATE -->
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-warning"><i class="fas fa-upload"></i></i></div>
                                </div>
                                <input type="date" name="book_publishing_date" autocomplete="off" placeholder="Publishing date" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            </div>
                        </div>
                        <!-- Column with the CATEGORY -->
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-warning"><i class="fas fa-list-alt"></i></i></div>
                                </div>
                                <input type="text" name="book_category" autocomplete="off" placeholder="category" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <!-- Publishing company -->
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-building"></i></div>
                        </div>
                        <input type="text" name="book_publisher" autocomplete="off" placeholder="Publisher" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                    </div>
                    <!-- two inputs in one row -->
                    <div class="row pt-2">
                        <!-- Column with the STATUS -->
                        <div class="col">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-warning"><i class="fas fa-question-circle"></i></i></div>
                                </div>
                                <input type="text" name="status" autocomplete="off" placeholder="Availible or reserved" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            </div>
                        </div>
                        <div class="col">
                            <!-- Column with the ISBN-CODE -->
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-warning"><i class="fas fa-barcode"></i></i></div>
                                </div>
                                <input type="text" name="ISBN-Code" autocomplete="off" placeholder="ISBN-Code" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            </div>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-warning"><i class="fas fa-image"></i></div>
                        </div>
                        <input type="text" name="book_img" autocomplete="off" placeholder="Insert Book image as URL" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Book Description</label>
                        <textarea class="form-control" name="book_description" placeholder="Insert a Book description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
            </div>
            <!-- Insert User -->
            <button type="submit" class="inse btn btn-secondary btn-success" title="Insert user"><i class="fas fa-paste"></i></i></button>
            <!-- Go back to index.php -->
            <td><a href="index.php"><button type="button" class="inse btn btn btn-secondary btn-dark" title="Back"><i class="fas fa-long-arrow-alt-left"></i></button></a></td>
            </form>
        </div>
        </div>
    </main>
</body>

</html>