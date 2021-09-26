<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="navigation_bar">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-4">
                    <img src="img/logo.png" alt="" class="img-fluid">
                </div>
                <div class="col"></div>
                <div class="col">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item border-0">
                            <a class="text-decoration-none" href="home.php">Home</a>
                        </li>
                        <li class="list-group-item border-0">
                            <a class="text-decoration-none" href="categories.php">Categories</a>
                        </li>
                        <li class="list-group-item border-0">
                            <a class="text-decoration-none" href="food.php">Food</a>
                        </li>
                        <li class="list-group-item border-0">
                            <a class="text-decoration-none" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clear-float"></div>
    </section>

    <section class="food-search">
        <div class="row align-items-center justify-content-center">
            <div class="col-2"></div>
            <div class=" col-7">
                <input class="form-control" type="text" placeholder="Search for food...">
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-danger btn-lg">Search</button>
            </div>
        </div>
    </section>

    <section class="food-menu">
        <div class="container-sm ">
            <div class="container">
                <h2 class="text-center fw-bold my-3">Food menu</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card border-curve">
                        <div class="row card-body">
                            <div class="col-md-3 p-3">
                                <img src="img/menu-pizza.jpg" alt="Pizza" class="img-fluid border-curve">
                            </div>
                            <div class="col">
                                <h6 class="card-title fw-bold">Mixed Pizza</h6>
                                <p>$10.00</p>
                                <p>Pizza with chicken, Ham, Buff, Mushroom and Vegetables</p>
                                <a href="oder.php" class="btn btn-danger btn-sm">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-curve">
                        <div class="row card-body">
                            <div class="col-md-3 p-3">
                                <img src="img/menu-burger.jpg" alt="Burger" class="img-fluid border-curve">
                            </div>
                            <div class="col">
                                <h6 class="card-title fw-bold">Best Burger</h6>
                                <p>$4.0</p>
                                <p>Burger with Ham, Pineapple and lots of Cheese.</p>
                                <a href="oder.php" class="btn btn-danger btn-sm">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-curve">
                        <div class="row card-body">
                            <div class="col-md-3 p-3">
                                <img src="img/menu-momo.jpg" alt="Momo" class="img-fluid border-curve">
                            </div>
                            <div class="col">
                                <h6 class="card-title fw-bold">Dumplings Specials</h6>
                                <p>$5.00</p>
                                <p>Chicken Dumpling with herbs from Mountainss</p>
                                <a href="oder.php" class="btn btn-danger btn-sm">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-curve">
                        <div class="row card-body">
                            <div class="col-md-3 p-3">
                                <img src="img/menu-momo.jpg" alt="Momo" class="img-fluid border-curve">
                            </div>
                            <div class="col">
                                <h6 class="card-title fw-bold">Sadeko Momo</h6>
                                <p>$2.5</p>
                                <p>Made with Italian Sauce, Chicken, and organice vegetable</p>
                                <a href="oder.php" class="btn btn-danger btn-sm">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center my-3">
                <a href="#" class="red text-decoration-none fw-light">See All Foods</a>
            </div>
        </div>
        <div class="clear-float"></div>
    </section>

    <section class="social">
        <div class="container text-center ">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/48/000000/facebook.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v1.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/color/48/000000/twitter--v2.png" /></a>
                </li>
            </ul>
        </div>
    </section>

    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed by <a href="https://github.com/duonghugama" target="_blank">duonghaiten</a></p>
        </div>
    </section>
</body>

</html>