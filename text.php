<?php require "inc/header.php"; ?>
<?php require "inc/nav.php"; ?>





<div class="container mt-4">
   <div id="logcard" class="col-sm-12 col-lg-4 col-md-12 offset-lg-4">
    <div class="card">
        <div class="card-body">
            <h4>User Login</h4>

            <div class="form-group p-2">
                <input type="text" name="" id="" class="form-control" placeholder="Username">
            </div>
            <div class="form-group p-2">
                <input type="text" name="" id="" class="form-control" placeholder="Username">
            </div>

            <button class="btn">Login</button>

            <p>New user ? <span><a href="#" id="reg">Register</a></span></p>
        </div>
    </div>
   </div>

   <div  class="col-sm-12 col-lg-4 col-md-12 offset-lg-4 mt-4">
        <div class="card" id="createcard">
            <div class="card-body">
                <h4>Create New Account</h4>
                <button class="btn">create</button>
            </div>
        </div>
   </div>

</div>








<?php require "inc/close.php"; ?>

<script type="text/javascript">
    $(document).ready(function(){
        $("#createcard").hide();
    });

    $('#reg').click( function(){
        $('#logcard').fadeOut('fast');
        $('#createcard').fadeIn();
    })
</script>