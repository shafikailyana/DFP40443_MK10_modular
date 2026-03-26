<?php

if (!isset($_SESSION['invois_data'])) {

    header("Location:index.php?menu=tempah");
    exit();

}

$invois = $_SESSION['invois_data'];

?>

<h2>Invois Tempahan</h2>

<div class="invois-box">

    <p>
        Nama: <?= htmlspecialchars($invois['nama_pelanggan']) ?><br>
        No Invois: <?= $invois['no_invois'] ?><br>
        Tarikh: <?= $invois['tarikh'] ?>
    </p>

    <table>

        <tr>
            <th>Produk</th>
            <th>Saiz</th>
            <th>Harga</th>
            <th>Kuantiti</th>
            <th>Jumlah</th>
        </tr>

        <?php foreach ($invois['items'] as $item): ?>

            <tr>

                <td><?= $item['nama_produk'] ?></td>

                <td><?= $item['saiz'] ?></td>

                <td>RM <?= number_format($item['harga_seunit'], 2) ?></td>

                <td><?= $item['kuantiti'] ?></td>

                <td>RM <?= number_format($item['jumlah_harga'], 2) ?></td>

            </tr>

        <?php endforeach; ?>

        <tr>

            <td colspan="4">Jumlah Besar</td>

            <td>RM <?= number_format($invois['jumlah_besar'], 2) ?></td>

        </tr>

    </table>

    <button onclick="window.print()">Cetak Invois</button>

</div>