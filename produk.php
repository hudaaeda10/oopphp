<?php

// membuat class suatu produk
class Produk
{
    // menambahkan property dan memberi value default
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    // membuat method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// membuat instance sebuah objek
// $produk1 = new Produk();
// // menimpa data devault
// $produk1->judul = "Naruto";
// var_dump($produk1);

// menambah property setelah instance
// $produk2 = new Produk();
// $produk2->nambahPropery = "property";
// var_dump($produk2);

// membuat studi kasus produk dengan method
$produk3 = new Produk();
$produk3->judul = "Attack On Titan";
$produk3->penulis = "Hajime Ishimiya";
$produk3->penerbit = "Kodansha";
$produk3->harga = "300000";
// panggil methodnya
// echo  $produk3->getLabel();

// studi kasus game 
$produk4 = new Produk();
$produk4->judul = "Assassin Creed";
$produk4->penulis = "Corey May";
$produk4->penerbit = "Ubisoft";
$produk4->harga = "500000";


// pangggil methode dengan masing-masing objek
echo "Anime : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
