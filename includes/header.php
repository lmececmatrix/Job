<?php

include 'includes/vars.php';
include 'includes/manager.php';
include 'includes/auth.php';
include 'includes/database.php';

/* Start Database */

$database = Database::connect(db_server, db_name, db_username, db_password);

if ($database == null) {
    redirect(PAGES['Error']);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- Start Css -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/all.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css" />
</head>

<body>
    <div class="header">
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img class="logo" src="images/logo.jpg" />
                        </a>
                        <!-- Start Login Button -->

                        <div class="d-flex">
                            <button class="navbar-toggler m-0" type="button" data-bs-toggle="collapse"
                                data-bs-target="#main" aria-controls="main" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- Start Menu -->
                            <div class="collapse navbar-collapse" id="main">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php"><?= $resource['Home'] ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="jobs.php"><?= $resource['Jobs'] ?></a>
                                    </li>
                                    <?php if (Authenticate::isAuth()) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="profile.php"><?= $resource['Profile'] ?></a>
                                    </li>
                                    <?php } ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="aboutus.php"><?= $resource['AboutUs'] ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contactus.php"><?= $resource['ContactUs'] ?></a>
                                    </li>
                                </ul>
                            </div>
                            <?php if (!Authenticate::isAuth()) { ?>
                            <button class="btn btn-primary ms-1 button">Login</button>
                            <button class="btn btn-primary ms-1 button">Sign Up</button>
                            <?php } ?>
                            <!-- Start Dialog -->
                            <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <?php if (isset($banner)) { ?>
        <div class="container">
            <div class="banner">
                <h1 class="fs-4">About Us</h1>
                <p class="fs-6 text-black-50">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.
                </p>
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- Start Brand -->