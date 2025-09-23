from Perangkat import Perangkat

### Inheritance from Perangkat class
class Laptop(Perangkat):
    ## Constructor
    def __init__(self, id="", nama="", harga=0, merek="", kode_sku="", garansi=0, cpu="", gpu="", ram=0, storage=0):
        super().__init__(id, nama, harga, merek, kode_sku, garansi)
        self.cpu = cpu
        self.gpu = gpu
        self.ram = ram
        self.storage = storage

    ## Setter and getter for cpu
    def set_cpu(self, cpu): self.cpu = cpu  
    def get_cpu(self): return self.cpu

    ## Setter and getter for gpu
    def set_gpu(self, gpu): self.gpu = gpu
    def get_gpu(self): return self.gpu

    ## Setter and getter for ram
    def set_ram(self, ram): self.ram = ram
    def get_ram(self): return self.ram

    ## Setter and getter for storage
    def set_storage(self, storage): self.storage = storage
    def get_storage(self): return self.storage



