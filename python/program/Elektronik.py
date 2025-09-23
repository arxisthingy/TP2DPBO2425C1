## Class Elektronik
class Elektronik:
    ## Constructor
    def __init__(self, id="", nama="", harga=0):
        self.id = id
        self.nama = nama
        self.harga = harga
    
    ## Setter and getter for id
    def set_id(self, id): self.id = id
    def get_id(self): return self.id

    ## Setter and getter for nama
    def set_nama(self, nama): self.nama = nama
    def get_nama(self): return self.nama

    ## Setter and getter for harga
    def set_harga(self, harga): self.harga = harga
    def get_harga(self): return self.harga