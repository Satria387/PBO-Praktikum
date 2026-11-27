<?php

namespace Pbo\MarketPlace;

require_once('./PropertyConstant.php');

use Pbo\MarketPlace\Produk;

class Jasa {

    use Produk;
    public function payment($tipe) {

            return match($tipe) {
                "virtual" => "virtual account",
                "qris" => "QRIS",
                default => "pembayaran hanya bisa va dan qris"
            };

    }

}