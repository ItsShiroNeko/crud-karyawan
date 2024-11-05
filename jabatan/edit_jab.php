<!DOCTYPE html> 
<html> 
<head> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head> 
<body>
<div class="container"> 
    <br /> 
    <br /> 
    <br /> 
    <div class="col-md-5 col-md-offset-3"> 
        <div class="panel"> 
            <div class="panel-heading"> 
                <h3>Edit Jabatan</h3> 
            </div> 
            <div class="panel-body"> 
                <?php 
                include '../conn.php'; 
                $id = $_GET['id']; 

                $Jabatan = mysqli_query($conn, "SELECT * FROM jabatan WHERE id_jab='$id'"); 
                if ($d = mysqli_fetch_array($Jabatan)) { 
                ?> 
                    <form method="post" action="update_jab.php"> 
                        <div class="form-group"> 
                            <label>Id</label> 
                            <input type="hidden" name="id_jab" value="<?php echo $d['id_jab']; ?>"> 
                            <input type="text" class="form-control" name="id_jab" value="<?php echo $d['id_jab']; ?>" readonly> 
                        </div> 
                        <div class="form-group"> 
                            <label>Jabatan</label> 
                            <input type="text" class="form-control" name="nama_jab" value="<?php echo $d['nama_jab']; ?>" required> 
                        </div> 
                        <div class="form-group"> 
                            <label>Gaji Pokok</label> 
                            <input type="number" class="form-control" name="gaji_pokok" value="<?php echo $d['gaji_pokok']; ?>" required> 
                        </div>
                        <div class="form-group"> 
                            <label>Gaji Pokok</label> 
                            <input type="number" class="form-control" name="tunjangan" value="<?php echo $d['tunjangan']; ?>" required> 
                        </div>
                        <br /> 
                        <input type="submit" class="btn btn-primary" value="Update Jabatan"> 
                        <a class="btn btn-danger" href="input_jab.php">Back</a>
                    </form> 
                <?php 
                } else {
                    echo "<p>Karyawan tidak ditemukan.</p>";
                }
                ?> 
            </div> 
        </div> 
    </div> 
</div> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body> 
</html>
