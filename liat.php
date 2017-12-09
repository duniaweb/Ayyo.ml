<?
defined( 'ML_BARENG' ) or die( 'Direct Access to this location is not allowed.' );
?><!DOCTYPE html>
<html lang="id">
<head>
<title>Liat / <?=ML_TITLE?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="goez.my.id">
<meta property="og:image" content="https://camo.githubusercontent.com/f07d4877acbc8c7dc4f201d504f12346fe390139/68747470733a2f2f6179796f2e6d6c2f696d616765732f70656e79696e676b61742d6c696e6b2e706e67" />
<link rel="stylesheet" type="text/css" href="<?=ML_URL?>bs.css" media="screen" />
<meta name="generator" content="Ayyo.ml" /> <!-- perlu izin ke author untuk hapus ini -->
<meta name="description" content="<?=ML_TITLE?> Simple URL Shortener" />
</head>
<body>
    <div class="container">
  <div style="margin-top: 50px;"></div>
    <div class="col-lg-6 col-lg-offset-3">
  
  <h2>Yang Dimasukin</h2>
  <pre>Panjang: <a href="<?=$prev_url?>"><?=$prev_url?></a></pre>
  <h2>Didalam anu</h2>
  <p>Punyamu Keluar <b><?=$prev_vis?></b>x. 
    Jadi sejak dimasukin keluar: <b><?=$prev_pre?></b>x</p>
<hr />
<!-- perlu izin ke author untuk hapus ini -->
<small class="text-muted pull-right text-small">Powered by <a href="/c">Ayyo</a>.</small>
 <p class="pull-left">
    <a href="/"><span class="label label-success">Depan</span></a>
    <span class="label label-info">API</span>
    <span class="label label-warning">Siapa</span>
  </p>
  </div>
</div>
</body>
</html>
