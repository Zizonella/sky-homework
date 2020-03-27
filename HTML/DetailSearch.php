<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Detailed Listing Search</title>
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
                           <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                              aria-controls="pills-home" aria-selected="true">Home</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                              aria-controls="pills-profile" aria-selected="false">About us</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Contact us</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                              aria-controls="pills-contact" aria-selected="false">Login</a>
                       </li>
                   </ul>
               </div>
               <div class="col-md-5">
                   <a href="Homepage.php"><img src="images/logo.png" width="400px" alt="Logo"/></a>
               </div>
           </div>
        </div>   
        <div class="container">
             <div class="row">
            <button type="button" class="btn btn-outline-dark btn-lg">Return to Searches</button>
             </div>
            <div class="row h-25 d-inline-block"></div>
             <div class="row">
                 <div class="col-md-8"> 
                        <div class="row">
                            <div id="carouselExampleIndicators" class="carousel slide" style="width: 750px;"  data-ride="carousel" >
                                <ol class="carousel-indicators" >
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner"  >
                                  <div class="carousel-item active" >
                                      <img src="images/flat1.png" class="d-block w-100"  alt="flat1">
                                  </div>
                                  <div class="carousel-item">
                                      <img src="images/flat2.png" class="d-block w-100" alt="flat2">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="images/flat3.png" class="d-block w-100" alt="flat3">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="images/flat4.png" class="d-block w-100" alt="flat4">
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
                    <div class="row h-10 d-inline-block"></div>
                        <div class="row">
                            <div class="img-thumbnail" style="max-width: 11.9rem; max-height: 9rem;">
                                <img src="images/flat1.png" class="rounded float-left" width="180px" alt="flat1">
                            </div>
                            <div class="img-thumbnail" style="max-width: 11.9rem; max-height: 9rem;">
                                <img src="images/flat2.png" class="rounded float-left" width="180px" alt="flat2">
                            </div>
                            <div class="img-thumbnail" style="max-width: 11.9rem; max-height: 9rem;">
                                <img src="images/flat3.png" class="rounded float-left" width="180px" alt="flat3">
                            </div>
                            <div class="img-thumbnail" style="max-width: 11.8rem; max-height: 9rem;">
                                <img src="images/flat4.png" class="rounded float-left" width="180px" alt="flat4">
                            </div>
                        </div>
                    <div class="row h-20 d-inline-block"></div>
                    <div class="row">
                        <div class="card text-center">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="floor_plan-tab" data-toggle="tab" href="#floor_plan" role="tab" aria-controls="floor_plan" aria-selected="false">Floor Plan</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="area-map-tab" data-toggle="tab" href="#area-map" role="tab" aria-controls="area-map" aria-selected="false">Area Map</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="sold-previously-tab" data-toggle="tab" href="#sold-previously" role="tab" aria-controls="sold-previously" aria-selected="false">Sold Previously</a>
                                </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <h5 class="card-title">-------------------------------------Full description----------------------------------------</h5>
                                    <p class="card-text">Tenure: Freehold</p>
                                    <p class="card-text">Main house Through the front door, the main area of the house meanders to the right, passing through the large living room with feature fireplace to the bright dining room with French doors on to the terrace. The farmhouse-style kitchen features a peninsular and range oven and leads to the sitting room with double height windows overlooking the garden and down to the River Loddon.</p>
                                    <p class="card-text">The first floor hosts 4 double bedrooms and 3 bathrooms. The master suite, at the eastern end of the house, includes an en-suite bathroom and sitting gallery with views over the garden, down to the river.</p>
                                </div>
                                  <div class="tab-pane fade" id="floor_plan" role="tabpanel" aria-labelledby="floor_plan-tab">--------------------------------------------------Floor Plan---------------------------------------------------------</div>
                                <div class="tab-pane fade" id="area-map" role="tabpanel" aria-labelledby="area-map-tab">--------------------------------------------------Area Map---------------------------------------------------</div>
                                <div class="tab-pane fade" id="sold-previously" role="tabpanel" aria-labelledby="sold-previously-tab">--------------------------------------------------Sold Previously---------------------------------------------------</div>
                              </div>
                            </div>
                          </div>
                    <div class="row h-25 d-inline-block"></div>
                </div>
                <div class="col-md-4">
                     <div class="row h-20 d-inline-block"></div>
                     <div class="row">
                        <div class="card" style="width: 19rem;  margin-left: 50px;">
                         <h5 class="card-header">Region/ Location</h5>
                         <div class="card-body">
                           <h5 class="card-title">Price £xxx <button style="margin-left: 80px;" type="button" class="btn btn-outline-dark btn-sm">Enquire</button></h5>
                           <p class="card-text"> A luxury new development of 1, 2, 3 beds and penthouse apartments Which is a short walk to the open spaces of Holland Park and the world class shopping at Westfield Shepherds Bush. This area offers a local feel with a plethora of shops, bars and restaurants on Kensington High Street. With access to a Concierge, gym and private cinema, The Atelier is one of the most sought after new schemes in West London.</p>
                          </div>
                        </div>
                     </div>
                    <div class="row h-20 d-inline-block"></div>
                    <div class="row">                    
                     <div class="card" style="width: 16rem;  margin-left: 80px; margin-top: 50px;">
                        <img src="images/agent1.png" class="card-img-top" alt="Agent1">
                        <div class="card-body">
                          <h5 class="card-title">Agent 1</h5>
                          <p class="card-text">Agent's Name</p>
                          <p class="card-text">Agent's Phone Number</p>
                          <p class="card-text">Agent's Email</p>
                        </div>
                      </div>                       
                    </div>
                </div>                 
            </div>
        </div>    
    </body>
</html>
