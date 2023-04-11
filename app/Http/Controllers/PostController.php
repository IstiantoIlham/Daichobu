<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $posts = Post::query()->paginate(5);

        //render view with posts
        return view('dashboard', ['posts' => $posts]);
    }

    public function create(): View
    {
        return view('Components.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        return redirect()->route(route('dashboard'))->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
