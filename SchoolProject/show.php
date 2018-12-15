<?php 
		include "db.php";
        $sql = mysqli_query($con,"SELECT * FROM rawat");
        while($req = mysqli_fetch_array($sql)){?>
            
		
             
			 $nama = $req['nama']; 
			 $jenis_kelamin = $req['jenis_kelamin']; 
             $nomor_rekam_medis = $req['nomor_rekam_medis']; 
             $tgl_lahir = $req['tgl_lahir']; 
             $asuransi = $req['asuransi']; 
             $spesialis = $req['spesialis']; 
             $dokter = $req['dokter']; 
             $status = $req['status'];		
             <?php	
        }
        ?>