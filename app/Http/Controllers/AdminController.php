<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news = News::all();
        return view ('news.index')->with('news', $news);
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        News::create($input);
        return redirect('admin')->with('flash_message', 'News Addedd!');
    }

    public function show($id)
    {
        $home = News::find($id);
        return view('news.show')->with('news', $home);
    }

    public function edit($id)
    {
        $home = News::find($id);
        return view('news.edit')->with('news', $home);
    }

    public function update(Request $request, $id)
    {
        $home = News::find($id);
        $input = $request->all();
        $home->update($input);
        return redirect('admin')->with('flash_message', 'home Updated!');
    }

    public function destroy($id)
    {
        News::destroy($id);
        return redirect('admin')->with('flash_message', 'News deleted!');
    }
}
