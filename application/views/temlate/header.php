<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title;?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css');?>">
  <link rel="author" href="https://plus.google.com/+FannyHasbi">

  <meta content='text/html;charset=UTF-8' http-equiv='Content-Type'/>
  <meta name="description" content="Website URL Extender, yaitu layanan untuk membuat URL lebih panjang dan menarik"/>
  <meta name="keywords" content="url extender, long url, longest url, awesome url, unique url, url"/>
  <meta name="robot" content="noindex, nofollow"/>
  <meta name="language" content="indonesia">

  <meta property='og:type' content='website'/>
  <meta content='width=device-width,initial-scale=1.0,minimum-scale=0.5,maximum-scale=2.0' name='viewport'/>

  <!-- favicon -->
  <!-- <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAdXV1AP///wCMjIwAT09OAJSUlAA4ODgA29vbAO3t7QCnp6sAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB0kAAAAAE0REIAAAAERJhUIgAAAEk5VEiQAAADk4VJKSAAAJiIVJIpAAAAUzVJJZAAAAWIVJKJAAAAA4REKJAAAABEBEKJAAAAAEQAE5AAAAAARgFJAAAAAAQGFkAAAAAAAAFGAAAAAAAAEEAAAAAAAAAEAAAAAAAAD/+AAA/wEAAPwBAAD4AwAA8AMAAOAHAADgDwAAwB8AAMA/AACAfwAAgP8AAIH/AAAD/wAAB/8AAA//AAAf/wAA" rel="icon" type="image/x-icon" /> -->

  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url();?>">PANJAANG.GA</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
<?php if(!$this->session->userdata('login')){ ?>
          <li><a href="<?php echo site_url('about');?>">About</a></li>
          <li><a href="<?php echo site_url('daftar');?>">Daftar</a></li>
          <li><a href="<?php echo site_url('login');?>">Login</a></li>
<?php } else {?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
              <li><a href="<?php echo site_url('dashboard');?>"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
              <li><a href="<?php echo site_url('setting');?>"><span class="glyphicon glyphicon-wrench"></span> Setting</a></li>
              <li><a href="<?php echo site_url('about');?>"><span class="glyphicon glyphicon-book"></span> About</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="<?php echo site_url('logout');?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
          </li>
<?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-wrapper">