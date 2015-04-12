<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Place registration</title>

    <!-- Bootstrap -->
    <link href="<?php echo url::base() ?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">      
      
    <!--FONTS-->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
      
    <style>
        #form_area
        {
            padding-top: 0%;
            font-family: raleway;
        }    
        
     #form_box
        {
            padding: 4%;
            padding-bottom: 10%;
            background: #FFC3AD;
            box-shadow: 0 0 1px 3px rgba(181,127,123,0.4);
        } 
        
        #form_header
        {
            font-size:36px;
            color:#1B261B;
            background: transparent;
            width: 100%;
            text-shadow: 1 px 1px 2px rgba(255,161,133,0.4);
            text-decoration:underline;
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
            padding-bottom:10%;
        }

        
         #form_button
        {
            padding: 2%;
            padding-top: 12%;
            font-weight:bold;
        }

        label
        {
            color: #915C4C;
            font-weight:bold;
            font-size:16px;
        }
        
        .submit
        {
            font-size: 20px;
            border-radius: 0;
            background:#6E4639;
            border:0;
        }
        
        .submit:hover
        {
            background:#8F5B4A;
        }

        body
        {
            background:#FFEEE6;
        }
        
        input[type='text']:focus, input[type='contact']:focus
        {
            border-color:#8F5B4A;
            box-shadow:0 0 3px 1px rgba(255,161,133,0.4);
        }
        
        @media screen and (max-width: 500px)
        {
            .form-group
            {
                padding-bottom:0px;
                padding-top:0px;
            }
            
             #form_button
            {
                padding-top: 30px;
            }            

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
        }
        
    </style>  
      
    </head>
    
    <body>
    
    <div class="container-fluid">
        <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6" id="form_area">
                  <div id="form_header"><div id='header_name'>Place registration form</div></div>
                <div id='form_box'>
                            <section>
                            <form method="post" action="<?php echo url::base() ?>index.php/admin/addplaces" class="form" onsubmit="return validate();">
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label>Place:</label>
    <input class="form-control" type="text" id='place' name="place" placeholder="Place" style="border-radius:0" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label>Taluka:</label>
    <input class="form-control" type="text" id='taluka' name="taluka" placeholder="Taluka" style="border-radius:0" autofocus>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label>District:</label>
    <input class="form-control" type="text" id='district' name="district" placeholder="District" style="border-radius:0" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label>State:</label>
    <input class="form-control" type="text" id='state' name="state" placeholder="State" style="border-radius:0" autofocus>
                                    </div>
                                </div>
                                <div id='form_button'>
                                <div class="col-sm-12">
                                    <button name="login" id="submit" type="submit" value="Login" class="btn btn-default submit" style="color:white;width:100%;" >Login</button>
                                </div>
                                </div>
                            </form>
                            </section>
                        </div>
              </div>
            </div>
    </div>
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo url::base() ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo url::base() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>    
        
    </body>
    
</html>