<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(User $user){
        $this->user = $user;
    }
    public function index()
    {
        // dd(User::all());
       return User::all();
    }

    public function store(Request $request)
    {
        $request->validate($this->user->rules());
        User::create($request->all());
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
}
