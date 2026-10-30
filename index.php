<?php

//untuk memanggil property constant 
require('./PropertyConstant.php');

use Pbo\MarketPlace\Produk;

//object
$produk = new Produk('P001', 'laptop', 10000000, 5);


//hasil
echo "produk: ". $produk->nama;
echo "<br/>";

echo "harga: Rp. ". $produk->harga;
echo "<br/>";

echo "stok: ". $produk->stok;
echo "<br/>";

echo "pajak: ". $produk->pajak() . "%";
echo "<br/>";

echo "total harga setelah pajak: . Rp". $produk->total();

