<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function index()
    {
        $comment = Comment::all();
        $reply = Reply::all();
        return view('admin.reply', compact('comment', 'reply'), [
            "title" => "Reply Tabel",
            "active" => "Balasan Komentar"
        ]);
    }

    public function destroy($id)
    {
        $reply = Reply::find($id);
        $reply->delete();

        return redirect()->route('reply.index')->with('success', 'Reply Berhasil Di Hapus');
    }
}
