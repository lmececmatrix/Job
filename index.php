<?php
include_once 'includes\header.php';

$database = Database::connect(db_server, db_name, db_username, db_password);

if ($database == null) {
    redirect(PAGES['Error']);
}

$brands = $database->query('SELECT * FROM Brands', null);

if ($brands != null) {
?>
<!-- Start Brand -->
<div class="container p-lg-3 mt-2">
    <div class="row justify-content-center align-content-center">
        <?php for ($i = 0; $i < count($brands); $i++) { ?>
        <!-- Start Brand-->
        <div class="col-4 col-md-3 col-lg-2">
            <img class="img-fluid" src="<?= $brands[$i]['image'] ?>" />
        </div>
        <?php } ?>
    </div>
</div>
<?php } ?>


<div class="container my-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-4 col-lg-2 my-2">
            <div class="d-flex flex-column justify-content-center">
                <i class="fa-solid fa-computer icon text-color"></i>
                <h1 class="text-center text-color mt-2 title">
                    IT And Development
                </h1>
            </div>
        </div>
        <div class="col-4 col-lg-2 my-2">
            <div class="d-flex flex-column justify-content-center">
                <i class="fa-solid fa-screwdriver-wrench icon text-color"></i>
                <h1 class="text-center text-color mt-2 title">Engineer</h1>
            </div>
        </div>
        <div class="col-4 col-lg-2 my-2">
            <div class="d-flex flex-column justify-content-center">
                <i class="fa-solid fa-user-doctor icon text-color"></i>
                <h1 class="text-center text-color mt-2 title">Engineer</h1>
            </div>
        </div>
        <div class="col-4 col-lg-2 my-2">
            <div class="d-flex flex-column justify-content-center">
                <i class="fa-solid fa-dollar-sign icon text-color"></i>
                <h1 class="text-center text-color mt-2 title">Engineer</h1>
            </div>
        </div>
        <div class="col-4 col-lg-2 my-2">
            <div class="d-flex flex-column justify-content-center">
                <i class="fa-solid fa-computer icon text-color"></i>
                <h1 class="text-center text-color mt-2 title">
                    IT And Development
                </h1>
            </div>
        </div>
        <div class="col-4 col-lg-2 my-2">
            <div class="d-flex flex-column justify-content-center">
                <i class="fa-solid fa-screwdriver-wrench icon text-color"></i>
                <h1 class="text-center text-color mt-2 title">Engineer</h1>
            </div>
        </div>
        <div class="col-4 col-lg-2 my-2">
            <div class="d-flex flex-column justify-content-center">
                <i class="fa-solid fa-user-doctor icon text-color"></i>
                <h1 class="text-center text-color mt-2 title">Engineer</h1>
            </div>
        </div>
        <div class="col-4 col-lg-2 my-2">
            <div class="d-flex flex-column justify-content-center">
                <i class="fa-solid fa-dollar-sign icon text-color"></i>
                <h1 class="text-center text-color mt-2 title">Engineer</h1>
            </div>
        </div>
        <div class="col-4 col-lg-2 my-2">
            <div class="d-flex flex-column justify-content-center">
                <i class="fa-solid fa-computer icon text-color"></i>
                <h1 class="text-center text-color mt-2 title">
                    IT And Development
                </h1>
            </div>
        </div>
        <div class="col-4 col-lg-2 my-2">
            <div class="d-flex flex-column justify-content-center">
                <i class="fa-solid fa-screwdriver-wrench icon text-color"></i>
                <h1 class="text-center text-color mt-2 title">Engineer</h1>
            </div>
        </div>
        <div class="col-4 col-lg-2 my-2">
            <div class="d-flex flex-column justify-content-center">
                <i class="fa-solid fa-user-doctor icon text-color"></i>
                <h1 class="text-center text-color mt-2 title">Engineer</h1>
            </div>
        </div>
        <div class="col-4 col-lg-2 my-2">
            <div class="d-flex flex-column justify-content-center">
                <i class="fa-solid fa-dollar-sign icon text-color"></i>
                <h1 class="text-center text-color mt-2 title">Engineer</h1>
            </div>
        </div>
    </div>
</div>
<div class="container my-5 text-center">
    <h1 class="fs-3 text-color">Lastest Jobs</h1>
    <h3 class="fs-6 mb-5 mt-3 text-color">
        The Lastest Job To Travel Faster
    </h3>
    <div class="container">
        <?php
        $jobs = $database->query('SELECT * FROM Jobs Where language=:language', [
            ':language' => $language
        ]);

        for ($i = 0; $i < count($jobs); $i++) {
        ?>
        <div class="row">
            <div class="col-12 my-2">
                <div class="row rounded-5 job">
                    <div class="col-12 col-md-3 my-lg-0 my-2">
                        <img class="img-fluid rounded-5" src="<?php echo $jobs[$i]['image']; ?>" />
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="d-flex justify-content-between my-lg-1 align-items-center">
                            <h1 class="fs-6"><?php echo $jobs[$i]['title']; ?></h1>
                            <div class="d-flex align-content-center">
                                <p
                                    class="fs-5 m-0 mx-3 border-color d-flex justify-content-center align-items-center p-2 rounded-5 text-color fs-6">
                                    <?php
                                        $type = $database->query('SELECT * FROM type Where id=:id And language=:language', [
                                            ':id' => $jobs[$i]['type'],
                                            ':language' => $language
                                        ]);

                                        if ($type != null) {
                                            echo $type[0]['name'];
                                        }

                                        ?>
                                </p>
                                <button class="btn btn-primary button fs-6">Apply</button>
                            </div>
                        </div>
                        <p class="text-start p-2 p-lg-0 fs-6">
                            <?php echo substr($jobs[$i]['description'], 0, 200); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="container my-3">
    <div class="row">
        <div class="col-12 col-md-6">
            <img class="img-fluid" src="images/contact.jpg" />
        </div>
        <div class="col-12 col-md-6">
            <form class="d-flex flex-column h-100">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" />
                </div>
                <div class="mb-3 h-75 overflow-hidden">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control h-100" id="message" rows="3"></textarea>
                </div>
                <button class="btn btn-primary button">Send</button>
            </form>
        </div>
    </div>
</div>
<div class="bg-color">
    <div class="container">
        <div class="p-5">
            <div class="row justify-content-center">
                <div class="col-6 col-lg-4">
                    <img class="img-fluid logo mb-2"
                        src="https://scontent.fcai22-2.fna.fbcdn.net/v/t39.30808-6/275634928_4869720069759957_1221003474556286464_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=rw8DhSBJPVEAX9WJ11e&_nc_ht=scontent.fcai22-2.fna&oh=00_AfAmilRF2IT8RFAiYFylNjBsJ4cG1b6F2UB-Xk2B_Q8ejQ&oe=63CADCB2" />
                    <p class="text-white">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                        aut eius maiores suscipit pariatur? Maxime, debitis
                        consequuntur!
                    </p>
                </div>
                <div class="col-6 col-lg-4">
                    <h1 class="fs-3 text-white">Quick Links</h1>
                    <ul class="list-unstyled mt-4">
                        <li class="my-2">
                            <a class="text-decoration-none text-white">Home</a>
                        </li>
                        <li class="my-2">
                            <a class="text-decoration-none text-white">Jobs</a>
                        </li>
                        <li class="my-2">
                            <a class="text-decoration-none text-white">About Us</a>
                        </li>
                        <li class="my-2">
                            <a class="text-decoration-none text-white">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-lg-4 my-2 m-md-0">
                    <h1 class="fs-3 text-white">Social Links</h1>
                    <ul class="list-unstyled d-flex mt-4">
                        <li>
                            <a class="text-decoration-none text-white"><i
                                    class="fa-brands fa-facebook fs-4 m-2"></i></a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-white"><i
                                    class="fa-brands fa-whatsapp fs-4 m-2"></i></a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-white"><i
                                    class="fa-brands fa-instagram fs-4 m-2"></i></a>
                        </li>
                        <li>
                            <a class="text-decoration-none text-white"><i
                                    class="fa-brands fa-linkedin-in fs-4 m-2"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/all.js"></script>
<script src="js/main.js"></script>
</body>

</html>