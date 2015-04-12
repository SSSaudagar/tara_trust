<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Submit details</title>

    <!-- Bootstrap -->
    <link href="<?php echo url::base() ?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--FONTS-->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Quicksand">      
      
      <style>

          body
          {
              background:#FFF9A6;
          }
          
        .btn-primary
          {
              font-size:20px;
              margin-top:6%;
          }

        .panel-heading
          {
              font-size:20px;
              text-transform:uppercase;
              background:#94B8FF;
              color:white;
              border-color:#5E99FF;              
          }

          #form3
          {
              margin-top:20%;
          }
      </style>
      
    </head>
    
    <body>
<!--    <div id='abc3'>
        <div id='popup3'>
   
    </div>
</div>-->


        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <!--<div class="add-member">
                        <center>
                            <a href="#" class="btn btn-default" onclick = "open1()">Add new member</a>
                        </center>
                    </div>-->
                <div id='form3'>
                <center><h2>Registration form</h2></center><br>
                <div class='panel panel-default"'>
                    <!--<div class="panel-heading" style="text-align:center;font-weight:bold">
                        Street child registration form
                    </div>-->
                    <div class="panel-body">
                        <form action='#' method='post' class="form" role='form'>
                        <div class="form-group">
                            <label class="col-sm-3" for='place'>Place:</label>
                            <div class='col-sm-9'>
                             <select class="form-control" id='place' name="place" style="border-radius:0">
                                <option value="">--Select Place--</option>
                                <option value="assagao,mapusa">Assagao, Mapusa</option>
                             </select>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group" style="padding-top:2%">
                           <label class="col-sm-3" for='name'>Name:</label>
                            <div class='col-sm-9'>
                            <input class="form-control" name="name" id="name" placeholder="Name">
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                           <label class="col-sm-4" for='description'>Description:</label>
                            <div class='col-sm-8'>
                                <textarea class="form-control" rows="4" cols="20" name="description" id="description" placeholder="Description of the child"></textarea>
                            </div>
                        </div>
                            <div></div>
                        <br><br>
                        <center>
                            <button class="btn btn-primary" type="submit">Report new child</button>
                        </center>    
                    </form>
                </div>
            </div>
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