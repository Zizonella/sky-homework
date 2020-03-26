<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div class="container">
             <div class="row h-25 d-inline-block"></div>
             <div class="row">
                 <div class="col-md-7">
             <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Login</a>
              </li>
              </div>
              <div class="col-md-5">
                <a href="Homepage.php"><img src="images/logo.png" max-width="400px" alt="Logo"/></a>
            </ul>
             </div>  
            </div>
             
            <div class="row">
                <div class="col-md-6"> 
                                    <div class="card border-secondary mb-3" style="max-width: 31.5rem;">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                              <div class="carousel-item active">
                                                  <img src="images/flat1.png" class="d-block w-100" alt="flat1">
                                              </div>
                                              <div class="carousel-item">
                                                  <img src="images/flat2.png" class="d-block w-100" alt="flat2">
                                              </div>
                                              <div class="carousel-item">
                                                <img src="images/flat3.png" class="d-block w-100" alt="flat3">
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
                                        <div class="card-body text-secondary">
                                          <h5 class="card-title">Secondary card title</h5>
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                  <div class="card border-secondary mb-3" style="max-width: 31.5rem;">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                              <div class="carousel-item active">
                                                  <img src="images/flat1.png" class="d-block w-100" alt="flat1">
                                              </div>
                                              <div class="carousel-item">
                                                  <img src="images/flat2.png" class="d-block w-100" alt="flat2">
                                              </div>
                                              <div class="carousel-item">
                                                <img src="images/flat3.png" class="d-block w-100" alt="flat3">
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
                                        <div class="card-body text-secondary">
                                          <h5 class="card-title">Secondary card title</h5>
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                  <div class="card border-secondary mb-3" style="max-width: 31.5rem;">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                              <div class="carousel-item active">
                                                  <img src="images/flat1.png" class="d-block w-100" alt="flat1">
                                              </div>
                                              <div class="carousel-item">
                                                  <img src="images/flat2.png" class="d-block w-100" alt="flat2">
                                              </div>
                                              <div class="carousel-item">
                                                <img src="images/flat3.png" class="d-block w-100" alt="flat3">
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
                                        <div class="card-body text-secondary">
                                          <h5 class="card-title">Secondary card title</h5>
                                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                </div>
                <div class="col-md-6">                  
                    <div class="search">
                       <form action="" method="POST" class="mt-4">
                         <div class="form-group row ">
                          <div class="col-sm-2"></div>
                          <label for="inputRegionId" class="col-sm-2 col-form-label">Region</label>
                          <div class="col-sm-5">
                              <input type="text" class="form-control" id="inputRegionId" name="region" placeholder="Region" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-2"></div>
                          <label for="inputBedrooms" class="col-sm-2 col-form-label" >Bedrooms</label>
                          <div class="col-sm-5" >
                            <input type="int" class="form-control" id="inputBedrooms" name="bedrooms" placeholder="Number of Bedrooms" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-2"></div>
                          <label for="inputBathrooms" class="col-sm-2 col-form-label" >Bathrooms</label>
                          <div class="col-sm-5" >
                            <input type="int" class="form-control" id="inputBathrooms" name="bathrooms" placeholder="Number of Bathrooms" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-2"></div>
                          <label for="inputTypeId" class="col-sm-2 col-form-label" >Type of Property</label>
                          <div class="col-sm-5" >
                            <input type="text" class="form-control" id="inputType" name="type" placeholder="Type of Property" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-2"></div>
                          <label for="inputAskingPrice" class="col-sm-2 col-form-label" >Asking Price</label>
                          <div class="col-sm-5" >
                            <input type="int" class="form-control" id="inputAskingPrice" name="askingPrice" placeholder="Price" required>
                          </div>
                        </div>
                           <div class="dropdown" style="margin-left: 200px; margin-bottom: 20px;">
                            <button class="btn btn-secondary dropdown-toggle" type="button" name="garden" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Garden
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <button class="dropdown-item" type="button">Has Garden</button>
                              <button class="dropdown-item" type="button">No Garden</button>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" name="parking"   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Parking
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <button class="dropdown-item" type="button">Has Parking</button>
                              <button class="dropdown-item" type="button">No Parking</button>
                            </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-4 col-sm-8">
                            <input type="submit" value="Search" name="submit" class="btn btn-primary"/>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="container2">
                    <div class="offset-sm-2 col-sm-12 col-xs-12 col-centered">
                         <div class="output">
                            </div>
                        </div>

                    </div>
        </div>
    </div>
            
        
    </body>
</html>
