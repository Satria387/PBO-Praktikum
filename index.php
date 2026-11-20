<?php

//untuk memanggil property constant 
require('./PropertyConstant.php');

use Pbo\MarketPlace\Produk;

//object
$produk = new Produk();
$produk -> setKode('P001') -> setNama ('Laptop') -> setHarga (1000000) -> setStok(5);


//hasil
echo "produk: ". $produk-> getNama();
echo "<br/>";

echo "harga: Rp. ". $produk-> getHarga();
echo "<br/>";

echo "stok: ". $produk-> getStok();
echo "<br/>";

echo "pajak: ". $produk->pajak() . "%";
echo "<br/>";

echo "total harga setelah pajak: . Rp". $produk->total();