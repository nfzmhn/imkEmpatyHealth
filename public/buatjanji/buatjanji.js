// Event listener untuk dropdown spesialis
document.getElementById("spesialis").addEventListener("change", function () {
  const spesialisId = this.value;

  // Validasi jika tidak ada spesialis yang dipilih
  if (!spesialisId) {
      alert("Silakan pilih spesialis terlebih dahulu.");
      return;
  }

  // Fetch data dokter berdasarkan spesialis ID
  fetch(`/get-dokters?spesialis_id=${spesialisId}`)
      .then(response => {
          if (!response.ok) throw new Error("Gagal mengambil data dokter.");
          return response.json();
      })
      .then(data => {
          const dokterSelect = document.getElementById('dokter');
          dokterSelect.innerHTML = '<option value="">Pilih Dokter</option>'; // Reset opsi dokter

          // Populate dokter ke dropdown
          data.forEach(dokter => {
              dokterSelect.innerHTML += `<option value="${dokter.id}">${dokter.nama}</option>`;
          });
      })
      .catch(error => {
          console.error(error);
          alert("Terjadi kesalahan saat memuat data dokter.");
      });
});

// Event listener untuk dropdown dokter
document.getElementById("dokter").addEventListener("change", function () {
  const dokterId = this.value;

  // Validasi jika tidak ada dokter yang dipilih
  if (!dokterId) {
      alert("Silakan pilih dokter terlebih dahulu.");
      return;
  }

  // Fetch data jadwal berdasarkan dokter ID
  fetch(`/get-jadwal-dokter?dokter_id=${dokterId}`)
      .then(response => {
          if (!response.ok) throw new Error("Gagal mengambil data jadwal dokter.");
          return response.json();
      })
      .then(data => {
          const jadwalSelect = document.getElementById('jadwal');
          jadwalSelect.innerHTML = '<option value="">Pilih Jadwal</option>'; // Reset opsi jadwal

          // Populate jadwal ke dropdown
          data.forEach(jadwal => {
              jadwalSelect.innerHTML += `<option value="${jadwal.id_jadwal_dokter}">${jadwal.jadwal}</option>`;
          });
      })
      .catch(error => {
          console.error(error);
          alert("Terjadi kesalahan saat memuat data jadwal dokter.");
      });
});

// Event listener untuk form reservasi
document.getElementById("reservasiForm").addEventListener("submit", function (e) {
  e.preventDefault(); // Mencegah submit default form

  // Ambil data dari form
  const dokterId = document.getElementById("dokter").value;
  const jadwalId = document.getElementById("jadwal").value;
  const keluhan = document.getElementById("keluhan").value;

  // Validasi input
  if (!dokterId || !jadwalId || !keluhan) {
      alert("Semua kolom harus diisi!");
      return;
  }

  // Kirim data ke server menggunakan fetch
  fetch("/janji", {
      method: "POST",
      headers: {
          "Content-Type": "application/json",
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content") // CSRF Token
      },
      body: JSON.stringify({
          dokter_id: dokterId,
          jadwal_id: jadwalId,
          keluhan: keluhan
      })
  })
  .then(response => {
      if (!response.ok) throw new Error("Gagal mengirim reservasi.");
      return response.json();
  })
  .then(data => {
      // Tampilkan pesan sukses
      alert("Reservasi berhasil dilakukan!");

      // Redirect setelah 3.5 detik
      setTimeout(() => {
          window.location.href = "/janji";
      }, 3500);
  })
  .catch(error => {
      console.error(error);
      alert("Terjadi kesalahan saat mengirim data reservasi.");
  });
});
