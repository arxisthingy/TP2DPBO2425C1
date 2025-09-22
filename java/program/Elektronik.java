// Class Elektronik
public class Elektronik {
    private String id;
    private String nama;
    private int harga;

    // Default constructor  
    public Elektronik() {
        this.id = "";
        this.nama = "";
        this.harga = 0;
    }
    
    // Constructor with parameters
    public Elektronik(String id, String nama, int harga)
    {
        this.id = id;
        this.nama = nama;
        this.harga = harga;
    }

    // Getter & Setter for id
    public String getId() {return id;}
    public void setId(String id) {this.id = id;}

    // Getter & Setter for nama
    public String getNama() {return nama;}
    public void setNama(String nama) {this.nama = nama;}

    // Getter & Setter for harga
    public int getHarga() {return harga;}
    public void setHarga(int harga) {this.harga = harga;}
}