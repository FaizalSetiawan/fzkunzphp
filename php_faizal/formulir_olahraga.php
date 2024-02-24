<!-- formulir_pendaftaran.php -->
<form action="proses-pendaftaran-olahraga.php" method="POST">
    <div>
        <label>Nama Lengkap</label> <br>
        <input type="text" name="nama" required>
    </div>
    <div>
        <label>Jenis Kelamin</label> <br>
        <select name="jenis_kelamin" required>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
    </div>
    <div>
        <label>Tanggal Lahir</label> <br>
        <input type="date" name="tanggal_lahir" required>
    </div>
    <div>
        <label>Pilihan Kategori Olahraga</label> <br>
        <input type="radio" name="olahraga" value="Sepak Bola" required> Sepak Bola <br>
        <input type="radio" name="olahraga" value="Bulu Tangkis"> Bulu Tangkis <br>
        <input type="radio" name="olahraga" value="Renang"> Renang <br>
    </div>
    <div>
        <label>Pilihan Kelas</label> <br>
        <input type="checkbox" name="kelas" value="Pemula"> Pemula <br>
        <input type="checkbox" name="kelas" value="Menengah"> Menengah <br>
        <input type="checkbox" name="kelas" value="Lanjutan"> Lanjutan <br>
    </div>
    <div>
        <label>Kemampuan Fisik</label> <br>
        <textarea name="fisik" cols="30" rows="5" required></textarea><br>
    </div>
    <div>
        <label>Pembayaran</label><br>
        <select name="pembayaran" required>
            <option value="Transfer Bank">Transfer Bank</option>
            <option value="Kartu Kredit">Kartu Kredit</option>
        </select>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
