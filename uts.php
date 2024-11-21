<?php
// Class Hewan sebagai parent class
class Hewan
{
    public $nama;
    public $tinggi;
    protected $berat;
    protected $suara;

    public function __construct($nama, $tinggi, $berat, $suara)
    {
        $this->nama = $nama;
        $this->tinggi = $tinggi;
        $this->berat = $berat;
        $this->suara = $suara;
    }

    // Method untuk mengakses berat
    public function getBerat()
    {
        return $this->berat !== null ? $this->berat : "Berat tidak diketahui";
    }

    // Method untuk mengakses suara
    public function getSuara()
    {
        return $this->suara !== null ? $this->suara : "Tidak memiliki suara";
    }
}

// Class BurungMuraiBatu sebagai child class
class BurungMuraiBatu extends Hewan
{
    public function __construct($nama, $tinggi, $berat = null, $suara = null)
    {
        parent::__construct($nama, $tinggi, $berat, $suara);
    }

    // Method unik untuk Burung Murai Batu
    public function berkicau()
    {
        return "Burung Murai Batu bernama {$this->nama} berkicau dengan suara: {$this->getSuara()}.";
    }

    public function terbang()
    {
        return "Burung Murai Batu bernama {$this->nama} sedang terbang.";
    }
}

// Contoh penggunaan class
$burung = new BurungMuraiBatu("Si Cantik", 15, 0.2, "Cuit cuit");
echo $burung->getSuara(); // Output: Cuit cuit
echo "<br>";
echo $burung->getBerat(); // Output: 0.2
echo "<br>";
echo $burung->berkicau(); // Output: Burung Murai Batu bernama Si Cantik berkicau dengan suara: Cuit cuit.
echo "<br>";
echo $burung->terbang(); // Output: Burung Murai Batu bernama Si Cantik sedang terbang
echo "<br>";
// Contoh Burung Murai Batu tanpa suara
$burung2 = new BurungMuraiBatu("Si Pemalu", 12, 0.18);
echo $burung2->getSuara(); // Output: Tidak memiliki suara
echo "\n";
echo $burung2->getBerat(); // Output: 0.18
echo "\n";
echo $burung2->berkicau(); // Output: Burung Murai Batu bernama Si Pemalu berkicau dengan suara: Tidak memiliki suara.
echo "\n";
echo $burung2->terbang(); // Output: Burung Murai Batu bernama Si Pemalu sedang terbang
