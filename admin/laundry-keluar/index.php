<?php 
    session_start();
    
    require 'functions.php';

    if(!isset($_SESSION["login"])) {
        header("Location: ../login");
        exit;
    }        
    
    $exits = tampil("SELECT * FROM transaksi WHERE status = 'Sudah diambil'");
    include ('../view/header.php');
    ?>

<div class="container mt-4 h1 request-heading">Laundry Keluar</div>
<?php if(isset($_SESSION["status"])){ ?>
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION["status"] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
<?php 
} 
$_SESSION["status"] = null
?>

<?php if(isset($_SESSION["failed"])){ ?>
            <div class="container">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $_SESSION["failed"] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
<?php 
} 
$_SESSION["failed"] = null
?>


<div class="text-end container">
    <a href="../laundry-keluar/tambah.php"><button type="button" class="btn btn-orange">Tambah Data</button></a>
</div>
<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid container">
        <div class="row">
            <div class="col-lg-12">                            
                <div class="panel panel-default">
                    <div class="panel-body">                                    
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Tanggal Keluar</th>                                    
                                    <th>Nama Konsumen</th>
                                    <th>Berat (kg)</th>
                                    <th>Kategori</th>
                                    <th>Harga (/kg)</th>
                                    <th>Total</th>
                                    <th>Diambil Pada</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($exits as $exit) : ?>
                                <tr>
                                    <td><?= $no; ?>.</td>
                                    <?php
                                        $masuk = $exit['masuk'];
                                        $dateMasuk = date_create("$masuk");
                                    ?>
                                    <td><?= date_format($dateMasuk,"d/m/Y"); ?></td>
                                    <?php
                                        $keluar = $exit['keluar'];
                                        $dateKeluar = date_create("$keluar");
                                    ?>
                                    <td><?= date_format($dateKeluar,"d/m/Y"); ?></td>
                                    <td><?= $exit["nama_konsumen"] ?></td>
                                    <td><?= $exit["berat"] ?></td>
                                    <td><?= $exit["kategori"] ?></td>
                                    <td><?= $exit["harga_satuan"] ?></td>
                                    <td><?= $exit["harga_total"] ?></td>
                                    <?php
                                        $diambil = $exit['diambil'];
                                        $dateDiambil = date_create("$diambil");
                                    ?>
                                    <td><?= date_format($dateDiambil,"d/m/Y"); ?></td>
                                </tr>               
                                <?php $no++; ?>                 
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>                                                            
            </div>
        </div>
    </div>
</div>

