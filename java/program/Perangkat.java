// Class Perangkat inheriting from Elektronik
public class Perangkat extends Elektronik {
    private String merek;
    private String kode_sku;
    int garansi; // in months

    // Constructor without parameters
    public Perangkat() {
        super();
        this.merek = "";
        this.kode_sku = "";
        this.garansi = 0;
    }

    // Constructor with parameters
    public Perangkat(String id, String nama, int harga, String merek, String kode_sku, int garansi) {
        super(id, nama, harga);
        this.merek = merek;
        this.kode_sku = kode_sku;
        this.garansi = garansi;
    }

    // Getter & Setter for merek
    public String getMerek() {return merek;}
    public void setMerek(String merek) {this.merek = merek;}

    // Getter & Setter for kode_sku
    public String getKodeSKU() {return kode_sku;}
    public void setKodeSKU(String kode_sku) {this.kode_sku = kode_sku;}

    // Getter & Setter for garansi
    public int getGaransi() {return garansi;}
    public void setGaransi(int garansi) {this.garansi = garansi;}
}