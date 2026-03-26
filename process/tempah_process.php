<?php

session_start();

include "../config/produk.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama_pelanggan = htmlspecialchars(trim($_POST['nama_pelanggan']));
    $tempahan_input = $_POST['tempahan'] ?? [];

    $item_tempahan = [];
    $jumlah_besar = 0;

    foreach ($tempahan_input as $produk_id => $saiz_list) {

        foreach ($data as $p) {

            if ($p['id'] == $produk_id) {

                foreach ($saiz_list as $saiz => $qty) {

                    $qty = (int)$qty;

                    if ($qty > 0) {

                        $harga = $p['harga'][$saiz];
                        $jumlah = $qty * $harga;

                        $item_tempahan[] = [

                            'nama_produk' => $p['nama'],
                            'saiz' => ucwords(str_replace('_', ' ', $saiz)),
                            'harga_seunit' => $harga,
                            'kuantiti' => $qty,
                            'jumlah_harga' => $jumlah

                        ];

                        $jumlah_besar += $jumlah;

                    }

                }

            }

        }

    }

    if ($jumlah_besar == 0) {

        header("Location:../index.php?menu=tempah");
        exit();

    }

    $_SESSION['invois_data'] = [

        'no_invois' => 'INV-' . rand(10000, 99999),
        'nama_pelanggan' => $nama_pelanggan,
        'tarikh' => date("d/m/Y"),
        'items' => $item_tempahan,
        'jumlah_besar' => $jumlah_besar

    ];

    header("Location:../index.php?menu=invois");
    exit();

}