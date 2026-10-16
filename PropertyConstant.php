<?php

class Produk {

    //property
    public string $kode; 
    public string $nama; 
    public int $harga; 
    public int $stok; 

    //constanta
    public const PAJAK = 0.11;

    public function pajak() {
        return self::PAJAK * 100; //11%
    }
    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

//object
$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'laptop';
$produk->harga = 10000000;
$produk->stok = 5;

//hasil
echo "produk: ". $produk->nama;
echo "<br/>";

echo "harga: Rp. ". $produk->harga;
echo "<br/>";

echo "stok: ". $produk->stok;
echo "<br/>";

echo "pajak: ". $produk->pajak() . "%";
echo "<br/>";

echo "total harga setelah pajak:. Rp". $produk->total();

