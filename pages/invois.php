<?php
session_start();

if (!isset($_SESSION['invois_data'])) {
    echo "Tiada invois";
    return;
}

$invois = $_SESSION['invois_data'];
?>

<h1>Invois</h1>
<p><?= $invois['nama_pelanggan'] ?></p>