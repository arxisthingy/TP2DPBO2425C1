<?php

// Class Laptop extends Perangkat
class Laptop extends Perangkat {
    private $cpu;
    private $gpu;
    private $ram;
    private $storage;

    // Constructor
   public function __construct($id = "", $nama = "", $harga = 0,  $image = "", $merek = "", $kode_sku = "", $garansi = 0, $cpu = "", $gpu = "", $ram = 0, $storage = 0) {
        parent::__construct($id, $nama, $harga, $image, $merek, $kode_sku, $garansi);
        $this->cpu = $cpu;
        $this->gpu = $gpu;
        $this->ram = $ram;
        $this->storage = $storage;
    }

    // Getter & Setter for cpu, gpu, ram, storage
    public function setCpu($cpu) { $this->cpu = $cpu; }
    public function getCpu() { return $this->cpu; }

    public function setGpu($gpu) { $this->gpu = $gpu; }
    public function getGpu() { return $this->gpu; }

    public function setRam($ram) { $this->ram = $ram; }
    public function getRam() { return $this->ram; }

    public function setStorage($storage) { $this->storage = $storage; }
    public function getStorage() { return $this->storage; }
}
