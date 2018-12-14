<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `rawat` WHERE CONCAT(`nomor_pasien`, `nama`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `rawat`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "rawatinap");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/hal.css" type="text/css" rel='stylesheet'>
    <link href="css/bootstrap.css" type="text/css" rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <a href="#" class=""><img src="assets/images/rms.png" width="90px"></a>
        <ul>
        <li><a href="home.php">home</a></li>
        <li><a href="jadwaldokter.php">jadwal</a></li>
        <li><a href="fasilitas.php">fasilitas</a></li>
        <li><a href="rawat.php">rawat</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">contact</a></li>
    </ul>
</head><hre>
<body>
   
    </head>
    <body>
    <style type="text/css">
     body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}

    .form{
        margin-top: 0em;
    }
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	
    .search-box {
        position: relative;        
        float: right;
    }
    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }
	.search-box input:focus {
		border-color: #3FBAE4;
	}
    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }
 
</style>
<script type="text/javascript">
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Daftar Pasien</h2>
					</div>
                    <div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Daftar Pasien</span></a>  &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
                        <!-- <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>                --> 
                        </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
					<th>Nomor Pasien</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
						<th>Rekam Medis</th>
                        <th>Tanggal Lahir</th>
                        <th>Asuransi</th>
                        <th>Spesialis</th>
                        <th>Nama Dokter</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
				<?php 
		include "db.php";
        $sql = mysqli_query($con,"SELECT * FROM rawat");
        while($req = mysqli_fetch_array($sql)){?>
                    <tr>
						<td><?php echo $req['id'];?></td>
                        <td><?php echo $req['nama']; ?></td>
						<td><?php echo $jenis_kelamin = $req['jenis_kelamin']; ?></td>
                        <td><?php echo $nomor_rekam_medis = $req['nomor_rekam_medis'];?></td>
                        <td><?php echo $tgl_lahir = $req['tgl_lahir']; ?></td>
                        <td><?php echo $asuransi = $req['asuransi']; ?></td>
                        <td><?php echo $spesialis = $req['spesialis'];?></td>
                        <td><?php echo $dokter = $req['dokter'];?></td>
                        <td><?php echo $status = $req['status'];?></td>
                        <td>
							
                        </form>
						<!-- <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a> -->
						<a href="#deleteEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
					<?php
			}
			?>
				</tbody>
            </table>
           
	<!-- Edit Modal HTML -->
    <form method="POST" action="input-prs.php">	
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Daftar Pasien</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	
					<div class="form-group">
							<input type="hidden" name="id" required>
						</div>				
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" required>
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<input type="text" class="form-control" name="jenis_kelamin" required>
						</div>
						<div class="form-group">
							<label>Rekam Medis</label>
							<input type="text" class="form-control" name="nomor_rekam_medis" required>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="text" class="form-control" name="tgl_lahir" required>
						</div>			
                        <div class="form-group">
							<label>Asuransi</label>
							<input type="text" class="form-control" name="asuransi" required>
						</div>
                        <div class="form-group">
							<label>Spesialis</label>
							<input type="text" class="form-control" name="spesialis" required>
						</div>
                        <div class="form-group">
							<label>Nama Dokter</label>
							<input type="text" class="form-control" name="dokter" required>
						</div>
                        <div class="form-group">
							<label>Status</label>
							<input type="text" class="form-control" name="status" required>
						</div> 
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<?php 
            if(isset($_GET['id'])) {
                $id = $_GET['id'];?>
				<?php  
                $sql = mysqli_query($connect, "SELECT * FROM rawat WHERE id = '$id'");
                while ($req = mysqli_fetch_array($query)) {
                    
            ?>
    <form method="POST" action="update.php">	
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Edit Data Pasien</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">						
                    <div class="form-group">
							<input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
						</div>				
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" required>
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<input type="text" class="form-control" name="jenis_kelamin" required>
						</div>
						<div class="form-group">
							<label>Rekam Medis</label>
							<input type="text" class="form-control" name="nomor_rekam_medis" required>
						</div>
						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="text" class="form-control" name="tgl_lahir" required>
						</div>		
                        <div class="form-group">
							<label>asuransi</label>
							<input type="text" class="form-control" name="asuransi" required>
						</div>	
                        <div class="form-group">
							<label>spesialis</label>
							<input type="text" class="form-control" name="spesialis" required>
						</div>
                        <div class="form-group">
							<label>Nama Dokter</label>
							<input type="text" class="form-control" name="dokter" required>
						</div>
                        <div class="form-group">
							<label>Status</label>
							<input type="text" class="form-control" name="status" required>
						</div> 				
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
					<?php 
                }
            }
            ?>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<form method="POST" action="hapus.php">
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="hapus.php">
					<div class="modal-header">						
						<h4 class="modal-title">MAAF SEDANG DALAM MAINTENANCE</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>		
					<!-- <div class="modal-body">					
						<p>Apakah anda yakin akan menghapus data pasien?</p>
						<p class="text-warning"><small>perubahan tidak dapat ditunda</small></p>
					</div> -->
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<!-- <input type="submit" class="btn btn-danger" value="Delete"> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</body>
</html>