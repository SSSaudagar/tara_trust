<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Member Login</title>

    <!-- Bootstrap -->
    <link href="<?=url::base() ?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
    
      <div class="container">
          <div class="row">
              <div class="col-sm-3"></div>
              <div class="col-sm-6">
                <div class="form-div">
                  <form class="form">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Username:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Email Id">
                        </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-sm-3"></div>
          </div>
      </div>

      
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=url::base() ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=url::base() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>