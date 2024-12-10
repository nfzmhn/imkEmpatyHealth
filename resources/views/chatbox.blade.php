<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Group Chat - {{ $forum->nama_forum }}</title>
  <link rel="stylesheet" href="{{ asset('../chatbox/chatbox.css') }}">
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

    <div class="chatbox">
      <header>
        <h2>{{ $forum->nama_forum }}</h2>
      </header>
      <ul class="chat-messages">
        @foreach ($forum->pesan as $pesan)
        <li class="chat {{ $pesan->anggotaForum->id_user == Auth::id() ? 'outgoing' : 'incoming' }}">
          <img src="{{ asset('lg/img/Ellipse 8.png') }}" alt="Profile">
          <p>
            <span class="username">{{ $pesan->anggotaForum->user->nama_depan }}</span>
            <br>{{ $pesan->pesan }}
            <br><small>{{ $pesan->created_at->format('d M Y H:i') }}</small>
          </p>
        </li>
        @endforeach
      </ul>
      <div class="chat-input">
        <form id="chatForm">
          @csrf
          <textarea id="pesan" placeholder="Type a message" required></textarea>
          <button type="submit" id="send-btn" class="material-symbols-outlined">send</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    const chatForm = document.getElementById('chatForm');
    chatForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const pesan = document.getElementById('pesan').value;

      const response = await fetch('{{ route('
        group - chat.send ') }}', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
          },
          body: JSON.stringify({
            pesan
          }),
        });

      if (response.ok) {
        const result = await response.json();
        location.reload(); // Muat ulang untuk menampilkan pesan baru
      }
    });
  </script>
</body>

</html>