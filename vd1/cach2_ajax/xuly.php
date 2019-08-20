<?php require "../../dbCon.php"; 
        $idLT = $_GET["idLT"]; 
		settype($idLT, "int");
		$qrTin = "	SELECT * FROM tin
					WHERE idLT=$idLT	";
		$tins = $connection->query($qrTin);
		while($row_tin = $tins->fetch(PDO::FETCH_ASSOC)){
		?>
        
    	<div class="motTin">
            <div class="tieude" idtin="<?php echo $row_tin["idTin"] ?>"><?php echo $row_tin["TieuDe"] ?></div>
            <img style="float:left; margin-right:5px" src="../../upload/tintuc/<?php echo $row_tin["urlHinh"] ?>" width="100"  /> <?php echo $row_tin["TomTat"] ?>
            <div style="clear:both"></div>
        </div>
        
        <?php } ?>