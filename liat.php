<?
defined( 'S_REWRITEBASE' ) or die( 'Direct Access to this location is not allowed.' );
?><!DOCTYPE html>
<html lang="id">
<head>
<title>Ayyo Masukin Link</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="goez.my.id">
<link rel="stylesheet" type="text/css" href="<?=S_MURL?>bs.css" media="screen" />
<meta name="keywords" content="shorten,URL,ayyo.ml" />
<meta name="description" content="Ayyo.ml Simple URL Shortener" />
</head>
<body>
    <div class="container">
  <div style="margin-top: 50px;"></div>
  <div class="row">
    <div class="col-md-12">
  
  <h2>Yang Dimasukin</h2>
  <pre>Panjang: <a href="<?=$prev_url?>"><?=$prev_url?></a></pre>
  <h2>Didalam anu</h2>
  <p>Punyamu Keluar <b><?=$prev_vis?></b>x. 
    Jadi sejak dimasukin keluar: <b><?=$prev_pre?></b>x</p>
</div>
</div>
<hr />
 <p class="pull-right">
    <a href="/"><span class="label label-success">Depan</span></a>
    <span class="label label-info">API</span>
    <span class="label label-warning">Siapa</span>
  </p>
</div>
</body>
</html>
