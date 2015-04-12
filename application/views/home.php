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
            background:white;
        }
        
        body
        {
            background:#FFD5B2;
        }
        
        #out
        {
            text-align:right;
            font-weight:bold;
        }
        
        .btn-primary
        {
            border:0;
            color:#AB8F77;
            background:transparent; 
            transition: background 0.4s, color 0.4s;
        }
        
        .btn-primary:hover
        {
            color:white;
            background:#AB8F77;            
        }
        
        .btn-default
        {
            border-color:#AB3838;
            color:white;
            background:#AB3838; 
            transition: background 0.4s, color 0.4s;
        }
        
        .btn-default:hover
        {
            border-color:#AB3838;
            color:#AB3838;
            background:white;            
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
            margin-top:6%;
        }

        #child-details-table
        {
            margin-top:10%;
            width:80%;
        }

        th
        {
            height: 54px;
            width: 10%;
            text-align:center;
        }
       
        td
        {
           text-align:center; 
        }
        
                    th {
  background: #917965;
  height: 54px;
  font-weight: lighter;
  font-size:18px;
  text-shadow: 0 1px 0 #6E5C4C;
  color: white;
  border: 1px solid #6E5C4C;
  box-shadow: inset 0px 1px 2px #917965;
  transition: all 0.2s;
}
       
table {
  box-shadow: 0 0 8px rgba(0,0,0,0.4);
}            
            
th, td
{
  text-align:center;
}

tbody
{
    background:white;
}
            
tr {
  border-bottom: 1px solid #cccccc;
}
tr:last-child {
  border-bottom: 0px;
}
td {
  border-right: 1px solid #cccccc;
  border-bottom: 1px solid #cccccc;
  padding: 10px;
  transition: all 0.2s;
}
td:last-child {
  border-right: 0px;
}
        
    #record_header
        {
            text-transform:uppercase;
            font-size:36px;
            text-align:center;
            text-decoration:underline;
            margin-top:8%;
        }
        
        @media screen and (max-width: 800px)
        {
            #record_header
            {
                font-size: 30px;
            }

            .btn-default
            {
                margin-top:2%;
            }
            
            th
            {
                font-size: 14px;
            }
            
            td
            {
                font-size: 12px;
            }
        }
        
        @media screen and (max-width: 460px)
        {
            #out a
            {
                font-size:14px;
            }
            
            th
            {
                font-size: 10px;
                height: 30px;
            }
            
            td
            {
                font-size: 10px;
                padding:8px;
            }
            
            #child-details-table
            {
                width:100%;
            }
            
        }
        
         @media screen and (max-width: 350px)
        {
            #record_header
            {
                font-size: 24px;
            }
            
            th
            {
                font-size: 8px;
                height: 24px;
            }
            
            td
            {
                font-size: 6px;
                padding:6px;
            }
            
            #child-details-table
            {
                width:100%;
            }
            
        }
    </style>  
      
    </head>
    
    <body>
   
        <div id='nav-bar'>
            <div id='logout'>
                <div id='out'><a class="btn btn-primary" href="<?php echo url::base() ?>index.php/authenticate/logout">Logout <span class="glyphicon glyphicon-log-out"></span></a></div>
            </div>
        </div>
        <div class="container-fluid" style="padding-bottom:6%;">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-9">
                    <h1 id='record_header'>children's records</h1>
                    <form method="post" action="<?php echo url::base() ?>index.php/home/" class="form">
                        <div class="form-group" id='select-element'>
                            <label class="col-sm-3" for='select-place'>Display details based on:</label>
                            <div class='col-sm-7'>
                                 <select class="form-control" id='select-place' name="place" style="border-radius:0">
                                    <option value="">--Select--</option>
                                    <option value="taluka">Taluka</option>
                                    <option value="district">District</option>
                                    <option value="state">State</option>
                                 </select>
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-default" type = "submit">Display records</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
<!--                <div class="col-sm-1"></div>-->
<!--                <div class="col-sm-12">-->
                    <center>
                    <div id='child-details-table'>
                    <?php 
    
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
                    echo '<table border = 1>';
                    echo '<thead><tr>
					<th>Name</th>
					<th>Age</th>
					<th>Place</th>
					<th>Work</th>
					<th>Taluka</th>
					<th>District</th>
					<th>State</th></tr></thead><tbody>';
                        foreach($details as $row){
                            echo '<tr>';
//                                foreach($row as $column){
//                                    echo '<td>';
//                                    echo $column;
//                                    echo '</td>';
//                                }
                            echo "<td>{$row['name']}</td>";
                            echo "<td>{$row['age']}</td>";
                            echo "<td>{$row['place']}</td>";
                            echo "<td>{$row['work']}</td>";
                            echo "<td>{$row['taluka']}</td>";
                            echo "<td>{$row['district']}</td>";
                            echo "<td>{$row['state']}</td>";
                            echo '</tr>';
                            
                        }
                    echo "</tbody></table>";
}
                    ?>
                    </div>
                    </center>
<!--                </div>-->
            </div>
        </div>
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo url::base() ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo url::base() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
    </body>
    
</html>