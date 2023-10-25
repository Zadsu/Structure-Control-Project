<!DOCTYPE html>
<html>
<head>
    <title>Galeri Rempah-rempah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        h1 {
            text-align: center;
            color: #007bff;
        }

        form {
            text-align: center;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"] {
            padding: 5px;
        }

        input[type="submit"] {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        img {
            display: block;
            margin: 0 auto;
            margin-top: 20px;
            max-width: 150px; 
            height: auto;
            border: 3px solid #007bff; 
        }

        p {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: #444;
        }
    </style>
</head>
<body>

<h1>Galeri Rempah-rempah</h1>

<form method="post" action="">
    <label for="nama_rempah">Masukkan Nama Rempah:</label>
    <input type="text" name="nama_rempah" id="nama_rempah">
    <input type="submit" value="Tampilkan Gambar">
</form>

<?php
if (isset($_POST['nama_rempah'])) {
    $nama_rempah = strtolower($_POST['nama_rempah']);

    if ($nama_rempah == 'kunyit') {
        echo '<img src="kunyit.jpeg" alt="Kunyit">';
        echo '<p style="color: #007bff;">Manfaat Kunyit: Sifat antioksidan dan antiinflamasi pada kunyit membantu mengurangi gejala yang berkaitan dengan masalah kesehatan paru kronis atau jangka panjang.</p>';
    } elseif ($nama_rempah == 'jahe') {
        echo '<img src="jahe.jpeg" alt="Jahe">';
        echo '<p style="color: #ff7f00;">Manfaat Jahe: Jahe mengandung senyawa yang memiliki efek menenangkan, yang mampu mengurangi ketegangan dan stres, faktor-faktor yang seringkali menjadi penyebab gangguan tidur.</p>';
    } elseif ($nama_rempah == 'lada') {
        echo '<img src="lada.jpeg" alt="Lada">';
        echo '<p style="color: #d9534f;">Manfaat Lada: Lada dapat membantu merangsang asam klorida di perut, sehingga tubuh dapat mencerna dan menyerap makanan dengan lebih baik.</p>';
    } elseif ($nama_rempah == 'sereh') {
        echo '<img src="sereh.jpeg" alt="Sereh">';
        echo '<p style="color: #5bc0de;">Manfaat Sereh: Sereh bermanfaat untuk pengobatan penyakit seperti menurunkan demam, meredakan nyeri dan bengkak, dan melancarkan menstruasi.</p>';
    } elseif ($nama_rempah == 'pala') {
        echo '<img src="pala.jpeg" alt="Pala">';
        echo '<p style="color: #5bc0de;">Manfaat Pala: Buah pala memiliki sifat antiinflamasi dan antispasmodik yang dapat membantu meredakan gangguan pencernaan seperti perut kembung, gas, dan diare.</p>';
    } elseif ($nama_rempah == 'lengkuas') {
        echo '<img src="lengkuas.jpeg" alt="Lengkuas">';
        echo '<p style="color: #5bc0de;">Manfaat Lengkuas: Lengkuas kaya akan senyawa fenolik yang berperan sebagai antioksidan, membantu melindungi sel-sel tubuh dari kerusakan akibat radikal bebas.</p>';
    } else {
        echo 'Rempah tidak ditemukan';
    }
}
?>

</body>
</html>
