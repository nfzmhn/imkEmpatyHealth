<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasien Terdaftar</title>
    <link rel="stylesheet" href="{{ asset('dokter/dokter.css') }}">
</head>

<body>
    <div class="container">
        <h1>PASIEN TERDAFTAR</h1>
        <div class="card">
            <div class="info">
                <div class="icon">
                    <img src="{{ url('lg/img/userprofile.png') }}" alt="User Profile" />
                </div>
                <div class="details">
                    <h2>Zidni Nurfauzi</h2>
                    <p>dr. Rafli Pratama | Spesialis Kulit dan Kelamin</p>
                    <p>07-12-2024</p>
                </div> 
            </div>
            <a class="diagnosis-btn" href="{{ url('/diagnosa')}}" style="text-decoration: none;"">Input Diagnosa</a>
        </div>
        <div class=" card">
                <div class="info">
                    <div class="icon"> 
                        <img src="{{ url('lg/img/userprofile.png') }}" alt="User Profile" />
                    </div>
                    <div class="details">
                        <h2>Shafa Dea Secaria</h2>
                        <p>dr. Rafli Pratama | Spesialis Kulit dan Kelamin</p>
                        <p>07-12-2024</p>
                    </div>
                </div>
                <a class="diagnosis-btn" href="{{ url('/diagnosa')}}" style="text-decoration: none;">Input Diagnosa</a>
        </div>
        <div class="card">
            <div class="info">
                <div class="icon">
                    <img src="{{ url('lg/img/userprofile.png') }}" alt="User Profile" />
                </div>
                <div class="details">
                    <h2>Rizko Fauzan</h2>
                    <p>dr. Rafli Pratama | Spesialis Kulit dan Kelamin</p>
                    <p>07-12-2024</p>
                </div>
            </div>
            <a class="diagnosis-btn" href="{{ url('/diagnosa')}}" style="text-decoration: none;">Input Diagnosa</a>
        </div>
    </div>
</body>

</html>