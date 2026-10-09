<?php

class Produk {

    //property
    public string $kode; 
    public string $nama; 
    public int $harga; 
    public int $stok; 

    //constanta
    public const PAJAK = 0.11;
}

//object
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hitung pajak
$pajak = produk::PAJAK * 100;
$jumlahpajak = $produk->harga * Produk::PAJAK; //1.100.000

//total
$total = $produk->harga + $jumlahpajak;

//hasil
echo "produk: ". $produk->nama;
echo "<br/>";

echo "harga: Rp. ". $produk->harga;
echo "<br/>";

echo "stok: ". $produk->stok;
echo "<br/>";

echo "pajak: ". $pajak . "%";
echo "<br/>";

echo "total harga setelah pajak: Rp. ". $total;

