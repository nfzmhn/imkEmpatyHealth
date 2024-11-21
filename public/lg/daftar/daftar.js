function redirectToLogin(event) {
    event.preventDefault(); 
    window.location.href = '{{ route("login") }}';
  }

  document.addEventListener("DOMContentLoaded", function () {
    const submit = document.querySelector(".sign-btn");

    submit.addEventListener("click", function () {
      window.location.href = "../datadiri/datadiri.html"; 
    });
  });