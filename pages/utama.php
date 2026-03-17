<?php include 'data/produk.php'; ?>

<h1>Selamat Datang</h1>

<?php foreach ($data as $produk): ?>
    <img src="gambar/<?= $produk['gambar'] ?>" width="150">
<?php endforeach; ?>