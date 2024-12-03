<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medy Budy</title>
    <link rel="stylesheet" href="{{ asset('chatbox/chatbox.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="icon">
              <span class="material-symbols-outlined" id="toggleIcon">keyboard_double_arrow_right</span>
              <span class="material-symbols-outlined toggle-icon" id="toggleIconExpanded">keyboard_double_arrow_left</span>
              <span class="textSidebar">MedyBudy</span>
            </div>
            <div class="icon" id="dashboard">
              <span class="material-symbols-outlined">dashboard</span>
              <span class="textSidebar">Dashboard</span>
            </div>
            <div class="icon" id="groupChat">
              <span class="material-symbols-outlined">forum</span>
              <span class="textSidebar">Group Chat</span>
            </div>
            <div class="profile" id="profile">
              <img src="{{ asset('lg/img/Ellipse 8.png') }}" alt="Profile">
              <span class="textSidebar">{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</span>
            </div>
            <div class="logout" id="logout">
                <span class="material-symbols-outlined">logout</span>
                <span class="textSidebar">Log Out</span>
          </div>
        </div>

    <!-- <button class="chatbot-toggle">
        <img src="../lg/img/Ellipse 8.png" alt="Profile">
    </button> -->
    <div class="chatbox">
       <header>
        <h2>Chatbox</h2>
       </header>
       <ul class="chatbox">
        <li class="chat incoming">
            <img src="{{ asset('lg/img/Ellipse 8.png') }}g" alt="Profile">
            <p>Semangat ya <br>kita semua pasti sembuh!!!</p>
        </li>
       </ul>
       <div class="chat-input">
        <textarea placeholder="Type a message" required></textarea>
        <span id="send-btn" class="material-symbols-outlined">send</span>
       </div>
    </div>

    <script src="{{ asset('chatbox/chatbox.js') }}"></script>
</body>
</html>
