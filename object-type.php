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

// mendefinisikan informasi cetak produk dengan membuat class baru
class CetakInfoProduk
{
    // mendefinisikan method cetak yang isi parameternya adalah objek dari class produk
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->harga})";
        return $str;
    }
}

// membuat studi kasus produk dengan method dengan memasukan nilai kedalam parameter
$produk1 = new Produk("Attack On Titan", "Hajime Ishimiya", "Kodansha", "300000");

// studi kasus game 
$produk2 = new Produk("Assassin Creed", "Cprey May", "Ubisoft", 500000);

// pangggil methode dengan masing-masing objek
echo "Anime : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";



// buat objek dari class CetakInfoProduk dan isinya objek produk
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
