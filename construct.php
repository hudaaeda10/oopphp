<?php

// membuat class suatu produk
class Produk
{
    // menambahkan property dan memberi value default
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // membuat method construct
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // membuat method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// membuat studi kasus produk dengan method dengan memasukan nilai kedalam parameter
$produk1 = new Produk("Attack On Titan", "Hajime Ishimiya", "Kodansha", "300000");

// panggil methodnya
// echo  $produk3->getLabel();

// studi kasus game 
$produk2 = new Produk("Assassin Creed", "Cprey May", "Ubisoft", 500000);

// pangggil methode dengan masing-masing objek
echo "Anime : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
