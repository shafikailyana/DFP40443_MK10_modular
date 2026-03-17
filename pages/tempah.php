<?php include 'data/produk.php'; ?>

<h1>Tempah</h1>

<form method="POST">
<?php foreach ($data as $produk): ?>
    <p><?= $produk['nama'] ?></p>
<?php endforeach; ?>

<input type="text" name="nama_pelanggan" placeholder="Nama">
<button type="submit">Submit</button>
</form>