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
        #nav-bar
        {
            padding:1%;
        }
        
        #out
        {
            text-align:right;
            font-weight:bold;
        }
        
        #out a 
        {
            text-decoration:none;
            font-size: 18px;
        }
        
        label
        {
            font-size:16px;
        }
        
        #select-element
        {
            margin-top:10%;
        }
    </style>  
      
    </head>
    
    <body>
   
        <div id='nav-bar'>
            <div id='logout'>
                <div id='out'><a class="btn btn-danger" href="#">Logout <span class="glyphicon glyphicon-log-out"></span></a></div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-9">
                    <form method="post" action="<?php echo url::base() ?>index.php/home/" class="form">
                        <div class="form-group" id='select-element'>
                            <label class="col-sm-3" for='select-place'>Display details based on:</label>
                            <div class='col-sm-7'>
                                 <select class="form-control" id='select-place' name="select-place" style="border-radius:0">
                                    <option value="">--Select--</option>
                                    <option value="Taluka">Taluka</option>
                                    <option value="District">District</option>
                                    <option value="State">State</option>
                                 </select>
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-default" type = "submit">Search record</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table>
                    <?php 
                        foreach($details as $row){
                            echo '<tr>';
                                foreach($row as $column){
                                    echo '<td>';
                                    echo $column;
                                    echo '</td>';
                                }
                            echo '</tr>';
                            
                        }
                        
                    ?>
                    </table>
                </div>
            </div>
        </div>
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo url::base() ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo url::base() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
    </body>
    
</html>