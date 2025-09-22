#include "Elektronik.cpp"

// Class perangkat (inherit from Elektronik)
class Perangkat : public Elektronik
{
private:
    string merek;
    string kode_sku;
    int garansi;

public:
    // Constructor without param
    Perangkat()
    {
        merek = "";
        kode_sku = "";
        garansi = 0;
    }

    // Constructor with parameter
    Perangkat(string merek, string kode_sku, int garansi)
    {
        this->merek = merek;
        this->kode_sku = kode_sku;
        this->garansi = garansi;
    }

    // Getter & setter for merek
    void setMerek(string merek){this->merek = merek;}
    string getMerek(){return merek;}

    // Getter & setter for kode SKU
    void setKodeSKU(string kode_sku){this->kode_sku = kode_sku;}
    string getKodeSKU(){return kode_sku;}

    // Getter & setter for garansi
    void setGaransi(int garansi){this->garansi = garansi;}
    int getGaransi(){return garansi;}

    // Destructor
    ~Perangkat(){}
};