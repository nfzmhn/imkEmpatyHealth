<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Forum;
use App\Models\Pesan;

class ChatboxController extends Controller
{
    public function chatbox()
    {
        return view('chatbox');
    }

    public function showChatbox()
    {
        // Ambil forum berdasarkan spesialis pengguna yang sedang login
        $user = Auth::user();
        $forum = Forum::whereHas('anggota', function ($query) use ($user) {
            $query->where('id_user', $user->id);
        })->with(['pesan.anggotaForum.user'])->first();

        if (!$forum) {
            return redirect()->route('dashboard')->with('error', 'Forum tidak ditemukan!');
        }

        return view('chatbox', compact('forum'));
    }

    public function sendMessage(Request $request)
    {
        $request->validate(['pesan' => 'required|string']);

        // Dapatkan forum user berdasarkan spesialis
        $user = Auth::user();
        $forum = Forum::whereHas('anggota', function ($query) use ($user) {
            $query->where('id_user', $user->id);
        })->first();

        if (!$forum) {
            return response()->json(['error' => 'Forum tidak ditemukan!'], 404);
        }

        $anggotaForum = $forum->anggota()->where('id_user', $user->id)->first();

        // Simpan pesan
        $pesan = Pesan::create([
            'pesan' => $request->pesan,
            'id_forum' => $forum->id_forum,
            'id_anggota_forum' => $anggotaForum->id_anggota_forum,
        ]);

        return response()->json(['success' => 'Pesan dikirim!', 'pesan' => $pesan], 200);
    }
}
