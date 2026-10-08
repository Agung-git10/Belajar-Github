<?php
require_once 'config/database.php';
$pageTitle = 'Kontak - Telkom University';
require 'includes/header.php';
?>
<section class="section">
    <div class="container container-narrow">
        <div class="section-heading">
            <span class="eyebrow">Kontak</span>
            <h1>Kirim pesan ke tim kami</h1>
            <p class="lead">Formulir ini menggunakan metode POST untuk memproses data secara aman.</p>
        </div>
        <form class="form" action="contact_process.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subjek">Subjek Pesan</label>
                <input type="text" id="subjek" name="subjek" required>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan Anda</label>
                <textarea id="pesan" name="pesan" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
    </div>
</section>
<?php require 'includes/footer.php'; ?>