#include "Laptop.cpp"

void showMenu()
{
    // Show the available menu
        cout << "-----------MENU-----------\n";
        cout << "1. Tampilkan semua laptop\n";
        cout << "2. Tambahkan data laptop baru\n";
        cout << "0. Keluar dari program\n";
}

Laptop addLaptop()
{
    // input variables
    string id, nama, merek, kode_sku, cpu, gpu;
    int harga, garansi, ram, storage;

    // input
    cout << "Tambah data laptop baru";
    cout << "ID: "; cin >> id; cin.ignore();
    cout << "Nama: "; getline(cin, nama);
    cout << "Harga: "; cin >> harga; cin.ignore();
    cout << "Merek: "; getline(cin, merek);
    cout << "Kode SKU: "; getline(cin, kode_sku);
    cout << "Garansi: "; cin >> garansi; cin.ignore();
    cout << "CPU: "; getline(cin, cpu);
    cout << "GPU: "; getline(cin, gpu);
    cout << "RAM (GB): "; cin >> ram; cin.ignore();
    cout << "Storage (GB): "; cin >> storage; cin.ignore();
    Laptop o_laptop = Laptop(id, nama, harga, merek, kode_sku, garansi, cpu, gpu, ram, storage); // create object

    cout << "Data laptop berhasil ditambahkan!" << endl; // success message
    return o_laptop; // return object
}

void showLaptop(vector<Laptop> list)
{
    // Check if list is empty or not
    if (list.empty())
    {
        // if list contains no data
        cout << "Data laptop kosong!" << endl;
        return;
    }

    // Headers
    vector<string> headers = {
        "ID", "Nama", "Harga", "Merek", "Kode SKU", "Garansi", "CPU", "GPU", "RAM", "Storage"
    };

    // Calculate spacing between the headers
    vector<size_t> widths(headers.size());
    for (size_t i = 0; i < headers.size(); ++i)
        widths[i] = headers[i].size();

    // Calculate the spacing between the contents
    for (auto &laptop : list)
    {
        widths[0] = max(widths[0], laptop.getId().size());
        widths[1] = max(widths[1], laptop.getNama().size());
        widths[2] = max(widths[2], to_string(laptop.getHarga()).size());
        widths[3] = max(widths[3], laptop.getMerek().size());
        widths[4] = max(widths[4], laptop.getKodeSKU().size());
        widths[5] = max(widths[5], (to_string(laptop.getGaransi()) + " bln").size());
        widths[6] = max(widths[6], laptop.getCpu().size());
        widths[7] = max(widths[7], laptop.getGpu().size());
        widths[8] = max(widths[8], (to_string(laptop.getRam()) + " GB").size());
        widths[9] = max(widths[9], (to_string(laptop.getStorage()) + " GB").size());
    }

    // Print top border
    cout << "+";
    for (size_t i = 0; i < widths.size(); ++i)
    {
        cout << string(widths[i] + 2, '-') << "+";
    }
    cout << endl;

    // Print header
    cout << "|";
    for (size_t i = 0; i < headers.size(); ++i)
    {
        cout << " " << setw(widths[i]) << left << headers[i] << " |";
    }
    cout << endl;

    // Print header separator
    cout << "+";
    for (size_t i = 0; i < widths.size(); ++i)
    {
        cout << string(widths[i] + 2, '-') << "+";
    }
    cout << endl;

    // Print rows
    for (auto &laptop : list)
    {
        cout << "| " << setw(widths[0]) << left << laptop.getId() << " |"
             << " " << setw(widths[1]) << left << laptop.getNama() << " |"
             << " " << setw(widths[2]) << left << laptop.getHarga() << " |"
             << " " << setw(widths[3]) << left << laptop.getMerek() << " |"
             << " " << setw(widths[4]) << left << laptop.getKodeSKU() << " |"
             << " " << setw(widths[5]) << left << (to_string(laptop.getGaransi()) + " bln") << " |"
             << " " << setw(widths[6]) << left << laptop.getCpu() << " |"
             << " " << setw(widths[7]) << left << laptop.getGpu() << " |"
             << " " << setw(widths[8]) << left << (to_string(laptop.getRam()) + " GB") << " |"
             << " " << setw(widths[9]) << left << (to_string(laptop.getStorage()) + " GB") << " |"
             << endl;
    }

    // Print bottom border
    cout << "+";
    for (size_t i = 0; i < widths.size(); ++i)
    {
        cout << string(widths[i] + 2, '-') << "+";
    }
    cout << endl;
    cout << endl;
}

int main()
{
    vector<Laptop> list; // vector to make list for objects

    // add data
    list.push_back(Laptop("L001", "ROG Zephyrus G14", 32999000, "Asus", "GA403UH-R9N55OL6G-HM", 24, "AMD Ryzen 9 270", "NVIDIA GeForce RTX 5050", 32, 1024));
    list.push_back(Laptop("L002", "Legion 5i", 30799000, "Lenovo", "15IRX10-83F00064ID", 36, "Intel Core Ultra 7 255HX", "NVIDIA GeForce RTX 5070", 32, 512));
    list.push_back(Laptop("L003", "Predator Helios Neo 16", 16899000, "Acer", "PHN16-72-53KS", 36, "Intel Core i5 14500HX", "NVIDIA GeForce RTX 4050", 16, 512));
    list.push_back(Laptop("L004", "LOQ 15", 16299000, "Lenovo", "15IRX10-83JE0052ID", 36, "Intel Core i5 13450HX", "NVIDIA GeForce RTX 5050", 12, 512));
    list.push_back(Laptop("L005", "OMEN 16", 23399000, "HP", "AP0176AX", 24, "AMD Ryzen AI 7 350", "NVIDIA GeForce RTX 5060", 16, 1024));

    // input process
    int pilihan;
    do {
        showMenu(); // show menu
        cout << "Masukkan input >> ";
        cin >> pilihan; // input
        cin.ignore();

        // cases
        if (pilihan == 1)
        {
            // call procedure
            showLaptop(list);
        }
        else if (pilihan == 2)
        {
            // add to list 
            list.push_back(addLaptop());
        }
        else if (pilihan == 0)
        {
            cout << "Exiting program";
        }
        else // case when input is not valid
        {
            cout << "Input tidak valid";
        }
    } while (pilihan != 0); // end loop if input = 0

    return 0;
}