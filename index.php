<?php

//untuk memanggil property constant 
require('./PropertyConstant.php');

use Pbo\MarketPlace\Produk;

//object
$produk = new Produk();
$produk -> setKode('P001') -> setNama ('Laptop') -> setHarga (1000000) -> setStok(5);


//hasil
echo "Produk: ". $produk-> getNama();
echo "<br/>";

echo "Harga: Rp. ". $produk-> getHarga();
echo "<br/>";

echo "Stok: ". $produk-> getStok();
echo "<br/>";

echo "Pajak: ". $produk->pajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: . Rp". $produk->total();