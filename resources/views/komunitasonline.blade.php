<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medy Budy</title>
  <link rel="stylesheet" href="{{ asset('komunitasonline/komunitasonline.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">

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
        <img src="lg/img/Ellipse 8.png" alt="Profile">
        <span class="textSidebar">{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</span>
      </div>
      <div class="logout" id="logout">
        <span class="material-symbols-outlined">logout</span>
        <span class="textSidebar">Log Out</span>
      </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      @forelse($forums as $forum)
        <div class="card">
          <div class="card-text">
            <!-- Tautan menuju chatbox masing-masing forum -->
            <h3>{{ $forum->nama_forum }}</h3>
        <p>{{ $forum->deskripsi }}</p>
        <!-- Ganti dengan link WhatsApp -->
        <a href="{{ $forum->whatsapp_link }}" class="btn-custom" target="_blank">Silahkan Bergabung</a>
        </div>
        </div>

      @empty
      <p>Tidak ada riwayat medis yang ditemukan.</p>
      @endforelse
    </div>
  </div>

  <script src="{{ asset('komunitasonline/komunitasonline.js') }}"></script>
</body>
</html>
