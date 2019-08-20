<?php
require "../../dbCon.php";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vidu 1 Cach 1 - php thuần</title>
<style>
.title{background-color:green; color:yellow; text-align:center; padding:5px}
#menu a{display:block}
.motTin{border-bottom:solid 1px blue; padding:10px}
.tieude{color:red; font-weight:bold}
</style>
</head>

<body>
<table width="1000" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="20%" class="title">Loại tin</td>
    <td class="title">Tin</td>
    <td class="title">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td id="menu">
    <?php
	$qrLoaiTin = "SELECT * FROM loaitin";
    $loaitin = mysql_query($qrLoaiTin);
	while($row_loaitin = mysql_fetch_array($loaitin)){
	?>
    <a href="index.php?idLT=<?php echo $row_loaitin["idLT"] ?>">
		<?php echo $row_loaitin["Ten"] ?>
    </a>
    <?php } ?>
    </td>
    <td>
    	<?php
        $idLT = $_GET["idLT"]; 
		settype($idLT, "int");
		$qrTin = "	SELECT * FROM tin
					WHERE idLT=$idLT	";
		$tins = mysql_query($qrTin);
		while($row_tin = mysql_fetch_array($tins)){
		?>
    	<div class="motTin">
            <div class="tieude"><?php echo $row_tin["TieuDe"] ?></div>
            <img style="float:left; margin-right:5px" src="../../upload/tintuc/<?php echo $row_tin["urlHinh"] ?>" width="100"  /> <?php echo $row_tin["TomTat"] ?>
            <div style="clear:both"></div>
        </div>
        <?php } ?>
    </td>
    <td><iframe width="300" height="169" src="https://www.youtube.com/embed/VdX0d5sRG-8" frameborder="0" allowfullscreen></iframe></td>
  </tr>
</table>

</body>
</html>