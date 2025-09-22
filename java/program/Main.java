import java.util.*;

public class Main {
    // Method to display menu options
    public static void showMenu() {
        System.out.println("-----------MENU-----------");
        System.out.println("1. Tampilkan semua laptop");
        System.out.println("2. Tambahkan data laptop baru");
        System.out.println("0. Keluar dari program");
    }

    // Method to add a new Laptop
    public static Laptop addLaptop(Scanner sc) {
        // input
        System.out.println("Tambah data laptop baru");
        System.out.print("ID: ");
        String id = sc.nextLine();
        System.out.print("Nama: ");
        String nama = sc.nextLine();
        System.out.print("Harga: ");
        int harga = Integer.parseInt(sc.nextLine());
        System.out.print("Merek: ");
        String merek = sc.nextLine();
        System.out.print("Kode SKU: ");
        String kodeSKU = sc.nextLine();
        System.out.print("Garansi (bulan): ");
        int garansi = Integer.parseInt(sc.nextLine());
        System.out.print("CPU: ");
        String cpu = sc.nextLine();
        System.out.print("GPU: ");
        String gpu = sc.nextLine();
        System.out.print("RAM (GB): ");
        int ram = Integer.parseInt(sc.nextLine());
        System.out.print("Storage (GB): ");
        int storage = Integer.parseInt(sc.nextLine());
        
        System.out.println("Data laptop berhasil ditambahkan!"); // Success message
        return new Laptop(id, nama, harga, merek, kodeSKU, garansi, cpu, gpu, ram, storage); // Return new Laptop object
    }

    // Method to display all laptops
    public static void showLaptop(List<Laptop> list) {
        if (list.isEmpty()) {
            System.out.println("Data laptop kosong!");
            return;
        }

        // Headers
        String[] headers = {
            "ID", "Nama", "Harga", "Merek", "Kode SKU", "Garansi", "CPU", "GPU", "RAM", "Storage"
        };
        int cols = headers.length;
        int[] widths = new int[cols];

        // Set initial widths to header lengths
        for (int i = 0; i < cols; i++) {
            widths[i] = headers[i].length();
        }

        // Calculate max width for each column
        for (Laptop l : list) {
            widths[0] = Math.max(widths[0], l.getId().length());
            widths[1] = Math.max(widths[1], l.getNama().length());
            widths[2] = Math.max(widths[2], String.valueOf(l.getHarga()).length());
            widths[3] = Math.max(widths[3], l.getMerek().length());
            widths[4] = Math.max(widths[4], l.getKodeSKU().length());
            widths[5] = Math.max(widths[5], (l.getGaransi() + " bln").length());
            widths[6] = Math.max(widths[6], l.getCpu().length());
            widths[7] = Math.max(widths[7], l.getGpu().length());
            widths[8] = Math.max(widths[8], (l.getRam() + " GB").length());
            widths[9] = Math.max(widths[9], (l.getStorage() + " GB").length());
        }

        // Helper to print border
        StringBuilder border = new StringBuilder("+");
        for (int w : widths) {
            border.append("-".repeat(w + 2)).append("+");
        }
        System.out.println(border);

        // Print header row
        System.out.print("|");
        for (int i = 0; i < cols; i++) {
            System.out.printf(" %-" + widths[i] + "s |", headers[i]);
        }
        System.out.println();

        // Print header separator
        System.out.println(border);

        // Print data rows
        for (Laptop l : list) {
            System.out.print("| ");
            System.out.printf("%-" + widths[0] + "s | ", l.getId());
            System.out.printf("%-" + widths[1] + "s | ", l.getNama());
            System.out.printf("%-" + widths[2] + "d | ", l.getHarga());
            System.out.printf("%-" + widths[3] + "s | ", l.getMerek());
            System.out.printf("%-" + widths[4] + "s | ", l.getKodeSKU());
            System.out.printf("%-" + widths[5] + "s | ", l.getGaransi() + " bln");
            System.out.printf("%-" + widths[6] + "s | ", l.getCpu());
            System.out.printf("%-" + widths[7] + "s | ", l.getGpu());
            System.out.printf("%-" + widths[8] + "s | ", l.getRam() + " GB");
            System.out.printf("%-" + widths[9] + "s |", l.getStorage() + " GB");
            System.out.println();
        }

        // Print bottom border
        System.out.println(border);
    }
    
    // Main method
    public static void main(String[] args) {
        try (Scanner sc = new Scanner(System.in)) {
            List<Laptop> list = new ArrayList<>();
            
            // Sample data
            list.add(new Laptop("L001", "ROG Zephyrus G14", 32999000, "Asus", "GA403UH-R9N55OL6G-HM", 24, "AMD Ryzen 9 270", "NVIDIA GeForce RTX 5050", 32, 1024));
            list.add(new Laptop("L002", "Legion 5i", 30799000, "Lenovo", "15IRX10-83F00064ID", 36, "Intel Core Ultra 7 255HX", "NVIDIA GeForce RTX 5070", 32, 512));
            list.add(new Laptop("L003", "Predator Helios Neo 16", 16899000, "Acer", "PHN16-72-53KS", 36, "Intel Core i5 14500HX", "NVIDIA GeForce RTX 4050", 16, 512));
            list.add(new Laptop("L004", "LOQ 15", 16299000, "Lenovo", "15IRX10-83JE0052ID", 36, "Intel Core i5 13450HX", "NVIDIA GeForce RTX 5050", 12, 512));
            list.add(new Laptop("L005", "OMEN 16", 23399000, "HP", "AP0176AX", 24, "AMD Ryzen AI 7 350", "NVIDIA GeForce RTX 5060", 16, 1024));
            
            int pilihan; // input 
            do {
                showMenu();
                System.out.print("Masukkan input >> ");
                pilihan = Integer.parseInt(sc.nextLine());
                
                // switch case for menu options
                switch (pilihan) {
                    case 1 -> showLaptop(list); // display all laptops
                    case 2 -> list.add(addLaptop(sc)); // add new laptop
                    case 0 -> System.out.println("Exiting program"); // exit message
                    default -> System.out.println("Input tidak valid"); // invalid input message
                }
            } while (pilihan != 0); // loop until user chooses to exit
        }
    }
}