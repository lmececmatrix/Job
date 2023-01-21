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
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <div class="header">
      <div class="nav-bar">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
                <img
                  class="logo"
                  src="https://scontent.fcai22-2.fna.fbcdn.net/v/t39.30808-6/275634928_4869720069759957_1221003474556286464_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=pAZYGiwFDhwAX82kRp2&_nc_ht=scontent.fcai22-2.fna&oh=00_AfCmfbWlpoyZO0MZlr-boQlrJJdcePL_QTK-cSv3E0OztQ&oe=63CED132"
                />
              </a>
              <!-- Start Login Button -->

              <div class="d-flex">
                <button
                  class="navbar-toggler m-0"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#main"
                  aria-controls="main"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Start Menu -->
                <div class="collapse navbar-collapse" id="main">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Jobs</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact Us</a>
                    </li>
                  </ul>
                </div>
                <button class="btn btn-primary ms-1 button">Login</button>
                <button class="btn btn-primary ms-1 button">Sign Up</button>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- Start Brand -->
    <div class="container my-3 my-md-5">
      <div class="row">
        <div class="col-12 col-md-6 overflow-hidden">
          <iframe
            class="w-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13800.71922003523!2d31.319848499999996!3d30.14627495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581576e8dc74ed%3A0x9c5fd8ba1e59363e!2sIRON%20GYM!5e0!3m2!1sen!2seg!4v1674204924642!5m2!1sen!2seg"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
        <div class="col-12 col-md-6 my-3">
          <form class="d-flex flex-column h-100">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input
                type="email"
                class="form-control"
                id="email"
                placeholder="name@example.com"
              />
            </div>
            <div class="mb-3 h-75 overflow-hidden">
              <label for="message" class="form-label">Message</label>
              <textarea
                class="form-control h-100"
                id="message"
                rows="3"
              ></textarea>
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
              <img
                class="img-fluid logo mb-2"
                src="https://scontent.fcai22-2.fna.fbcdn.net/v/t39.30808-6/275634928_4869720069759957_1221003474556286464_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=rw8DhSBJPVEAX9WJ11e&_nc_ht=scontent.fcai22-2.fna&oh=00_AfAmilRF2IT8RFAiYFylNjBsJ4cG1b6F2UB-Xk2B_Q8ejQ&oe=63CADCB2"
              />
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
                  <a class="text-decoration-none text-white"
                    ><i class="fa-brands fa-facebook fs-4 m-2"></i
                  ></a>
                </li>
                <li>
                  <a class="text-decoration-none text-white"
                    ><i class="fa-brands fa-whatsapp fs-4 m-2"></i
                  ></a>
                </li>
                <li>
                  <a class="text-decoration-none text-white"
                    ><i class="fa-brands fa-instagram fs-4 m-2"></i
                  ></a>
                </li>
                <li>
                  <a class="text-decoration-none text-white"
                    ><i class="fa-brands fa-linkedin-in fs-4 m-2"></i
                  ></a>
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
