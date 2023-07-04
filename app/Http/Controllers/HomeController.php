<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Culture;
use App\Models\Kategori;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\View;


class HomeController extends Controller
{

    public function index()
    {

        $culture1 = Culture::with(['kategori'])->latest()->first();
        $culture1_id = $culture1->id;
        $culture = Culture::with(['kategori'])->whereNotIn('id', [$culture1_id])->latest()->paginate(3);
        $cultureslider = Culture::with(['kategori'])->latest()->take(5)->get();
        $culturekanan = Culture::with(['kategori'])->oldest()->limit(2)->get();
        $kategori = Kategori::withCount('culture')->get();
        $popularCulture = Culture::withCount('views')->orderBy('views_count', 'desc')->first();
        return view('landingpage.userpage', compact('culture', 'culture1', 'cultureslider', 'culturekanan', 'kategori','popularCulture'), [
            "title" => "RevTech Culture | Home",
            "active" => "Home"
        ]);
    }

    public function redirect()
    {

        $role = Auth::user()->role;

        if ($role == 'admin') {
            $total_culture = Culture::all()->count();
            $total_comment = Comment::all()->count();
            $total_reply = Reply::all()->count();
            $total_culture_views = Culture::withCount('views')->count();

            return view('admin.home', compact('total_culture', 'total_culture_views', 'total_comment', 'total_reply'), [
                "title" => "Dashboard Admin",
                "active" => "Dashboard"
            ]);
        } else {
            $culture1 = Culture::with(['kategori'])->latest()->first();
            $culture1_id = $culture1->id;
            $culture = Culture::with(['kategori'])->whereNotIn('id', [$culture1_id])->latest()->paginate(3);
            $cultureslider = Culture::with(['kategori'])->latest()->take(5)->get();
            $culturekanan = Culture::with(['kategori'])->oldest()->limit(2)->get();
            $kategori = Kategori::withCount('culture')->get();
        $popularCulture = Culture::withCount('views')->orderBy('views_count', 'desc')->first();

            return view('landingpage.userpage', compact('culture', 'culture1', 'cultureslider', 'culturekanan', 'kategori','popularCulture'), [
                "title" => "RevTech Culture | Home",
                "active" => "Home"
            ]);
        }
    }

    public function culturedetail($id)
    {
        $culture = Culture::with(['kategori', 'comment', 'comment.reply'])->find($id);
        $row = Culture::find($id);
        $row->views()->create([]);
        $kategori = Kategori::withCount('culture')->get();
        $culturekanan = Culture::with(['kategori'])->oldest()->limit(2)->get();
        $next = Culture::where('id', '>', $id)->orderBy('id', 'asc')->first();
        $prev = Culture::where('id', '<', $id)->orderBy('id', 'desc')->first();
        $culturesuka = Culture::with(['kategori'])->latest()->limit(3)->get();

        return view('landingpage.culturedetail', compact('row', 'culturekanan', 'kategori', 'next', 'prev', 'culturesuka', 'culture'))->with('row', $row)->with('title', "RevTech Culture | Culture Detail");;
    }

    public function search(Request $request)
    {
        $searchText = $request->search;
        $culture = Culture::where('nama_culture', 'LIKE', "%searchText%")->orWhere('desc_culture', 'LIKE', "%searchText%");

        $paginate = Culture::with(['kategori'])->latest()->paginate(3);


        return view(
            'landingpage.search',
            compact('paginate', 'culture'),
            [
                "title" => "RevTech Culture | Pencarian Culture",
                "active" => "Pencarian Culture"
            ]
        );
    }

    public function add_comment(Request $request)
    {
        if (Auth::id()) {
            $comment = new Comment;
            $comment->culture_id = $request->culture_id;
            $comment->nama_commenter = Auth::user()->name;
            $comment->user_id = Auth::user()->id;
            $comment->isi_comment = $request->comment;

            $comment->save();

            return redirect()->back();
        } else {
            return redirect('login');
        }
    }

    public function add_reply(Request $request)
    {
        if (Auth::id()) {
            $reply = new Reply;
            $reply->nama_replier = Auth::user()->name;
            $reply->user_id = Auth::user()->id;
            $reply->comment_id = $request->commentId;
            $reply->isi_reply = $request->reply;
            $reply->save();

            return redirect()->back();
        } else {
            return redirect('login');
        }
    }

    public function search_culture(Request $request)
    {
        $search_text = $request->search;

        $culture = Culture::where('nama_culture', 'LIKE', '%' . $search_text . '%')
            ->orWhere('desc_culture', 'LIKE', '%' . $search_text . '%')
            ->get();

        $paginate = Culture::with(['kategori'])
            ->latest()
            ->paginate(3);

        return view('landingpage.search', [
            "paginate" => $paginate,
            "culture" => $culture,
            "title" => "RevTech Culture | Pencarian Culture",
            "active" => "Pencarian Culture"
        ]);
    }
}
