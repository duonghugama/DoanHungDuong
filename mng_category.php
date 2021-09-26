<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mng.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Restaurant Website</title>
</head>

<body>
    <!-- Header -->
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="mng_user.php">Admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="mng_category.php">Categories</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="mng_food.php">Food</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="mng_order.php">Order</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home.php">Logout</a>
        </li>
    </ul>
    <!-- end Header -->

    <!-- Table -->
    <div class="container mys" style="background-color: rgb(241, 240, 240)">
        <h1>Manage Category</h1>
        <button type="button" class="button-table" style="cursor: pointer;">Add Category</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Title</th>
                    <th scope="col">Image</th>
                    <th scope="col">Featured</th>
                    <th scope="col">Active</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Pizza</td>
                    <td><img src="img/menu-pizza.jpg" alt="pizza" class="img-fluid border-curve col-3"></td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td style="font-weight: 100" class="text-manage"><a href="" class="btn btn-primary" style="background-color: #2dc653; cursor: pointer; color: black">Update Order</a><a href="" class="btn btn-primary">Delete Food</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Burger</td>
                    <td><img src="img/burger.jpg" alt="burger" class="img-fluid border-curve col-3"></td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td style="font-weight: 100" class="text-manage"><a href="" class="btn btn-primary" style="background-color: #2dc653; cursor: pointer; color: black;">Update Order</a><a href="" class="btn btn-primary">Delete Food</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>MoMo</td>
                    <td><img src="img/menu-momo.jpg" alt="momo" class="img-fluid border-curve col-3"></td>
                    <td>No</td>
                    <td>Yes</td>
                    <td style="font-weight: 100" class="text-manage"><a href="" class="btn btn-primary" style="background-color: #2dc653; cursor: pointer; color: black;">Update Order</a><a href="" class="btn btn-primary">Delete Food</a></td>
                </tr>
               
            </tbody>
        </table>
    </div>

    <!-- end Table -->

    <!-- Footer -->
    <footer class="text-center footer">
        <!-- Copyright -->
        <p class="text-center text-last">All rights reserved. Designed By <a href="">DuongHaiten</a></p>
        <div class="text-center p-3 text-white">
            2021 All rights reserved, Food House. Developed By<a class="text-link" href="#"></a>
        </div>
    </footer>
    <!-- Footer -->
</body>

</html>