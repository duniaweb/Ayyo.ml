<?
include('anu.php');
if(!@include('ranjang.php')){
	header('Location: buka.php');
}
db_connect();
$wb = explode(S_REWRITEBASE,get_uri());
$tid = $wb[1];

if(empty($tid)){
	
	$url2s = $_POST['url'];
	
	if(!empty($url2s) && isset($_POST['Submit'])){
		
		if($hash = add_url($url2s)){
			$new_hash = S_SELFHOST.S_REWRITEBASE.$hash;
			include('lemes.php');

		}else{
			$error = "Aduh ada Orang yank!";
			include('kamar.php');
		}
		
	}else{

		include('kamar.php');
	}
}else{

	if(preg_match("/^[a-zA-Z0-9]+(-?)$/", $tid) === 0){
		if($aob = api_or_bkml($tid)){
			$url = urldecode(substr($tid, 9));
			if($hash = add_url($url)){
				if($aob=='longurl'){
					header('Content-Type: text/plain');
					echo S_SELFHOST.S_REWRITEBASE.$hash;
				}else{				
					$new_hash = S_SELFHOST.S_REWRITEBASE.$hash;
					$url2s = $url;
					include('lemes.php');
				}
			}else{
				if($aob=='longurl'){
					header('HTTP/1.1 500 Internal Server Error');
					die("Aduh, Ga bisa Masuk yank!");
				}else{
					header('HTTP/1.0 404 Not Found');
					$error = "Aduh, Ga bisa Masuk Lagi dah Lemes.<br /><br />Abis ini lagi yah.";
					include('kamar.php');
				}
			}
			
		}else{
			header('HTTP/1.0 404 Not Found');
			$error = "<!-- Yang kamu keluarin salah... -->";
			include('kamar.php');
		}
	}else{

		$prev = false;
		$id = alphaID($tid, true);
		if(substr($tid, -1)=='-'){
			$prev = true;
			$tid = substr($tid, 0, -1);
			

			if(S_OPT_STATS){

				$sql = 'UPDATE '.S_TB_URLS.' SET pr=pr+1 WHERE id = '.mysql_real_escape_string($id).' LIMIT 1';
				mysql_query($sql);
				
			}

			$sql = 'SELECT * FROM '.S_TB_URLS.' WHERE id = '.mysql_real_escape_string($id);
			if($row = db_squery($sql)){
				if($row['bl'] || check_banned_domain(check_domain($row['url']))){
					error_404("Masih ada CD nya, ga bisa lah!");
				}else{
					$prev_url = $row['url'];
					$prev_vis = $row['vi'];
					$prev_pre = $row['pr'];
					// include the preview page
					include('preview.php');
					// kill php script
					die();
				}
			}else{
				error_404("Ops, Belum pakai pengaman!");
			}
		}
		if(preg_match("/^[0-9]+$/", $id) !== 0){
			
			$sql = 'SELECT * FROM '.S_TB_URLS.' WHERE id = '.mysql_real_escape_string($id);
			if($row = db_squery($sql)){
				
				if($row['bl'] || check_banned_domain(check_domain($row['url']))){
					error_404("Aduh, Lagi Dapet sayank!");
				}

				if(S_OPT_STATS){
					$ref = $_SERVER['HTTP_REFERER'];
					if(!empty($ref)){
						$sql = 'INSERT INTO '.S_TB_REFERERS.' (urlid, ref) VALUES ('.mysql_real_escape_string($id).', "'.mysql_real_escape_string($ref).'")';
						mysql_query($sql);
					}
					$sql = 'UPDATE '.S_TB_URLS.' SET vi=vi+1 WHERE id = '.mysql_real_escape_string($id).' LIMIT 1';
					mysql_query($sql);
					
				}
				mysql_close();
				header("HTTP/1.1 301 Moved Permanently");
				header("Location: ".$row['url']);
				header("Connection: close");
				die();
			}else{
				error_404("<!DOCTYPE html>
<html lang=\"id\">
<head>
<title>404 Salah Masukin</title>
<meta name=\"robots\" content=\"noindex, follow\">
 <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"shortcut icon\" href=\"/favicon.ico\">
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"/bs.css\">
  </head>
  <body>
<div class=\"container\"  style=\"margin-top:70px;\">
<!-- /.container -->
<div class=\"col-lg-6 col-lg-offset-3\">
<div class=\"alert alert-dismissable alert-warning\">
  <h1>404 Salah Lubang</h1>
  <p>Aduh salah masukin.. Sakit tauk.. :( Sini lewat <a href=\"/\" class=\"alert-link\">Depan</a>.</p>
</div>
<hr />
Melu.Ga</div>
<script type=\"text/javascript\"></script> 
</body>
</html>");
			}
		}else{
			error_404("Kok di masukin sini sih yank?");
		}
	}
}
?>
