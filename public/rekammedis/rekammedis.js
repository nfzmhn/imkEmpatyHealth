// scripts.js
document.querySelectorAll('.forum-btn').forEach(button => {
    button.addEventListener('click', function () {
      const link = this.getAttribute('data-link');
      window.location.href = link;
    });
  });
  