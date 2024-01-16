<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("user/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php if ($this->session->flashdata('input')) { ?>
        <script>
            swal({
                title: "Success!",
                text: "Data Berhasil Diubah!",
                icon: "success"
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_input')) { ?>
        <script>
            swal({
                title: "Erorr!",
                text: "Data Gagal Diubah!",
                icon: "error"
            });
        </script>
    <?php } ?>
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url(); ?>assets/admin_lte/dist/img/Loading.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view("user/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("user/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

           <!-- Main content -->
           <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Kamu</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>

                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>No Pendaftar</th>
                                                <th>NIK</th>
                                                <th>Nama Lengkap</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Agama</th>
                                                <th>Status Verifikasi</th>
                                                <th>Foto</th>
                                                <th>Foto KTP</th>
                                                <th>Foto Ijazah</th>
                                                <th>Foto Akte</th>
                                                <th>Foto Surat Pengalaman Kerja</th>
                                                <th>Foto Transkrip Nilai</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $username = $user_data['username'];
                                            $email = $user_data['email'];
                                            $id_user = $user_data['id_user'];
                                            $nik = $user_data['nik']; 
                                            $no_pendaftaran = $user_data['no_pendaftaran']; 
                                            $nama_lengkap = $user_data['nama_lengkap']; 
                                            $tempat_lahir = $user_data['tempat_lahir']; 
                                            $tanggal_lahir = $user_data['tanggal_lahir']; 
                                            $jenis_kelamin = $user_data['jenis_kelamin']; 
                                            $agama = $user_data['agama']; 
                                            $id_status_verifikasi = $user_data['id_status_verifikasi'];
                                            $foto_saya = $user_data['foto_saya'];
                                            $foto_ktp = $user_data['foto_ktp'];
                                            $foto_ijazah = $user_data['foto_ijazah'];
                                            $foto_akte = $user_data['foto_akte'];
                                            $foto_surat_pengalaman_kerja = $user_data['foto_surat_pengalaman_kerja'];
                                            $foto_transkrip_nilai = $user_data['foto_transkrip_nilai'];
                                            ?>
                                            <tr>
                                                <td><?=$username ?></td>
                                                <td><?=$email?></td>
                                                <td><?=$no_pendaftaran?></td>
                                                <td><?=$nik?></td>
                                                <td><?=$nama_lengkap?></td>
                                                <td><?=$tempat_lahir?></td>
                                                <td><?=$tanggal_lahir?></td>
                                                <td><?=$jenis_kelamin?></td>
                                                <td><?=$agama?></td>
                                                <td><?php if($id_status_verifikasi == 1){ ?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-danger" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Belum Diverifikasi
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }elseif($id_status_verifikasi == 2) {?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-info" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Sudah Diverifikasi
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/berkas/<?php echo $foto_saya?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/berkas/<?php echo $foto_saya?>"
                                                                style="width: 25%"> </a></center>
                                                </td>
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/berkas/<?php echo $foto_ktp?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/berkas/<?php echo $foto_ktp?>"
                                                                style="width: 25%"> </a></center>
                                                </td>
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/berkas/<?php echo $foto_ijazah?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/berkas/<?php echo $foto_ijazah?>"
                                                                style="width: 25%"> </a></center>
                                                </td>
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/berkas/<?php echo $foto_akte?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/berkas/<?php echo $foto_akte?>"
                                                                style="width: 25%"> </a></center>
                                                </td>
                                                <td>
                                                    <center>
                                                        <?php if($foto_surat_pengalaman_kerja != ""){?>
                                                        <a href="<?= base_url();?>assets/berkas/<?php echo $foto_surat_pengalaman_kerja?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/berkas/<?php echo $foto_surat_pengalaman_kerja?>"
                                                                style="width: 25%"> </a>
                                                        <?php } else {?>
                                                        <h3>Foto Belum Ada</h3>
                                                        <?php } ?>
                                                    </center>

                                                </td>
                                                <td>
                                                    <center> <a
                                                            href="<?= base_url();?>assets/berkas/<?php echo $foto_transkrip_nilai?>"
                                                            target="_blank"><img
                                                                src="<?= base_url();?>assets/berkas/<?php echo $foto_transkrip_nilai?>"
                                                                style="width: 25%"> </a></center>
                                                </td>
                                            </tr>
                                        </tbody>
        </div>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("user/components/js.php") ?>
</body>

</html>
