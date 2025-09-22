// Class Laptop inheriting from Perangkat
public class Laptop extends Perangkat {
    private String cpu;
    private String gpu;
    private int ram; // in GB
    private int storage; // in GB

    // Constructor without parameters
    public Laptop() {
        super();
        this.cpu = "";
        this.gpu = "";
        this.ram = 0;
        this.storage = 0;
    }

    // Constructor with parameters
    public Laptop(String id, String nama, int harga, String merek, String kode_sku, int garansi, String cpu, String gpu, int ram, int storage) {
        super(id, nama, harga, merek, kode_sku, garansi);
        this.cpu = cpu;
        this.gpu = gpu;
        this.ram = ram;
        this.storage = storage;
    }

    // Getter & Setter for cpu
    public String getCpu() {return cpu;}
    public void setCpu(String cpu) {this.cpu = cpu;}

    // Getter & Setter for gpu
    public String getGpu() {return gpu;}
    public void setGpu(String gpu) {this.gpu = gpu;}

    // Getter & Setter for ram
    public int getRam() {return ram;}
    public void setRam(int ram) {this.ram = ram;}

    // Getter & Setter for storage
    public int getStorage() {return storage;}
    public void setStorage(int storage) {this.storage = storage;}
}