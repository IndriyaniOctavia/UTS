<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    table{
        background-color:#FAFAD2;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Indriyani Octavia</title>
</head>
<body>

    <form method="POST" name="frmpost" action="">
        <table align="center" border="3" cellpadding="2" cellspacing="5">
            <tr align="center">
                <td>
                    <h2><b><u>Silahkan Masukkan Data</u></b></h2>
                    <h2><b><u>Pasien Covid 19</u></b></h2>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="500" border=0 cellpadding="0" cellspacing="10" align="center">
                        <tr>
                            <td>Wilayah</td>
                            <td> : </td>
                            <td>  
                                <select name="wilayah" id="wilayah">
                                    <option value="">---- Pilih Wilayah ----</option>
                                    <option value="DKI Jakarta">DKI Jakarta</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Banten">Banten</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Positif</td>
                            <td> : </td>
                            <td><input type="text" name="positif" size="40"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Dirawat</td>
                            <td> : </td>
                            <td><input type="text" name="rawat" size="40"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Sembuh</td>
                            <td> : </td>
                            <td><input type="text" name="sembuh" size="40"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Meninggal</td>
                            <td> : </td>
                            <td><input type="text" name="meninggal" size="40"></td>
                        </tr>
                        <tr>
                            <td>Nama Operator</td>
                            <td> : </td>
                            <td><input type="text" name="nama" size="40"></td>
                        </tr>
                        <tr>
                            <td>Nim Mahasiswa</td>
                            <td> : </td>
                            <td><input type="text" name="nim" size="40"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center"><input type="submit" name="simpan" value="Simpan"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>
<br><br><br>
<center>
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    <?php if (isset($_POST['simpan'])) {
        echo '<h3>Data Pemantaun Covid19 Wilayah ' . $_POST['wilayah'] . ' <br> Per '.date('d F Y H:i:s').' <br> '. $_POST['nama'] .' / '. $_POST['nim'] .'</h3>';
        echo '<table border="1" cellpadding="10" cellspacing="0">';
        echo '<thead>';
        echo '<tr>
                <th>Positif</th>
                <th>Dirawat</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
                </tr>';
        echo ' </thead>';
        echo '<tbody>
                <td>'.$_POST['positif'] .'</td>
                <td>'. $_POST['rawat'] .'</td>
                <td>'. $_POST['sembuh'] .'</td>
                <td>'. $_POST['meninggal'] .'</td>
              </tbody>';
        echo '</table>';
    } ?>
</center>
</body>
</html>

