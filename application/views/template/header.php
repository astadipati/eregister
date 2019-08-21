
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>E-Register</title>
    <link rel="icon" href="<?php echo base_url('static/img/icon_pa.ico');?>" type="image/gif">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>static/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>static/css/custom.min.css" />
    <!-- <link rel="stylesheet" href="../4/flatly/bootstrap.css" media="screen"> -->
    <!-- <link rel="stylesheet" href="../_assets/css/custom.min.css"> -->
    <script>

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    </script>
  </head>
  <body>
    <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <div class="container">
        <a href="#" class="navbar-brand">E-Register</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('dashboard')?>">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('data')?>">Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('bantuan')?>">Bantuan</a>
            </li>
          </ul>

        </div>
      </div>
    </div>

