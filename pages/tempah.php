<?php include "config/produk.php"; ?>

<h2>Borang Tempahan</h2>

<form method="POST" action="process/tempah_process.php" id="formTempah">

    <div class="produk-container">

        <?php foreach ($data as $produk): ?>

            <div class="card">

                <img src="gambar/<?= $produk['gambar'] ?>">

                <h3><?= $produk['nama'] ?></h3>

                <?php foreach ($produk['harga'] as $saiz => $harga): ?>

                    <p>
                        <?= ucwords(str_replace('_', ' ', $saiz)) ?>
                        RM <?= number_format($harga, 2) ?>
                    </p>

                    <input
                        type="number"
                        name="tempahan[<?= $produk['id'] ?>][<?= $saiz ?>]"
                        value="0"
                        min="0"
                        data-price="<?= $harga ?>"
                        class="qty-input"
                    >

                <?php endforeach; ?>

            </div>

        <?php endforeach; ?>

    </div>

    <div class="card">

        <label>Nama Penuh</label>

        <input type="text" name="nama_pelanggan" required>

        <h3 id="total-price">RM 0.00</h3>

        <button type="submit">Teruskan</button>

    </div>

</form>

<script src="assets/js/tempah.js"></script>