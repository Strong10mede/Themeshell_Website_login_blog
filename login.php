<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThemeShell</title>
    <link rel="stylesheet" href="mycustom.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-dark fs-3 font-weight-bold" href="#">ThemeShell</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-dark fs-4" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="detail.html">Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="login.php">Login</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

            </div>
        </div>
    </nav>

    <section class="hero py-4">
        <div class="container d-flex justify-content-center align-items-center h-100">
            <h1 class="font-weight-bold fs-1 text-white">Author Login</h1>
        </div>
    </section>

    <main class="content bg-light container my-2">
        <section class="row justify-content-center">
          <form action="./php/login.php" class="col-md-8" method="post">
                
                <div class="form-group row">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email">
                  </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input id="inputPassword" type="password" placeholder="password" class="form-control" name="password">
                    </div>
                    </div>
                <div class="form-group row text-center">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary px-2 fs-4">Submit</button>
                  </div>
                </div>
          </form>
        </section>
        
    </main>

    <section class="hero py-5">
        <div class="d-flex justify-content-center flex-wrap">
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>
            <a href="#" class="badge badge-secondary badge-lg fs-4 m-1">Bootstrap</a>


        </div>
    </section>

    <footer class="bg-dark text-white py-4 d-flex justify-content-center mt-2">
        <div class="container text-center">
            <h2 class="fs-3">ThemeShell</h2>
            <p class="fs-4"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa magnam tempore nam id quod in
                distinctio, cumque explicabo quasi, sapiente dolor ab! Magni iste beatae impedit fugit officiis aliquam
                error placeat deleniti quos maiores id aspernatur rem veniam eveniet, ab ea tenetur inventore. Ex
                quisquam mollitia, veritatis excepturi commodi ratione.</p>
            <div class="d-flex justify-content-center flex-wrap">
                <a href="#" class="badge badge-primary fs-4 m-1 p-1">Privacy Policy</a>
                <a href="#" class="badge badge-primary fs-4 m-1 p-1">Terms of Service</a>
                <a href="#" class="badge badge-primary fs-4 m-1 p-1">Contact Us</a>
                <a href="#" class="badge badge-primary fs-4 m-1 p-1">About Us</a>
                <a href="#" class="badge badge-primary fs-4 m-1 p-1">Phone Number</a>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>