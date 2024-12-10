// JavaScript untuk smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

const buatJanji = document.getElementById("buat-janji");
const rekamMedis = document.getElementById("rekam-medis");
const konsultasiOnline = document.getElementById("konsultasi-online");
const jadwalDokter = document.getElementById("jadwal-dokter");

buatJanji.addEventListener("click", function () {
    window.location.href = "../buatjanji/buatjanji.html"; // Ganti dengan path file HTML tujuan
});

rekamMedis.addEventListener("click", function () {
    window.location.href = "../rekammedis/rekammedis.html"; // Ganti dengan path file HTML tujuan
});

konsultasiOnline.addEventListener("click", function () {
    window.location.href = "../komunitasonline/komunitasonline.html"; // Ganti dengan path file HTML tujuan
});

jadwalDokter.addEventListener("click", function () {
    window.location.href = "../jadwaldok/jadwaldok.html"; // Ganti dengan path file HTML tujuan
});