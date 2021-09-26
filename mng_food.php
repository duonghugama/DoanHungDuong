<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mng.css">
    <link rel="stylesheet" href="css/style.css">
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
    <div class="container mys">
        <h1>Manage Food</h1>
        <button type="button" class="btn btn-primary" style="cursor: pointer;">Add Food</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Featured</th>
                    <th scope="col">Active</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Dumplings Specials</td>
                    <td>$5.00</td>
                    <td><img src="img/menu-momo.jpg" alt="momo" class="img-fluid border-curve col-md-3"></td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td style="font-weight: 100" class="text-manage">
                        <a href="" class="btn" style="color:white; cursor: pointer; background-color: green">Update Order</a>
                        <a href="" class="btn btn-primary">Delete Food</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Best Burger</td>
                    <td>$4.00</td>
                    <td><img src="img/menu-burger.jpg" alt="burger" class="img-fluid border-curve col-md-3"></td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td style="font-weight: 100" class="text-manage">
                        <a href="" class="btn" style="color:white; cursor: pointer; background-color: green;">Update Order</a>
                        <a href="" class="btn btn-primary">Delete Food</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Smoky BBQ Pizza</td>
                    <td>$6.00</td>
                    <td><img src="img/menu-pizza.jpg" alt="pizza" class="img-fluid border-curve col-md-3"></td>
                    <td>No</td>
                    <td>Yes</td>
                    <td style="font-weight: 100" class="text-manage">
                        <a href="" class="btn" style="color:white; cursor: pointer; background-color: green;">Update Order</a>
                        <a href="" class="btn btn-primary">Delete Food</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Smoky BBQ Pizza</td>
                    <td>$6.00</td>
                    <td><img src="img/menu-momo.jpg" alt="momo" class="img-fluid border-curve col-md-3"></td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td style="font-weight: 100" class="text-manage">
                        <a href="" class="btn" style="color:white; cursor: pointer; background-color: green">Update Order</a>
                        <a href="" class="btn btn-primary">Delete Food</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Mixed Pizza</td>
                    <td>$10.00</td>
                    <td><img src="img/menu-pizza.jpg" alt="pizza" class="img-fluid border-curve col-md-3"></td>
                    <td>No</td>
                    <td>Yes</td>
                    <td style="font-weight: 100" class="text-manage">
                        <a href="" class="btn" style="color:white; cursor: pointer; background-color: green">Update Order</a>
                        <a href="" class="btn btn-primary">Delete Food</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Sed ipsum cillum in</td>
                    <td>$52.00</td>
                    <td style="color: red">Image not Added.</td>
                    <td>No</td>
                    <td>No</td>
                    <td style="font-weight: 100" class="text-manage">
                        <a href="" class="btn" style="color:white; cursor: pointer; background-color: green;">Update Order</a>
                        <a href="" class="btn btn-primary">Delete Food</a>
                    </td>
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