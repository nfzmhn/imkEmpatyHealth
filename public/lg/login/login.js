function redirectToMain(event) {
  event.preventDefault(); 
  window.location.href = '{{ route("halamanutama") }}';
}

document.querySelector(".toggle").addEventListener("click", function(event) {
  event.preventDefault();
  window.location.href = '{{ route("daftar") }}';
});

document.addEventListener("DOMContentLoaded", function () {
    const submit = document.querySelector(".sign-btn");
    submit.addEventListener("click", function () {
      window.location.href = '{{ route("halamanutama") }}';
    });
 });