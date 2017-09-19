<!DOCTYPE html>
<html>
<head>
  <title>BELAJAR KUY</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css');?>">

  <meta content='width=device-width,initial-scale=1.0,minimum-scale=0.5,maximum-scale=2.0' name='viewport'/>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- favicon -->
  <!-- <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAdXV1AP///wCMjIwAT09OAJSUlAA4ODgA29vbAO3t7QCnp6sAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB0kAAAAAE0REIAAAAERJhUIgAAAEk5VEiQAAADk4VJKSAAAJiIVJIpAAAAUzVJJZAAAAWIVJKJAAAAA4REKJAAAABEBEKJAAAAAEQAE5AAAAAARgFJAAAAAAQGFkAAAAAAAAFGAAAAAAAAEEAAAAAAAAAEAAAAAAAAD/+AAA/wEAAPwBAAD4AwAA8AMAAOAHAADgDwAAwB8AAMA/AACAfwAAgP8AAIH/AAAD/wAAB/8AAA//AAAf/wAA" rel="icon" type="image/x-icon" /> -->

  <style>
    h1 {
      font-family: 'Montserrat', sans-serif;
    }
  </style>
</head>
<body id="index">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url();?>">BELAJAR KUY</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo site_url('about');?>">About</a></li>
          <li><a href="<?php echo site_url('daftar');?>">Daftar</a></li>
          <li><a href="<?php echo site_url('login');?>">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="header" class="jumbotron vertical-center">
    <div class="container">
      <h1>BELAJAR KUY</h1>
      <form class="form-inline" method="post" action="<?php echo site_url('generate');?>" role="form">
        <div class="input-group" style="padding-left:10px;padding-right:10px;">
          <input type="url" class="form-control" name="url" size="50" placeholder="http://example.com" required>
          <div class="input-group-btn">
            <input type="submit" class="btn btn-warning" name="generate" value="Extend">
          </div>
        </div>
      </form>
    </div>
  </div>
  
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>