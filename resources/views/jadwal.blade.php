@extends("layouts.frontend")
@section("content")
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Dokter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('jadwaldok/jadwaldok.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header-title">
        <h1>LIHAT JADWAL<br>DOKTER</h1>
    </header>

    <section id="jadwaldok" class="py-5 bg-white">
        <div class="jadwaldok">
            <h2 class="mb-4">Pilih Kategori Dokter</h2>
            <button class="btn btn-category mx-2" onclick="showCategory('spesialis')">Spesialis</button>
            <button class="btn btn-category mx-2" onclick="showCategory('umum')">Umum</button>
        </div>

        <!-- Dokter Spesialis -->
        <div id="spesialis" class="doctor-category" style="display: none;">
            <h3 class="text-center">Dokter Spesialis</h3>
            @foreach ($dokterSpesialis as $dokter)
            <div class="doctor-card">
                <img src="{{ asset('lg/img/docter spesialis.png') }}" alt="Doctor Image">
                <div class="doctor-info">
                    <h3>{{ $dokter->nama }}</h3>
                    <p>{{ $dokter->spesialis->nama_spesialis }}</p>
                    <div class="schedule">
                        @foreach ($dokter->jadwals as $jadwal)
                        <div class="day-time">
                            <span>{{ $jadwal->nama_jadwal }}</span> <span>{{ $jadwal->jadwal }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Dokter Umum -->
        <div id="umum" class="doctor-category" style="display: none;">
            <h3 class="text-center">Dokter Umum</h3>
            @foreach ($dokterUmum as $dokter)
            <div class="doctor-card">
                <img src="{{ asset('lg/img/docter umum.png') }}" alt="Doctor Image">
                <div class="doctor-info">
                    <h3>{{ $dokter->nama }}</h3>
                    <p>Dokter Umum</p>
                    <div class="schedule">
                        @foreach ($dokter->jadwals as $jadwal)
                        <div class="day-time">
                            <span>{{ $jadwal->nama_jadwal }}</span> <span>{{ $jadwal->jadwal }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        function showCategory(category) {
            const categories = ['spesialis', 'umum'];
            categories.forEach(cat => {
                document.getElementById(cat).style.display = cat === category ? 'block' : 'none';
            });
        }
    </script>
</body>

</html>
@endsection
