<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pasien</title> 
    <link rel="stylesheet" href="{{ asset('dokter/diagnosa.css')}}">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="profile">
                <h2>Zidni Nurfauzi</h2>
                <p>dr. Rafli Pratama | Spesialis Kulit dan Kelamin</p>
                <p>07-12-2024</p>
            </div>
        </div>

        <form class="form">
            <div class="row">
                <div class="column">
                    <label>Jenis Kelamin</label>
                    <input type="text" value="Laki Laki" readonly>
                </div>
                <div class="column">
                    <label>Pekerjaan</label>
                    <input type="text" value="Taxi Online" readonly>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Umur</label>
                    <input type="text" value="29 Tahun" readonly>
                </div>
                <div class="column">
                    <label>Range Penghasilan</label>
                    <input type="text" value="1.000.000-3.000.000" readonly>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Pendidikan Terakhir</label>
                    <input type="text" value="Perguruan Tinggi" readonly>
                </div>
                <div class="column">
                    <label>Tunjangan</label>
                    <input type="text" value="BPJS" readonly>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Status Perkawinan</label>
                    <input type="text" value="Menikah" readonly>
                </div>
                <div class="column">
                    <label>Keluhan / Sakit yang dirasakan</label>
                    <textarea readonly>lorem ipsum</textarea>
                </div>
            </div>

            <div class="diagnosis">
                <label>Input Diagnosa Pasien</label>
                <textarea id="diagnosa" placeholder="Masukan Diagnosa"></textarea>
                <button class="diagnosis-btn">Input Diagnosa</button>
            </div>
            
        </form>
    </div>
</body>

</html>