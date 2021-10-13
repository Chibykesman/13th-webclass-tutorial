<?php require "inc/header.php"; ?>
<?php require "inc/nav.php"; ?>





<div class="container">
    <div class="col-sm-12 col-md-12 col-lg-6 offset-md-3 mt-4">
        <div class="card">
            <div class="card-title"><p class="card-header">Php Exercise</p></div>
            <div class="card-body">
                <?php
                    require_once("config/connect.php");
                    if(isset($_POST["submit"])){
                            // @$fnum = $_POST["num1"];
                        // @$snum = $_POST["num2"];
                        // $sum = $fnum+$snum;
                        // echo $sum;

                        
                        @$user = strtoupper( $_POST["username"]);

                        $userupper= strtoupper($user); echo "<br>";
    
                        $usercount = strlen($user);
                        //(strlen($user)<=7)
                        echo $user . " ". $usercount; 
    
                        //checking for username or password length in php
                    
                        echo"<br>";
    
                        //checking if field is empty on php
                        if(empty($user)){
                            echo "sorry username need to be fill up";
                        }else{
                            if($usercount <=7){
                                echo "username should be at least 8 character in length";
                            }
                            else{
                                echo"username length okey"; 
                            }
                        }

                        if(is_numeric($user)){
                            echo "NUMERIC";
                        }


                      
                    }

                ?>
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" name="username" id="" class="form-control">
                        <label for="" class="form-label">Num1</label>
                    </div>
                    <!-- <div class="form-group">
                        <input type="text" name="num2" id="" class="form-control" required>
                        <label for="" class="form-label">Num2</label>
                    </div> -->
            </div>
            <div class="card-footer"><button type="submit"name="submit" class="btn btn-secondary btn-block">Submit</button></div>
                </form>
        </div>
    </div>
</div>






<?php require "inc/close.php"; ?>