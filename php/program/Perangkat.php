<?php
// Class Perangkat extends Elektronik
class Perangkat extends Elektronik {
    private $merek;
    private $kode_sku;
    private $garansi;

    // Constructor
    public function __construct($id = "", $nama = "", $harga = 0, $image = "", $merek = "", $kode_sku = "", $garansi = 0) {
        parent::__construct($id, $nama, $harga, $image);
        $this->merek = $merek;
        $this->kode_sku = $kode_sku;
        $this->garansi = $garansi;
    }

    // Getter & Setter for merek, kode_sku, garansi
    public function setMerek($merek) { $this->merek = $merek; }
    public function getMerek() { return $this->merek; }

    public function setKodeSKU($kode_sku) { $this->kode_sku = $kode_sku; }
    public function getKodeSKU() { return $this->kode_sku; }

    public function setGaransi($garansi) { $this->garansi = $garansi; }
    public function getGaransi() { return $this->garansi; }
}