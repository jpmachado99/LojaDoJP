<?php
session_start();
function mostraAlerta($tipo){
	if(isset($_SESSION["danger"])){
?>
	<p class="alert-<?= $tipo ?>"><?=$_SESSION[$tipo]?></p>
<?php
	unset($_SESSION["danger"]);
	}
}