<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pasien</title>
    <link rel="stylesheet" href="{{ asset('dokter/diagnosa.css') }}">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="profile">
                <p>{{ date('d-m-Y') }}</p>
            </div>
        </div>

        @foreach ($reservasi as $data)
        <form class="form" action="{{ route('diagnosa.store', $data->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="column">
                    <label>Jenis Kelamin</label>
                    <input type="text" value="{{ $data->user->gender ?? 'Tidak diketahui' }}" readonly>
                </div>
                <div class="column">
                    <label>Pekerjaan</label>
                    <input type="text" value="{{ $data->user->pekerjaan ?? 'Tidak diketahui' }}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Umur</label>
                    <input type="text" value="{{ $data->user->umur ?? 'Tidak diketahui' }}" readonly>
                </div>
                <div class="column">
                    <label>Range Penghasilan</label>
                    <input type="text" value="{{ $data->user->penghasilan ?? 'Tidak diketahui' }}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Pendidikan Terakhir</label>
                    <input type="text" value="{{ $data->user->pendidikan ?? 'Tidak diketahui' }}" readonly>
                </div>
                <div class="column">
                    <label>Tunjangan</label>
                    <input type="text" value="{{ $data->user->tunjangan ?? 'Tidak diketahui' }}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="column">
                    <label>Status Perkawinan</label>
                    <input type="text" value="{{ $data->user->status_perkawinan ?? 'Tidak diketahui' }}" readonly>
                </div>
                <div class="column">
                    <label>Keluhan / Sakit yang dirasakan</label>
                    <textarea readonly>{{ $data->keluhan }}</textarea>
                </div>
            </div>

            <div class="diagnosis">
                <label>Input Diagnosa Pasien</label>
                <textarea name="diagnosa" id="diagnosa" placeholder="Masukkan Diagnosa" required></textarea>
                <button type="submit" class="diagnosis-btn">Simpan Diagnosa</button>
            </div>
        </form>
        @endforeach
    </div>
</body>

</html>
