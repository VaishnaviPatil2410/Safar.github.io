<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Safar">
        <meta name="keyword" content="journey, travel, india, vacation, holiday, trip">
        <title>Safar</title>
        <link rel="stylesheet" type="text/css" href="project.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="main-div">
            <div class="navigation" >
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#"><span class="nav-name">Safarnama</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div  class="collapse navbar-collapse" id="navbarSupportedContent">
                      <div class="navmenu" style="padding-right: 20px; background-image: url(bg.jpg);">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="index.html"><span class="menuname">Home</span> <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="Destination.html"><span class="menuname">Destination</span></a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="menuname">Packages</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="Family.html"><span class="drop">Family</span> </a>
                              <a class="dropdown-item" href="Honeymoon.html"><span class="drop">Honeymoon</span></a>
                              <a class="dropdown-item" href="Group.html"><span class="drop">Group</span></a>
                              <a class="dropdown-item" href="Solo.html"><span class="drop">Solo</span></a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="About.html"><span class="menuname">About Us</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="Login.html"><span class="menuname">Login</span></a>
                          </li>
                        </ul>
                      </div>
                      <!-- <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form> -->
                    </div>
                  </nav>
            </div>
            <div class="carouseldiv">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="cimg" class="d-block w-100" src="https://i.pinimg.com/originals/e1/a3/72/e1a3720157903cc65105ce69189475db.jpg" alt="Manali">
                  </div>
                  <div class="carousel-item">
                    <img class="cimg" class="d-block w-100" src="https://wallpapercave.com/wp/wp2649830.jpg" alt="Kerala">
                  </div>
                  <div class="carousel-item">
                    <img class="cimg" class="d-block w-100" src="https://c4.wallpaperflare.com/wallpaper/404/633/114/5bd34ad9b11a2-wallpaper-preview.jpg" alt="Goa">
                  </div>
                  <div class="carousel-item">
                    <img class="cimg" class="d-block w-100" src="https://p4.wallpaperbetter.com/wallpaper/734/917/152/beautiful-beauty-camel-desert-wallpaper-preview.jpg" alt="Desert">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>

        </div>
        
    </body>
    </html>