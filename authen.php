<?php include("include/head.php");
include("include/nav.php");?>


<div class="jumbotron">
    <div class="container">
        <div class="card bg-light p-5">
            <div class="row">
                <div class="col-sm-12 col-lg-5 col-md-5 p-5">
                    <div class="offset-lg-4 col-4 offset-4 mt-4 col-lg-4 bg-white p-1 card justify-item-center justify-content-center" > 
                   <img src="assets/images/FPNO LOGO.png" alt="logo">
 
                    </div>
                    &nbsp; &nbsp;
                        <center>
                           <b>  Sign in to Dashboard </b>
                    </center>
                    <form action="#">
                    <label for="form-label"><b>Email</b></label>
                                 <p></p>
                            <div class="form-outline bg-white">

                                        <input type="text" class="form-control" placeholder="Type your email">
                            </div>
                            <p></p>
                            <label for="form-label"><b>Password</b></label> </br>
                                    <p></p>
                            <div class="form-outline bg-white">

                                        <input type="password" class="form-control" placeholder="Type your password">
                            </div>
                                  <p></p>
                                     <label>
                                             <input type="checkbox" name="Subscribe"> <b> Remember me </b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                             <a href="#"> Reset Password</a>
                                    </label>
                                    <p>  </p>

                                    <div class="form-outline">
                                    <input type="submit" class="btn btn-info btn-block" value="Login">
                                    </div>
                    </form>
                    <center> <p style="margin-top:3em;"><span>Dont have an account?</span>&nbsp; <a href="#"data-mdb-toggle="modal"
  						data-mdb-target="#createAccountModal">Sign-Up</a></p></center>
                </div>

                <div class="col-6 p-1 bg-info">
                    <div class="bg-image">
                    <img src="assets/images/rightimage.png" class="w-100 p-0"/>

                         <div class="mask" style="background-color: rgba(57, 192, 237, 0.6)">
                            <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white" style="margin-top:12em; margin-left:3em; font-family:Century Gothic;">    
                         <h2><b>Join Our Community</b></h2>
                         <p style="font-size:25px">Be Inspired............</p>
                         <a href="service.php" class="btn btn-outline-white btn-rounded"> Join <i class="icofont-plus"></i></a>
                            </div>
                            </div>     
                        </div>
                    </div>
                     
                </div>
             </div>
        </div>

    </div>

</div>





<?php 

include("include/close.php");

?>  