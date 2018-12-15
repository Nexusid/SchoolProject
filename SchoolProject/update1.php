<!DOCTYPE html>
<?php
    include "db.php";
    include "update.php";
?>
<html lang="en">
<head>
<link rel="stylesheet" href="assets/updet.css">	
</head>
<body>
<section id="input-form">
              <form method="POST" action="<?php echo  $_SERVER['PHP_SELF']; ?>">
            <div class ="form">
                <input id ="inpIdUser"type="hidden" name="id" value= "<?php echo $id; ?>">
            </div>
            <div class ="form">
                <label>Nama</label>
                <input id ="inpName"type="text" name="nama">
            </div>
            <div class ="form">
                <label>Jenis Kelamin</label>
                <input id="inpRole" type="text" name="jenis_kelamin">
            </div>
            <div class ="form">
                <label>Nomor Rekam Medis</label>
                <input id="inpAvailability" type="text" name="nomor_rekam_medis">
            </div>
            <div class ="form">
                <label>Tanggal Lahir</label>
                <input id="inpAge" type="number" name="tgl_lahir">
            </div>
            <div class ="form">
                <label>Asuransi</label>
                <input id="inpLocation" type="text" name="asuransi">
            </div>
            <div class ="form">
                <label>Spesialis</label>
                <input id="inpYears" type="number" name="spesialis">                  
            </div>
            <div class ="form">
                <label>Dokter</label>
                <input id="inpEmail" type="email" name="dokter">                  
			</div>
			<div class ="form">
                <label>Status</label>
                <input id="inpEmail" type="email" name="status" placeholder="Your Email" >                  
            </div>
            <div class="form">
                <input onclick="" type="submit" name="submit"  value="SUBMIT" class="bg-blue">
            </div>
        </form>
    </section>
	<script>
                var formMenu =document.getElementById("input-form");
                 formMenu.style.display = "none";

                function editForm(){
                    if(formMenu.style.display === "none"){
                        formMenu.style.display ="block";
                    }
                    else{
                        formMenu.style.display ="none";
                    }
                    var name = document.getElementById("pName").innerHTML;
                    var role = document.getElementById("pRole").innerHTML;
                    var availability = document.getElementById("pAvailability").innerHTML;
                    var age = document.getElementById("pAge").innerHTML;
                    var location = document.getElementById("pLocation").innerHTML;
                    var Years = document.getElementById("pYears").innerHTML;
                    var email = document.getElementById("pEmail").innerHTML;

                    document.getElementById("inpName").value =id;
                    document.getElementById("inpRole").value =;
                    document.getElementById("inpAvailability").value =availability;
                    document.getElementById("inpAge").value =age;
                    document.getElementById("inpLocation").value =location;
                    document.getElementById("inpYears").value =Years;
                    document.getElementById("inpEmail").value =email;
                }

</body>
</html>