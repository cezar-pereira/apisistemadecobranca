<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $itemsPerPage = 10;

    public function __construct(User $user, Request $request){
        $this->user = $user;
        $this->request = $request;
    }
    public function index()
    {
       return User::paginate($this->itemsPerPage);
    }

    public function store(StoreUpdateUserRequest $request)
    {
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

    public function sms($id)
    {
        if(!$data = $this->user->with('sms')->find($id))
        return response()->json(['error' => 'Usuário não encontrado'], 404);
    else
        return response()->json($data);
    }

    public function paymentslip($id)
    {
        if(!$data = $this->user->with('paymentslip')->find($id))
        return response()->json(['error' => 'Usuário não encontrado'], 404);
    else
        return response()->json($data);
    }
}
