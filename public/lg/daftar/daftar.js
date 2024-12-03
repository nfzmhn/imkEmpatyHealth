document.addEventListener("DOMContentLoaded", function () {
  // Redirect ke halaman login jika link diklik
  const loginLink = document.querySelector(".toggle");
  if (loginLink) {
    loginLink.addEventListener("click", function (event) {
      // Redirect dikelola oleh route href, tidak perlu JS tambahan
    });
  }

  // Form submission
  const submitButton = document.querySelector(".sign-btn");
  if (submitButton) {
    submitButton.addEventListener("click", function () {
      console.log("Form submitted to server.");
    });
  }
});
