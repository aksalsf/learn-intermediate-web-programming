<?php $pagename = "Beranda - Sistem Akademik Mahasiswa"; ?>
<?php
    require 'templates/header.php';
 ?>

<div class="container pt-md-5 pt-3 pb-3">
    <?php require 'modules/form-validation.php'; ?>
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo ($_SERVER["REQUEST_METHOD"] == "POST" && $isValid == true) ? "img/thanks.svg" : "img/home.svg"; ?>" alt="Home Image" class="img-fluid">
        </div>
        <?php if($_SERVER["REQUEST_METHOD"] == "POST" && $isValid == true): ?>
        <?php require 'templates/thanks.php'; ?>
        <?php else: ?>
        <div class="col-md-6 pl-md-5 pr-md-5 my-auto border-left overflow-auto my-form-container" style="height: 500px;">
            <?php require 'templates/form.php'; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php require 'templates/footer.php'; ?>