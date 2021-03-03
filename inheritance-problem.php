<?php

// membuat class suatu produk
class Produk
{
    // menambahkan property dan memberi value default
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;

    // membuat method construct
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    // membuat method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    // method untuk menampilkan perbedaan antara game dan anime
    public function getInfoLengkap()
    {
        //Anime : Attack On Titan | Hajime Ishimiya, Kodansha (Rp. 300000) - 100 halaman
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp .$this->harga)}";
        if ($this->tipe == "Anime") {
            $str .= " - {$this->jmlHalaman} Halaman. ";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
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
$produk1 = new Produk("Attack On Titan", "Hajime Ishimiya", "Kodansha", 300000, 100, 0, "Anime");

// studi kasus game 
$produk2 = new Produk("Assassin Creed", "Corey May", "Ubisoft", 500000, 0, 100, "Game");

// panggil method getInfoLengkap
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
