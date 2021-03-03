<?php
// membuat implements 
interface InfoProduk
{
    public function getInfoProduk();
}

// membuat class suatu produk
abstract class Produk
{
    // menambahkan property dan memberi value default
    protected $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

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

    abstract public function getInfo();

    // membuat setter dan getter pada masing-masing property yang dibuat private
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}

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

class Game extends Produk implements InfoProduk
{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);

        $this->waktuMain = $waktuMain;
    }


    public function getInfo()
    {
        //Anime : Attack On Titan | Hajime Ishimiya, Kodansha (Rp. 300000) - 100 halaman
        $str = "{$this->judul} | {$this->getLabel()} (Rp .{$this->harga})";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}


// mendefinisikan informasi cetak produk dengan membuat class baru
class CetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    // mendefinisikan method cetak yang isi parameternya adalah objek dari class produk
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

// membuat studi kasus produk dengan method dengan memasukan nilai kedalam parameter
$produk1 = new Anime("Attack On Titan", "Hajime Ishimiya", "Kodansha", 300000, 100);
// studi kasus game 
$produk2 = new Game("Assassin Creed", "Corey May", "Ubisoft", 500000, 50);

$cetakProduk = new CetakInfoProduk;
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
