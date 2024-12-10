document.addEventListener("DOMContentLoaded", function () {
    const submit = document.querySelector(".sign-btn");

    submit.addEventListener("click", function () {
      window.location.href = "../login/login.html"; // URL tujuan
    });
  });