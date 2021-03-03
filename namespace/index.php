<?php
require_once 'App/init.php';

// // membuat studi kasus produk dengan method dengan memasukan nilai kedalam parameter
// $produk1 = new Anime("Attack On Titan", "Hajime Ishimiya", "Kodansha", 300000, 100);
// // studi kasus game 
// $produk2 = new Game("Assassin Creed", "Corey May", "Ubisoft", 500000, 50);

// $cetakProduk = new CetakInfoProduk;
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
