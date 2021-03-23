<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="mainrapot.php" method="POST">
            <table style="border:0;">
            <tr>
                <td>Masukkan NIM :</td>
                <td>
                    <input type="text" name="nim" id="" placeholder="xxx.yyyy.zzzzz " required>
                </td>
            </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>
                        <label for="prodi"></label>
                        <select name="prodi" value="prodi" required>
                            <option value="">pilih jurusan...</option>
                            <option value ="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Broadcast Radio">Broadcasting</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td><input type="number" name="tugas" id="tugas" min="0" max="100"></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td><input type="number" name="uts" id="uts" min="0" max="100"></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td><input type="number" name="uas" id="uas" min="0" max="100"></td>
                </tr>
                <tr>
                    <td>Catatan Khusus</td>
                    <td>
                        <input type="checkbox" name="catatan1" id="catatan1" value="Kehadiran >= 70 %">Kehadiran >= 70 % <br>
                        <input type="checkbox" name="catatan2" id="catatan2" value="Interaktif dikelas">Interaktif dikelas <br>
                        <input type="checkbox" name="catatan3" id="catatan3" value="Tidak terlambat mengumpulkan tugas">Tidak terlambat mengumpulkan tugas
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>