<?php 

// melakukan inheritance dari parent class produk ke anime dan game
class Anime extends Produk implements InfoProduk
{
    public $jmlHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman); // overriding

        $this->jmlHalaman = $jmlHalaman;
    }


    public function getInfo()
    {
        //Anime : Attack On Titan | Hajime Ishimiya, Kodansha (Rp. 300000) - 100 halaman
        $str = "{$this->judul} | {$this->getLabel()} (Rp .{$this->harga})";
        return $str;
    }


    public function getInfoProduk()
    {
        $str = "Anime : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman"; //overriding pada method getInfoProduk
        return $str;
    }
}
