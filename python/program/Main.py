from Laptop import Laptop

## Function to display menu
def show_menu():
    print("-----------MENU-----------")
    print("1. Tampilkan semua laptop")
    print("2. Tambahkan data laptop baru")
    print("0. Keluar dari program")

## Function to add a new laptop
def add_laptop():
    print("Tambah data laptop baru")
    id = input("ID: ")
    nama = input("Nama: ")
    harga = int(input("Harga: "))
    merek = input("Merek: ")
    kode_sku = input("Kode SKU: ")
    garansi = int(input("Garansi (bulan): "))
    cpu = input("CPU: ")
    gpu = input("GPU: ")
    ram = int(input("RAM (GB): "))
    storage = int(input("Storage (GB): "))

    print("Data laptop berhasil ditambahkan!")
    return Laptop(id, nama, harga, merek, kode_sku, garansi, cpu, gpu, ram, storage)

## Function to display all laptops in tabular format
def show_laptop(laptops):
    if not laptops:
        print("Data laptop kosong!")
        return

    # Define headers and extract data
    headers = [
        "ID", "Nama", "Harga", "Merek", "Kode SKU", "Garansi", "CPU", "GPU", "RAM", "Storage"
    ]
    rows = []
    for l in laptops:
        rows.append([
            l.get_id(),
            l.get_nama(),
            str(l.get_harga()),
            l.get_merek(),
            l.get_kode_sku(),
            f"{l.get_garansi()} bln",
            l.get_cpu(),
            l.get_gpu(),
            f"{l.get_ram()} GB",
            f"{l.get_storage()} GB"
        ])

    # Calculate max width for each column
    col_widths = [len(h) for h in headers]
    for row in rows:
        for i, cell in enumerate(row):
            col_widths[i] = max(col_widths[i], len(cell))

    # Helper to print border
    def print_border():
        print("+" + "+".join("-" * (w + 2) for w in col_widths) + "+")

    # Print header
    print_border()
    print("|" + "|".join(f" {headers[i].ljust(col_widths[i])} " for i in range(len(headers))) + "|")
    print_border()

    # Print rows
    for row in rows:
        print("|" + "|".join(f" {row[i].ljust(col_widths[i])} " for i in range(len(row))) + "|")
    print_border()

## Main function
def main():
    ## Sample data
    laptops = [
        Laptop("L001", "ROG Zephyrus G14", 32999000, "Asus", "GA403UH-R9N55OL6G-HM", 24, "AMD Ryzen 9 270", "NVIDIA GeForce RTX 5050", 32, 1024),
        Laptop("L002", "Legion 5i", 30799000, "Lenovo", "15IRX10-83F00064ID", 36, "Intel Core Ultra 7 255HX", "NVIDIA GeForce RTX 5070", 32, 512),
        Laptop("L003", "Predator Helios Neo 16", 16899000, "Acer", "PHN16-72-53KS", 36, "Intel Core i5 14500HX", "NVIDIA GeForce RTX 4050", 16, 512),
        Laptop("L004", "LOQ 15", 16299000, "Lenovo", "15IRX10-83JE0052ID", 36, "Intel Core i5 13450HX", "NVIDIA GeForce RTX 5050", 12, 512),
        Laptop("L005", "OMEN 16", 23399000, "HP", "AP0176AX", 24, "AMD Ryzen AI 7 350", "NVIDIA GeForce RTX 5060", 16, 1024),
    ]

    ## Main loop
    while True:
        show_menu()
        pilihan = input("Masukkan input >> ") ## User input

        ## Handle user input
        if pilihan == "1":
            show_laptop(laptops)
        elif pilihan == "2":
            laptops.append(add_laptop())
        elif pilihan == "0":
            print("Exiting program")
            break
        else:
            print("Input tidak valid")

if __name__ == "__main__":
    main()
