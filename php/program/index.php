<?php
require_once "Elektronik.php";
require_once "Perangkat.php";
require_once "Laptop.php";
session_start();

if (isset($_GET['reset'])) {
    session_destroy();       // clear all session data
    header("Location: main.php"); // reload page
    exit;
}

// Initialize laptop list in session if not already set
if (!isset($_SESSION['laptop_list']) || !is_array($_SESSION['laptop_list']) || count($_SESSION['laptop_list']) == 0) {
    $_SESSION['laptop_list'] = [
        new Laptop("L001", "ROG Zephyrus G14", 32999000, "images/rogg14.png", "Asus", "GA403UH-R9N55OL6G-HM", 24, "AMD Ryzen 9 270", "NVIDIA GeForce RTX 5050", 32, 1024),
        new Laptop("L002", "Legion 5i", 30799000, "images/legion5i.png", "Lenovo", "15IRX10-83F00064ID", 36,"Intel Core Ultra 7 255HX", "NVIDIA GeForce RTX 5070", 32, 512),
        new Laptop("L003", "Predator Helios Neo 16", 16899000, "images/neo16.png", "Acer", "PHN16-72-53KS", 36, "Intel Core i5 14500HX", "NVIDIA GeForce RTX 4050", 16, 512),
        new Laptop("L004", "LOQ 15", 16299000, "images/loq15.webp", "Lenovo", "15IRX10-83JE0052ID", 36, "Intel Core i5 13450HX", "NVIDIA GeForce RTX 5050", 12, 512),
        new Laptop("L005", "OMEN 16", 23399000, "images/omen16.jpg", "HP", "AP0176AX", 24, "AMD Ryzen AI 7 350", "NVIDIA GeForce RTX 5060", 16, 1024),
    ];
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id       = $_POST['id'];
    $nama     = $_POST['nama'];
    $harga    = (int)$_POST['harga'];
    $merek    = $_POST['merek'];
    $kode_sku = $_POST['kode_sku'];
    $garansi  = (int)$_POST['garansi'];
    $cpu      = $_POST['cpu'];
    $gpu      = $_POST['gpu'];
    $ram      = (int)$_POST['ram'];
    $storage  = (int)$_POST['storage'];

    // Handle image upload
    $imagePath = "";
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = "images/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $filename = uniqid() . "_" . basename($_FILES['image']['name']);
        $targetFile = $uploadDir . $filename;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $imagePath = $targetFile;
        }
    }

    // Add new laptop to session list (make sure imagePath is 4th parameter)
    $_SESSION['laptop_list'][] = new Laptop($id, $nama, $harga, $imagePath, $merek, $kode_sku, $garansi, $cpu, $gpu, $ram, $storage);

    // Redirect to avoid form resubmission
    header("Location: index.php");
    exit;
}

$laptops = $_SESSION['laptop_list'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Laptop</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-bottom: 30px; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: left; }
        th { background: #f4f4f4; }
        img { max-width: 100px; height: auto; display: block; }
        form { max-width: 600px; }
        input, button { padding: 8px; margin: 5px 0; width: 100%; }
        button { cursor: pointer; background: #007BFF; color: white; border: none; }
        button:hover { background: #0056b3; }
    </style>
</head>
<body>
    <a href="?reset=1" onclick="return confirm('Reset all data?')">Reset Data</a>
    <h2>Tambah Laptop Baru</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="id" placeholder="ID" required>
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="number" name="harga" placeholder="Harga" required>
        <input type="text" name="merek" placeholder="Merek" required>
        <input type="text" name="kode_sku" placeholder="Kode SKU" required>
        <input type="number" name="garansi" placeholder="Garansi (bulan)" required>
        <input type="text" name="cpu" placeholder="CPU" required>
        <input type="text" name="gpu" placeholder="GPU" required>
        <input type="number" name="ram" placeholder="RAM (GB)" required>
        <input type="number" name="storage" placeholder="Storage (GB)" required>
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Tambah</button>
    </form>
    <h2>Daftar Laptop</h2>
    <table>
        <tr>
            <th>Gambar</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Merek</th>
            <th>Kode SKU</th>
            <th>Garansi</th>
            <th>CPU</th>
            <th>GPU</th>
            <th>RAM</th>
            <th>Storage</th>
        </tr>
        <?php if (!empty($laptops)): ?>
            <?php foreach ($laptops as $l): ?>
            <tr>
                <td>
                    <?php if ($l->getImage() && file_exists($l->getImage())): ?>
                        <img src="<?= htmlspecialchars($l->getImage()) ?>" alt="<?= htmlspecialchars($l->getNama()) ?>">
                    <?php else: ?>
                        No Image
                    <?php endif; ?>
                </td>
                <td><?= htmlspecialchars($l->getId()) ?></td>
                <td><?= htmlspecialchars($l->getNama()) ?></td>
                <td><?= number_format($l->getHarga(), 0, ',', '.') ?></td>
                <td><?= htmlspecialchars($l->getMerek()) ?></td>
                <td><?= htmlspecialchars($l->getKodeSKU()) ?></td>
                <td><?= htmlspecialchars($l->getGaransi()) ?> bln</td>
                <td><?= htmlspecialchars($l->getCpu()) ?></td>
                <td><?= htmlspecialchars($l->getGpu()) ?></td>
                <td><?= htmlspecialchars($l->getRam()) ?> GB</td>
                <td><?= htmlspecialchars($l->getStorage()) ?> GB</td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="11">Belum ada data</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>
