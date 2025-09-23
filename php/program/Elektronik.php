<?php
// Class Elektronik
class Elektronik {
    private $id;
    private $nama;
    private $harga;
    private $image; 

    // Constructor
    public function __construct($id = "", $nama = "", $harga = 0, $image = "") {
        $this->id = $id;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->image = $image;
    }

    // Getter & Setter for id, nama, harga, image
    public function setId($id) { $this->id = $id; }
    public function getId() { return $this->id; }

    public function setNama($nama) { $this->nama = $nama; }
    public function getNama() { return $this->nama; }

    public function setHarga($harga) { $this->harga = $harga; }
    public function getHarga() { return $this->harga; }

    public function setImage($image) { $this->image = $image; }
    public function getImage() { return $this->image; }
}
