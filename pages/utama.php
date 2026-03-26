<?php include "config/produk.php"; ?>

<h2>Selamat Datang</h2>

<div class="produk-container">

    <?php foreach ($data as $produk): ?>

        <div class="card">

            <img src="gambar/<?= $produk['gambar'] ?>">

            <h3><?= $produk['nama'] ?></h3>

        </div>

    <?php endforeach; ?>

</div>

<div class="card">

    <h3>Cara Membuat Tempahan</h3>

    <p>
        Klik menu Tempah, pilih biskut dan kuantiti,
        masukkan nama dan tekan Teruskan.
        Invois akan dipaparkan.
    </p>

</div>