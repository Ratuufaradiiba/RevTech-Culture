<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Reply;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comment = Comment::all();
        $reply = Reply::all();
        return view('admin.comment', compact('comment', 'reply'), [
            "title" => "Comment Tabel",
            "active" => "Komentar"
        ]);
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        // Menghapus komentar
        $comment->reply()->delete();
        $comment->delete();

        return redirect()->route('comment.index')->with('success', 'Komentar Berhasil Di Hapus');
    }
}
