#include "Perangkat.cpp"

// Class laptop (inherit from Perangkat)
class Laptop : public Perangkat
{
private:
    string cpu;
    string gpu;
    int ram;
    int storage;

public:
    // Constructor without param
    Laptop()
    {
        cpu = "";
        gpu = "";
        ram = 0;
        storage = 0;
    }

    // Constructor with parameter
    Laptop(string id, string nama, int harga, string merek, string kode_sku, int garansi, string cpu, string gpu, int ram, int storage)
    {
        setId(id);
        setNama(nama);
        setHarga(harga);
        setMerek(merek);
        setKodeSKU(kode_sku);
        setGaransi(garansi);
        this->cpu = cpu;
        this->gpu = gpu;
        this->ram = ram;
        this->storage = storage;
    }

    // Getter & setter for cpu
    void setCpu(string cpu){this->cpu = cpu;}
    string getCpu(){return cpu;}

    // Getter & setter for gpu
    void setGpu(string gpu){this->gpu = gpu;}
    string getGpu(){return gpu;}

    // Getter & setter for ram
    void setRam(int ram){this->ram = ram;}
    int getRam(){return ram;}

    // Getter & setter for storage
    void setStorage(int storage){this->storage = storage;}
    int getStorage(){return storage;}

    // Destructor
    ~Laptop(){}
};