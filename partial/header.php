
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- bootstrap css start -->
    <link rel="stylesheet" href="./asset/custom-css/style.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <!-- nav start  -->
      <nav
        class="navbar navbar-expand-lg navbar-light bg-white shadow-sm p-3 bg-body rounded"
      >
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="media/images/logo.png" alt="" height="60px" />
            <span class="ps-2">Job Board</span></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 py-2">
              <li class="nav-item ps-3">
                <a
                  class="nav-link active text-primary"
                  aria-current="page"
                  href="#"
                  >Home</a
                >
              </li>
              <li class="nav-item ps-3">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item ps-3">
                <a class="nav-link" href="#">Blogs</a>
              </li>
              <li class="nav-item ps-3">
                <a class="nav-link" href="#">Contact us</a>
              </li>
            </ul>
            <a href="" class="text-decoration-none me-3">Upload your CV</a>
            <div class="bg-light px-3 py-2 rounded-pill">
              <small>
                <a href="login.php" class="text-decoration-none">Login</a> /
                <a href="register.php" class="text-decoration-none">Register</a>
                <a href="logout.php" class="text-decoration-none">logout</a>
                </small
              >
            </div>
            <a href="" class="btn btn-primary ms-3 px-4">Job post</a>
          </div>
        </div>
      </nav>
      </header>