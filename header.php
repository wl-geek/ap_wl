<!doctype html>
<html lang="en">
  <head>
    <title>Air Pollution by WL</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.css'/>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light py-3">
        <a class="navbar-brand" href="#">YANGON</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link px-3 hvr-grow-shadow" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 hvr-grow-shadow" href="aboutus.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 hvr-grow-shadow" href="news.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 hvr-grow-shadow" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 hvr-grow-shadow" href="#">FAQ</a>
                </li>
            </ul>
           
            <ul class="navbar-nav ml-auto m-0">
                <li class="nav-item ">
                    <!-- required bootstrap js -->
                    <button type="submit" name="commit" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#login">
                      Login/Signup
                    </button>
                    <div class="modal fade" id="login" role="dialog">
                      <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Login</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                            <form action="login.php" method="post">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                  <i class="fa fa-user"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="Username" aria-label="Email" aria-describedby="basic-addon1" name="user_name">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                  <i class="fa fa-lock"></i>
                                </span>
                              </div>
                              <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                            </div>
                            <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
                              <span>Login <i class="fa fa-sign-in"></i></span>
                            </button>
                            <div class="text-center">
                              <a class="" href="" data-dismiss="modal" data-toggle="modal" data-target="#signup">Signup</a>
                            </div></form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="signup" role="dialog">
                      <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Signup</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <div class="modal-body">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                  <i class="fa fa-user"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                  <i class="fa fa-envelope"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                  <i class="fa fa-lock"></i>
                                </span>
                              </div>
                              <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">
                                  <i class="fa fa-lock"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="Password confirmation" aria-label="Password confirmation" aria-describedby="basic-addon1">
                            </div>
                            <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
                              <span>Signup <i class="fa fa-sign-in"></i></span>
                            </button>
                            <div class="text-center">
                              <a class="" href="" data-dismiss="modal" data-toggle="modal" data-target="#login">Login</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    