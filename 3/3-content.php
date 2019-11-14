<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
<div class="container">
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><i class="fa fa-home" aria-hidden="true"></i></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Account</a></li>
                
                <li><a href="#">Login</a></li>
                
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    
    <div class="row">
    <div class="col-md-6 ">
    <div class="ramid bgr-img">
    <h2>NEW CUSTOMER</h2>
    <h4><strong>Register Account</strong></h4>
    <h6>Hello every boby , my name is nhu, I'm from Phu Yen province,today i am happyness meet every body at here!!</h6>
    <button class="btn-www btn btn-danger">Continue</button>
    </div>
    </div>
    <div class="col-md-6 ">
    <div class="ramid bgr-img2">
    <h2>RETURNING CUSTOMER</h2>
    <h4><strong>I am a returning customer</strong></h4>
    <h6>E-Mail Address</h6>
    <!-- E-Mail -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="E-Mail Address">
    </div>
    <!-- Pass Word -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder=" password">
      </div>
    </div>
      <!-- forgotton password -->
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Forgotton password </label>
        </div>
      </div>
    </div>
    <button class="btn-www btn btn-danger">Login</button>
    </div>
    </div>
    </div>

    </div>
</div>
</div>
