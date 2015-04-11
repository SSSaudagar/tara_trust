<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Member Login</title>

    <!-- Bootstrap -->
    <link href="<?php echo url::base() ?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--FONTS-->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Quicksand">      
      
    <style>
     #form_area
        {
            padding-top: 4%;
            font-family: raleway;
        }    
        
     #form_box
        {
            padding: 4%;
            padding-bottom: 10%;
            background: #fffad5;
            box-shadow: 0 0 1px 3px rgba(153,59,40,0.4);
            
        } 
        
        #form_header
        {
            font-size:36px;
            color:#fffad5;
            background: transparent;
            width: 100%;
        }
        
         #header_name
        {
            padding: 6%;
            text-align: center;
            font-weight:bold;
        }
        
        .form-group
        {
            padding: 2%;
            padding-top:10px;
        }

        
         #form_button
        {
            padding: 2%;
            padding-top: 20%;
            font-weight:bold;
        }

        label
        {
            color: #6B291C;
            font-weight:bold;
            font-size:16px;
        }
        
        .submit
        {
            font-size: 20px;
            border-radius: 0;
            background:#bd4932;
            border:0;
        }
        
        .submit:hover
        {
            background:#D65339;
        }

        input[name='email']:focus, input[name='password']:focus
        {
            border-color:#db9e36;
            box-shadow: 0 0 2px 2px rgba(255,211,78, 0.4);
        }
        
        body
        {
            background:#bd4932;
        }
        
        @media screen and (max-width: 800px) 
        {
            #form_header
            {
                font-size:30px;
            }
            
            label
            {
                font-size:12px;
            }
            
            .submit
            {
                font-size: 18px;
            }
            
            .form-group
            {
                padding-top:2px;
            }
        }
    </style>  
      
      
  </head>
  <body>
    
      <div class="container">
          <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-6" id="form_area">
                  <div id="form_header"><div id='header_name'>Member Login</div></div>
                <div id='form_box'>
                            <section>
                            <form method="post" action="include/login.php" class="form" onsubmit="return validate();">
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label>Username:</label>
    <input class="form-control" type="email" id='email' name="email" id="email" pattern = "^.+@[^\.].*\.[a-z]{2,}$"       
                                                       placeholder="Username" style="border-radius:0" autofocus>
                                    </div>
  </div>
                                <br><br>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                       <label>Password:</label>
   <input id="password" name="password" type="password" class="form-control" placeholder="Password" style="border-radius:0">
                                    </div>
  </div>
                                
                                <?php if(isset($_GET["status"])){?>
                                    <div class="checkbox">
                                        <label style="color:red;">
                                            <?php
                                                if(isset($_GET["status"]) and ($_GET["status"]==0)) echo 'Login Failed. Please try again';
                                                if(isset($_GET["status"]) and ($_GET["status"]==1)) echo 'Please Login to continue';
                                                if(isset($_GET["status"]) and ($_GET["status"]==2)) echo 'Invalid request sent';
                                            ?>
                                        </label>
                                    </div>
                                <?php 
                                }
                                ?>
                                <div id='form_button'>
                                <div class="col-sm-12">
                                    <a href="#" name="login" id="submit" type="submit" value="Login" class="btn btn-default submit" style="color:white;width:100%;" >Login</a>
                                </div>
                                </div>
                            </form>
                            </section>
                        </div>
              </div>
              <div class="col-sm-3"></div>
          </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo url::base() ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo url::base() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>