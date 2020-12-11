<?php 

    require "db-conn.php";

    $tableName = "tb_mahasiswa";
    
    $sql = "INSERT INTO $tableName (mhs_nim, mhs_nama, mhs_gender, mhs_birthdate, mhs_birthloc, mhs_prodi, mhs_alamat, mhs_phone, mhs_email) VALUES('$NIM', '$nama', '$gender', '$birthdate', '$birthloc', '$prodi', '$alamat', '$phone', '$email')";
    
?>

<?php if(mysqli_query($conn, $sql)): ?>
<?php $isValid = true; ?>
<?php else: ?>
<div class="alert alert-danger" role="alert">
    <?php echo "<Error: " . $sql . "<br>" . mysqli_error($conn); ?>
</div>
<?php endif; ?>

<?php 

mysqli_close($conn);

?>