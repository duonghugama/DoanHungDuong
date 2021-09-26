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
    <div class="container mys"">
        <h1>Manage Order</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">Food</th>
                    <th scope="col">Price</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Total</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mixed Pizza</td>
                    <td>10.00</td>
                    <td>2</td>
                    <td>20.00</td>
                    <td>2020-11-30 04:07:17</td>
                    <td class="text-table der">Delivered</td>
                    <td>Jana Bush</td>
                    <td>+1(562)101-2028</td>
                    <td>tydujy@mailinator.com</td>
                    <td>Minima iure ducimus</td>
                    <td style="font-weight: 500"><mark style="background-color: #1da13e;"> Update Order </mark></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Best Burger</td>
                    <td>4.00</td>
                    <td>4</td>
                    <td>16.00</td>
                    <td>2020-11-30 03:52:43</td>
                    <td class="text-table der">Delivered</td>
                    <td>Kelly Dillard</td>
                    <td>+1(908)914-3106</td>
                    <td>fexekihor@mailinator.com</td>
                    <td>Incidunt ipsum ad d</td>
                    <td style="font-weight: 500"><mark style="background-color:#1da13e;"> Update Order </mark></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Sadeko Momo</td>
                    <td>6.00</td>
                    <td>3</td>
                    <td>18.00</td>
                    <td>2020-11-30 03:49:48</td>
                    <td class="text-table can">Cancelled</td>
                    <td>Bradley Farrell</td>
                    <td>+1(576)504-4657</td>
                    <td>zuhafiq@mailinator.com</td>
                    <td>Duis aliqua Qui lor</td>
                    <td style="font-weight: 500"><mark style="background-color: #1da13e;"> Update Order </mark></td>
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
</body>

</html>