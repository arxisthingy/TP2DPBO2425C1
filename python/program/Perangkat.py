from Elektronik import Elektronik

### Inheritance from Elektronik class
class Perangkat(Elektronik):
    ## Constructor
    def __init__(self, id="", nama="", harga=0, merek="", kode_sku="", garansi=0):
        super().__init__(id, nama, harga)
        self.merek = merek
        self.kode_sku = kode_sku 
        self.garansi = garansi

    ## Setter and getter for merek
    def set_merek(self, merek): self.merek = merek
    def get_merek(self): return self.merek  

    ## Setter and getter for kode_sku
    def set_kode_sku(self, kode_sku): self.kode_sku = kode_sku
    def get_kode_sku(self): return self.kode_sku    

    ## Setter and getter for garansi
    def set_garansi(self, garansi): self.garansi = garansi
    def get_garansi(self): return self.garansi