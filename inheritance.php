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
        $waktuMain;

    // membuat method construct
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    // membuat method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    // method untuk menampilkan perbedaan antara game dan anime
    public function getInfoProduk()
    {
        //Anime : Attack On Titan | Hajime Ishimiya, Kodansha (Rp. 300000) - 100 halaman
        $str = "{$this->judul} | {$this->getLabel()} (Rp .{$this->harga})";
        return $str;
    }
}

// melakukan inheritance dari parent class produk ke anime dan game
class Anime extends Produk
{
    public function getInfoProduk()
    {
        $str = "Anime : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) = {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp .{$this->harga}) ~ {$this->waktuMain}";
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
$produk1 = new Anime("Attack On Titan", "Hajime Ishimiya", "Kodansha", 300000, 100, 0);

// studi kasus game 
$produk2 = new Game("Assassin Creed", "Corey May", "Ubisoft", 500000, 0, 100);

// panggil method getInfoLengkap
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
