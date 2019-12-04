<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(User $user, Request $request){
        $this->user = $user;
        $this->request = $request;
    }
    public function index()
    {
        // dd(User::all());
       return User::all();
    }

    public function store(Request $request)
    {
        $request->validate($this->user->rules());
        // User::create($request->all());
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

    public function sms($id)
    {
        if(!$data = $this->user->with('sms')->find($id))
        return response()->json(['error' => 'Nada encontrado'], 404);
    else
        return response()->json($data);
    }


    public function paymentslip($id)
    {
        if(!$data = $this->user->with('paymentslip')->find($id))
        return response()->json(['error' => 'Nada encontrado'], 404);
    else
        return response()->json($data);
    }
}
