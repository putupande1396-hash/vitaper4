<?php
    // JSon
    $json_trans = '{
    "idnota":"TR-001",
    "tgl":"2026-05-17",
    "jam":"13:25:20",
    "kasir":"anjaskara",
    "pelanggan":{
    "nama":"kara",
    "alamat":"kapalm, Mengwi",
    "nohp":"08765432000"
    },
    "items":[
    {
    "kodebarang":"B0001",
    "namabarang":"Sandal Jepit Kuda",
    "jenis":"aksesoris",
    "hargajual":200000,
    "qty":20,
    "subtotal":4000000
    },{
    "kodebarang":"B0001",
    "namabarang":"Sandal Jepit Macan",
    "jenis":"aksesoris",
    "hargajual":150000,
    "qty":50,
    "subtotal":7500000
    }
    ],
    "total_item":70,
    "ntotal":11500000
    }';

    $jdata = json_decode($json_trans);

    echo $jdata->idnota;