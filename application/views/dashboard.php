<div class="jumbotron bg-primary text-white">
    <h4 class="my-0">Selamat Datang di</h4>
    <h1 class="display-4 my-0">SiAbOn (Sistem Informasi Absensi Online)</h1>
    <hr class="my-4">
    <p class="lead">Website Absensi PT BCL.</p>
</div>

<div class="container">
    <div class="row">
        <?php if(is_level('Manager')): ?>
        <div class="col-lg-4 mb-3 <?= @$_active ?>">
            <div class="card card-box">
                <div class="card-header bg-info text-white">
                    Jumlah Pegawai
                </div>
                <div class="card-body-0">
                    <h2 class="card-title"><?php echo $jumlah_pegawai; ?></h2>
                    <p class="card-text">Total pegawai yang terdaftar</p>
                    <h5 class="card-subtitle">User: <?php echo $jumlah_karyawan; ?></h5>
                    <h5 class="card-subtitle">Admin: <?php echo $jumlah_manager; ?></h5>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-3 <?= @$_active ?>">
            <div class="card card-box">
                <div class="card-header bg-info text-white">
                    Jumlah Divisi
                </div>
                <div class="card-body-1">
                    <h2 class="card-title"><?php echo $jumlah_divisi; ?></h2>
                    <p class="card-text">Total divisi yang ada</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-3 <?= @$_active ?>">
            <div class="card card-box">
                <div class="card-header bg-info text-white">
                    Absen Hari Ini
                </div>
                <div class="card-body-2">
        
                    <?php if (!empty($absensi_hari_ini)): ?>
                        <p class="card-text">Karyawan Masuk: <?php echo $jumlah_karyawan_hadir; ?></p>
                        <p class="card-text">Karyawan Tidak Masuk: <?php echo $jumlah_karyawan_tidak_hadir; ?></p>
                    <?php else : ?>
                        <p>Belum ada yang absen hari ini.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php else : ?>
        <div class="col-lg-4 mb-3 <?= @$_active ?>">
            <div class="card card-box">
                <div class="card-header bg-info text-white">
                    Jadwal Hari Ini
                </div>
                <div class="card-body-3">
                    <p class="card-text">Masuk: <?php echo $jam_masuk->start; ?> - <?php echo $jam_masuk->finish; ?></p>
                    <p class="card-text">Pulang: <?php echo $jam_pulang->start; ?> - <?php echo $jam_pulang->finish; ?></p>
                </div>
            </div>
        </div>
        <?php endif; ?>

    </div>
</div>
