// Fungsi untuk redirect ke halaman utama
function redirectToMain(event) {
  event.preventDefault();
  window.location.href = '{{ route("halamanutama") }}';
}


// Fungsi placeholder untuk Sign in with Google
function signInWithGoogle() {
  alert("Fungsi Sign in with Google belum tersedia.");
}
