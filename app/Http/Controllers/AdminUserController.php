<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view ('users.index')->with('users', $users);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect('/admin/users')->with('flash_message', 'User Addedd!');
    }

    public function show($id)
    {
        $home = User::find($id);
        return view('users.show')->with('users', $home);
    }

    public function edit($id)
    {
        $home = User::find($id);
        return view('users.edit')->with('users', $home);
    }

    public function update(Request $request, $id)
    {
        $home = User::find($id);
        $input = $request->all();
        $home->update($input);
        return redirect('/admin/users')->with('flash_message', 'home Updated!');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/admin/users')->with('flash_message', 'News deleted!');
    }
}
