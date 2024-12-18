<?php include 'includes/header.php'; ?>

<h2>Form Pemesanan</h2>
<form action="konfirmasi.php" method="post">
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" required>

    <label for="phone">Nomor Telepon:</label>
    <input type="text" id="phone" name="phone" required>

    <label for="amount">Jumlah Top-Up:</label>
    <input type="number" id="amount" name="amount" required>

    <label for="payment-method">Metode Pembayaran:</label>
    <select id="payment-method" name="payment-method">
        <option value="bank">Transfer Bank</option>
        <option value="e-wallet">E-Wallet</option>
    </select>

    <button type="submit">Konfirmasi Pemesanan</button>
</form>

<?php include 'includes/footer.php'; ?>
