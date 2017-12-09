<?
defined( 'ML_BARENG' ) or die( 'Kamar jelek!' );
$ha_z = strlen($new_hash);
$ur_z = strlen($url2s);
$z_dif = $ur_z - $ha_z;
$z_per = intval(($ha_z/$ur_z)*100).'%';

$calcs = ($ha_z<$ur_z)?"<p>Karena ga dicabut anunya jadi kepotong <strong>$z_per</strong> ($z_dif karakter).</p>":"Huu.. anumu pendek :P";

?><!DOCTYPE html>
<html lang="id">
<head>
<title>Ah / <?=ML_TITLE?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="goez.my.id">
<link rel="stylesheet" type="text/css" href="<?=ML_URL?>bs.css" media="screen" />
<meta name="generator" content="Ayyo.ml" /> <!-- perlu izin ke author untuk hapus ini -->
<meta name="description" content="Ayyo.ml Simple URL Shortener" />
</head>
<body>
     <div class="container col-lg-6 col-lg-offset-3">
  <div style="margin-top: 100px;"></div>
<div class="row">
  <form action="<?=ML_URL?>" method="post" onsubmit="return chkfrm(this);">
	<div class="col-md-12">
      <div class="input-group" id="shortener">
        <input type="text" class="textbox form-control input-lg" id="url" name="url" value="" placeholder="Masukkin lagi yank..."/>
        <span class="input-group-btn">
		<input class="button btn btn-primary input-lg" type="submit" name="Submit" value="Aaah!" />

        </span>
      </div>
</div>
	</form>
      </div> <!-- /container -->
	<!-- info-->
	<br />
  <div class="row">
    <div class="col-md-12">
  <input class="text form-control input-sm" id="copylink" type="text" value="<?=$new_hash?>" onclick="this.select()" onkeyup="select_text();"/>
			<pre>Panjang <?=$url2s?></pre>
			
				<p>Panjang Link asli: <?=$ur_z?> karakter. Karna dimasukkin dan di Aaah jadi: <?=$ha_z?> karakter.</p>
				  <?=$calcs?>
					<p>Untuk melihat statistik link ini di <a href="<?=$new_hash?>-"><?=$new_hash?>-</a></p>

  <hr />
  <!-- perlu izin ke author untuk hapus ini -->
<small class="text-muted pull-right text-small">Powered by <a href="/c">Ayyo</a>.</small>
</div>
<script>
<!--
function select_text(){
	el = document.getElementById('shour');
	if(el.createTextRange){
		var oRange = el.createTextRange();
		oRange.moveStart("character", 0);
		oRange.moveEnd("character", el.value.length);
		oRange.select();
	}else if(el.setSelectionRange){
		el.setSelectionRange(0, el.value.length);
	}
	el.focus();
}

function PageInit() {
	select_text();
}
window.onload = PageInit;

//-->
</script>
</div>
</div>
</body>
</html>
