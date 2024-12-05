document.addEventListener("DOMContentLoaded", function () {
  const sidebar = document.querySelector(".sidebar");
  const toggleButton = sidebar.querySelector(".icon");
  const iconCompact = document.getElementById("toggleIcon");
  const iconExpanded = document.getElementById("toggleIconExpanded");
  const dashboard = document.getElementById("dashboard"); // Ikon Dashboard
  const groupChat = document.getElementById("groupChat"); // Ikon groupchat
  const profile = document.getElementById("profile"); // Ikon profile
  const logout = document.getElementById("logout"); // Ikon logout
  const chatInput = document.querySelector(".chat-input textarea");
  const sendChatBtn = document.querySelector(".chat-input span");
  const chatbox = document.querySelector(".chatbox");

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
      window.location.href = "../halaman-utama"; // URL tujuan
  });
  // Navigasi ke halaman Group Chat
  groupChat.addEventListener("click", function () {
      window.location.href = "../komunitas-online";
  });
  // Navigasi ke halaman Profile
  profile.addEventListener("click", function () {
      window.location.href = "../profileuser";
  });
  logout.addEventListener("click", function () {
      window.location.href = "../";
  })

  let userMessage;

  const createChatLi = (message, className) => {
  const chatLi = document.createElement("li");
  chatLi.classList.add("chat", className);
  let chatContent = className === "outgoing" ? `<p>${message}</p>` : `<img src="../lg/img/Ellipse 8.png" alt="Profile"><p>${message}</p>`;
  chatLi.innerHTML = chatContent;
  return chatLi;
}

const handleChat = () => {
  userMessage = chatInput.value.trim();
  if(!userMessage) return;

  chatbox.appendChild(createChatLi(userMessage, "outgoing"));
}
  sendChatBtn.addEventListener("click", handleChat);

});
