<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!--Bootstrap css--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--style css-->
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .admin_image {
            width: 100px;
            object-fit: contain;
        }

        footer {
            position: absolute;
            bottom: 0;
        }
    </style>
</head>

<body>
    <!--navbar--->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/retail-icon-01.png" alt="" class="logo">
            </div>
            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-link">
                        <a href="" class="nav-link">guest</a>
                    </li>
                </ul>
            </nav>
        </nav>
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>
        <!--third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../images/WhatsApp Image 2021-11-23 at 9.30.07 AM (1).jpeg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin name</p>
                </div>
                <div class="button text-center">
                    <button class="mx-1"><a href="" class="nav-link text-light bg-info my-1">Insert products</a></button>
                    <button class="mx-1"><a href="" class="nav-link text-light bg-info my-1">View products</a></button>
                    <button class="mx-1"><a href="./index.php?insert_categories" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button class="mx-1"><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button class="mx-1"><a href="" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button class="mx-1"><a href="" class="nav-link text-light bg-info my-1">View brands</a></button>
                    <button class="mx-1"><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
                    <button class="mx-1"><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button class="mx-1"><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
                    <button class="mx-1"><a href="" class="nav-link text-light bg-danger my-1">logout</a></button>
                </div>
            </div>
        </div>

        <!--forth child-->
        <div class="container">
            <?php
            if (isset($_GET['insert_categories'])) {
                include('insert_categories.php');
            }
            ?>
        </div>
        <footer class="footer bg-info text-light text-center">
            <hr />
            &copy2023. Developed by Hollali Kelvin Quarshie.
            <br />
            e-commerce website.
            <br />
            Contact: <a href="tel:+233 243658631" class="text-light text-decoration-none"><i class="fa fa-phone-square" aria-hidden="true"></i>+233 243658631</a> | Email: <a href="mailto:dheztinykartel@gmail.com" class="text-light text-decoration-none"><i class="fa fa-envelope-square" aria-hidden="true"></i>dheztinykartel@gmail.com</a>
        </footer>
    </div>
    <!--Bootstrap js--->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>