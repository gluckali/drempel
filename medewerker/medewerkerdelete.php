<?php
include "../database.php";
if(isset($_GET["id"])){
$db = new database();
$db->update_or_delete("DELETE from reservering WHERE id=:id;",['id'=>$_GET["id"]] );
}

?>