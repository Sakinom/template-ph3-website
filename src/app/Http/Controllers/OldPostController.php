<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create() {
        return view('post.create');
    }

    // 保存
    public function store(Request $request) { //Request $requestはフォームから保存されたデータを受け取る
        // $post = Post::create([
        //     'title' => $request->title,
        //     'body' => $request->body
        // ]);

        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);

        $validated['user_id'] = auth()->id();

        $post = Post::create($validated);

        $request->session()->flash('message', '保存しました');

        return back();
        // return back()->with('message', '保存しました');
    }

    public function index() {
        $posts = Post::whereDate('created_at', '>=', '2023-06-08')->get();
        return view('post.index', compact('posts'));
    }

    public function show(Post $post) {
        return view('post.show', compact('post'));
    }

    // 編集
    public function edit(Post $post) {
        return view('post.edit', compact('post'));
    }

    // 更新
    public function update(Request $request, Post $post) {
        $validated = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:400',
        ]);

        $validated['user_id'] = auth()->id();

        $post->update($validated);

        $request->session()->flash('message', '更新しました');

        return back();
    }

    // 削除
    public function destroy(Request $request, Post $post) {
        $post->delete();
        $request->session()->flash('message', '削除しました');
        return redirect('post');
    }

}
