<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSmsRequest;
use App\Models\Sms;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    private $itemsPerPage = 10;

    public function __construct(Sms $sms, Request $request) {
        $this->sms = $sms;
        $this->request = $request;
    }

    public function index()
    {
        return Sms::paginate($this->itemsPerPage);
    }

    public function store(StoreUpdateSmsRequest $request)
    {
        Sms::create($request->all());
    }

    public function show($id)
    {
        //
    }

    public function user($id)
    {
        if(!$data = $this->sms->with('user')->find($id))
            return response()->json(['error' => 'Usuário não encontrado'], 404);
        else
            return response()->json($data);
    }
}
