<?
defined( 'ML_BARENG' ) or die( 'Kamarnya jelek!' );
?><!DOCTYPE html>
<html lang="id">
  <head>
  <title><?=ML_TITLE?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="goez.my.id">
	<link rel="stylesheet" type="text/css" href="<?=ML_URL?>bs.css" media="screen" />
	<meta name="generator" content="Ayyo.ml" /> <!-- perlu izin ke author untuk hapus ini -->
	<meta name="description" content="<?=ML_TITLE?> Simple URL Shortener" />
</head>
<body>
     <div class="container col-lg-6 col-lg-offset-3">
  <div style="margin-top: 100px;"></div>
 
<?
if(!empty($error)){
	echo '<div class="alert alert-dismissable alert-danger">'.$error.'</div>';
}
?>
 <div class="row">
    <div class="col-md-12">
  <form action="<?=ML_URL?>" method="post" onsubmit="return chkfrm(this);">
    <div class="col-md-12">
      <div class="input-group" id="shortener">
        <input type="text" class="textbox form-control input-lg" id="url" name="url" value="" placeholder="Masukkin yang Panjang Di sini"/>
        <span class="input-group-btn">
		<input class="button btn btn-primary input-lg" type="submit" name="Submit" value="Aaah!" />

        </span>
      </div>
    </div>
	</form>
  </div>
    </div>
    </div> <!-- /container -->
   
<script language="JavaScript" type="text/javascript">
<!-- //
function chkfrm(f){
	if (f.url.value == ""){
		alert ("Yang panjang masukin dulu donk sayank");
		f.url.focus();
		return false;
	}
	var found = false;
	for (var i=0;i<f.url.value.length;i++){
		var chr = f.url.value.charAt(i);
		if(chr=='.'){
			found = true;
			break;
		}
	}
	if (found == false){
		alert ("Aduh.. yang dimasukin salah sayank!!");
                f.url.focus();
                return false;
	}
	return true;
}
function focusbox() {
	el = document.getElementById('url');
	el.focus();
}

window.onload = focusbox;
// -->
</script>
</body>
</html>
