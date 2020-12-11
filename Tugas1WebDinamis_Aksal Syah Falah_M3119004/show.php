<?php

$pagename = "Data Mahasiswa - Sistem Akademik Mahasiswa"; 
require 'templates/header.php';
require 'modules/db-conn.php';

?>

<div class="p-md-5 dark-mode">
    <h1 class="text-center mb-5">Data Mahasiswa</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th class="align-middle">NIM</th>
                    <th class="align-middle">Nama</th>
                    <th class="align-middle">Jenis Kelamin</th>
                    <th class="align-middle">Kota Kelahiran</th>
                    <th class="align-middle">Tanggal Lahir</th>
                    <th class="align-middle">Program Studi</th>
                    <th class="align-middle">Alamat</th>
                    <th class="align-middle">Nomor Telepon</th>
                    <th class="align-middle">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                $sql = "SELECT mhs_nim, mhs_nama, mhs_gender, mhs_birthdate, mhs_birthloc, mhs_prodi, mhs_alamat, mhs_phone, mhs_email FROM tb_mahasiswa";
                
                $result = mysqli_query($conn, $sql);
                
                ?>
                <?php if(mysqli_num_rows($result) > 0): ?>
                <?php while($data = mysqli_fetch_assoc($result)): ?>
                <tr class="text-center">
                    <td>
                        <?php echo $data['mhs_nim']; ?>
                    </td>
                    <td>
                        <?php echo $data['mhs_nama']; ?>
                    </td>
                    <td>
                        <?php
                            switch ($data['mhs_gender']) {
                                case 'l':
                                    echo "Laki-laki";
                                    break;
                                case 'p':
                                    echo "Perempuan";
                                    break;
                                default:
                                    echo "Error";
                                    break;
                            }
                        ?>
                    </td>
                    <td>
                        <?php echo $data['mhs_birthloc']; ?>
                    </td>
                    <td>
                        <?php 
                        echo date("j F Y", strtotime($data['mhs_birthdate']));
                        ?>
                    </td>
                    <td>
                        <?php
                            switch ($data['mhs_prodi']) {
                                case 'ti':
                                    echo "Teknik Informatika";
                                    break;
                                case 'te':
                                    echo "Teknik Elektro";
                                    break;
                                case 'tm':
                                    echo "Teknik Mesin";
                                    break;
                                default:
                                    echo "Error";
                                    break;
                            }
                        ?>
                    </td>
                    <td>
                        <?php echo $data['mhs_alamat']; ?>
                    </td>
                    <td>
                        <?php echo $data['mhs_phone']; ?>
                    </td>
                    <td>
                        <?php echo $data['mhs_email']; ?>
                    </td>
                </tr>
                <?php endwhile; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script>
document.body.style.backgroundColor = "#0D1117";
</script>