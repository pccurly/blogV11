<?php 
if (!defined("ADMIN")) {die("Kullanıcı Girişi Gerekmektedir..");} //admin kontrolü

if (!get("id")) {
	header("location:index.php"); exit();
}
$id=(int)get("id");

$db->sql ="select * from tb_experience where experience_id=?";
$db->veri=array($id);

$kategori =$db->select(1);

if ($kategori==false) {
	header("location:index.php"); exit();
}

$db->sql = "delete from tb_experience where experience_id=?";
$db->veri=array($id);

$sil =$db->delete();

if ($sil==true) {
	header("location:index.php?url=deneyim&islem=silindi");
}
else{
	header("location:index.php?url=deneyim&islem=silinemedi");
}


 ?>