document.addEventListener("DOMContentLoaded", function () {
  const sidebar = document.querySelector(".sidebar");
  const toggleButton = sidebar.querySelector(".icon");
  const iconCompact = document.getElementById("toggleIcon");
  const iconExpanded = document.getElementById("toggleIconExpanded");
  const dashboard = document.getElementById("dashboard"); // Ikon Dashboard
  const groupChat = document.getElementById("groupChat"); // Ikon groupchat
  const profile = document.getElementById("profile"); // Ikon profile
  const logout = document.getElementById("logout"); // Ikon logout




  toggleButton.addEventListener("click", function () {
    sidebar.classList.toggle("expanded"); // Toggle class expanded

    // Ubah ikon saat sidebar diperluas
    if (sidebar.classList.contains("expanded")) {
      iconCompact.style.display = "none";
      iconExpanded.style.display = "inline-block";
    } else {
      iconCompact.style.display = "inline-block";
      iconExpanded.style.display = "none";
    }
  });
  
  // Navigasi ke halaman dashboard
  dashboard.addEventListener("click", function () {
      window.location.href = "../halamanutama/halamanutama.html"; // URL tujuan
  });
  // Navigasi ke halaman Group Chat
  groupChat.addEventListener("click", function () {
      window.location.href = "../komunitasonline/komunitasonline.html"; 
  });
  // Navigasi ke halaman Profile
  profile.addEventListener("click", function () {
      window.location.href = "#"; 
  });
  logout.addEventListener("click", function () {
      window.location.href = "../lg/index.html"; 
  })
 
});
