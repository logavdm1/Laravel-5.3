<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row" style="margin-top:10%;">
      <div class="col-md-5 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Login Form</h3>
          </div>
          <div class="panel-body">
          
          
          
            <form class="form-horizontal" role="form" action="form" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="inputEmail3"
                    placeholder="Email" name="uname" />
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="inputPassword3"
                    placeholder="Password" name="pass"/>
                </div>
              </div>
                            
              
              <div class="form-group">
                <div class=" col-md-offset-9 col-sm-12">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
     
    </div>
  </div>

</body>
</html>
