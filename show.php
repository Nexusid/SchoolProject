<?php 
		include "db.php";
        $sql = "SELECT * FROM rawat";
        $result = $con->query($sql);
            
		foreach($result as $req){
	
			 $nama = $req['nama']; 
			 $jenis_kelamin = $req['jenis_kelamin']; 
             $nomor_rekam_medis = $req['nomor_rekam_medis']; 
             $tgl_lahir = $req['tgl_lahir']; 
             $asuransi = $req['asuransi']; 
             $asal = $req['asal']; 
             $spesialis = $req['spesialis']; 
             $dokter = $req['dokter']; 
             $email = $req['email']; 
             $nomor_hp = $req['nomor_hp'];			
        }
        ?>