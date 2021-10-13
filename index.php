<?php require "inc/header.php"; ?>
<?php require "inc/nav.php"; ?>

      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 bg-image">
        <img src="assets/images/pet4.jpg" alt="patient" class="w-100" style="height: 550px">
        <div class="mask" style="background-color: rgba(0,0,0,0.6)">
           
                <div class="row container">
                    <div class="col-sm-12 col-md-12 col-lg-8 mt-4 text-white">
                        <h1 class="text-white">Patient Management System</h1>
                        <i>Managing Patient Digital</i> <br> 
                        <a href="#" class="btn btn-success">Get Started</a>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 mt-4">
                            <div class="card">
                                <div class="card-title">
                                    <p class="card-header">Login</p>
                                </div>
                                <div class="card-body">
                                    <p class="text-center">
                                        <i class="fa fa-user-circle fa-3x"></i>
                                    </p>
                                    <form>
                                        <div class="form-outline">
                                            <input type="text" class="form-control">
                                            <label class="form-label">
                                                Username
                                            </label>
                                        </div>
                                        <div class="form-outline mt-4">
                                                <input type="password" class="form-control">
                                                <label class="form-label">
                                                    Password
                                                </label>
                                            </div>
                                            <div class="form-outline mt-4">
                                                   <button type="submit" class="btn btn-outline-success btn-block"> 
                                                       Login
                                                   </button>
                                                </div>
                                    </form>
                                </div>
                                <div class="card-footer bg-success">
                                    <p class="text-white">
                                    Don't have account <span><i><a href="#" data-mdb-toggle="modal"
                                        data-mdb-target="#exampleModal">Create New Account</a></i></span> 
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
            

        </div>

      </div>

<!--Carding Section starts here-->

<!--This is how card is been implemented with bootstrap-->

<!--The first card starts here-->
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title">24/7 online</h5>
                    </div>
                        <div class="card-body">
                            <p class="text-center"><i class="fa fa-gear fa-4x"></i></p>
                            <p>Our online services are always available, fast and reliable, network stree free and stable, now <b>we are assuring you as well giving you our words that we can and will never be put off from been online.</b></p>
                        </div>
                        <div class="card-footer bg-primary">
                                <button class="btn btn-primary text-white">
                                    Learn More
                                </button>
                        </div>
                </div>
              </div>
<!--The first card ends here-->

<!--The Second card starts here-->
              <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4">
                    <div class="card">
                            <div class="card-header bg-success text-white">
                  <h5 class="card-title">Confortable Hospital Beds</h5>
                </div>
                <div class="card-body">
                        <p class="text-center"><i class="fa fa-hotel fa-4x"></i></p>
                        <p>There are more hospital beds in various types and kinds, with an affortable rate and will make you feel at home. <i>In our hospital quality beds is in more supply. </i></p>
                    </div>
                    <div class="card-footer bg-success">
                            <button class="btn btn-success text-white">
                                Learn More
                            </button>
                            </div>
                        </div>
                    </div>
<!--The Second card ends here-->

<!--The third card starts here-->
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-4">
                        <div class="card">
                                <div class="card-header bg-primary text-white">
                  <h5 class="card-title">Management</h5>
                    </div>
                    <div class="card-body">
                            <p class="text-center"><i class="fa fa-recycle fa-4x"></i></p>
                            <p>Our Management System is well organized, very active to attend to our patients; <br> patient who maybe severally illed, injured and affected with any diease can be treated. <b>Note: we are Covid concious!</b></p>
                        </div>
                        <div class="card-footer bg-primary">
                                <button class="btn btn-primary text-white">
                                    Learn More
                                </button>
                                </div>
                        </div>
                </div>
        </div>
</div>
<!--The Third card ends here-->

<!--Dont forget this section please-->




<!-- Button trigger modal -->


<!-- Modal -->
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Account <i class="fa fa-plus"></i></h5>
        <button
          type="button"
          class="btn-close"
          data-mdb-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
          <form>
              <div class="form-group">
                    <label class="form-label">Full Name</label>
                  <input type="text" class="form-control" required>
                 
              </div>
              <div class="form-group">
                    <label class="form-label">Email Address</label>
                  <input type="email" class="form-control" required>
              </div>
              <div class="form-group">
                    <label class="form-label">Password</label>
                  <input type="password" class="form-control" required>
              </div>
              <div class="form-group">
                    <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" required>
              </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-mdb-dismiss="modal">
          Cancel
        </button>
        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i></button>
      </div>
    </form>
    </div>
  </div>
</div>

<?php require "inc/close.php"; ?>