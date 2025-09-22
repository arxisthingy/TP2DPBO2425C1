#include <bits/stdc++.h>
using namespace std;

// Class Elektronik
class Elektronik
{
private:
    string id;
    string nama;
    int harga;

public:
    // Constructor without parameter
    Elektronik()
    {
        id = "";
        nama = "";
        harga = 0;
    }

    // Constructor with parameter
    Elektronik(string id, string nama, int harga)
    {
        this->id = id;
        this->nama = nama;
        this->harga = harga;
    }

    // Getter and setter for id
    void setId(string id){this->id = id;}
    string getId(){return id;}

    // Getter and setter for nama
    void setNama(string nama){this->nama = nama;}
    string getNama(){return nama;}

    // Getter and setter for harga
    void setHarga(int harga){this->harga = harga;}
    int getHarga(){return harga;}

    // Destructor
    ~Elektronik(){}
};