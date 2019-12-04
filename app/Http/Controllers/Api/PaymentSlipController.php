<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PaymentSlip;
use Illuminate\Http\Request;

class PaymentSlipController extends Controller
{

    public function __construct(PaymentSlip $paymentSlip, Request $request) {
        $this->paymentSlip = $paymentSlip;
        $this->request = $request;
    }

    public function index()
    {
        return PaymentSlip::all();
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    public function user($id)
    {
        if(!$data = $this->paymentSlip->with('user')->find($id))
            return response()->json(['error' => 'Nada encontrado'], 404);
        else
            return response()->json($data);
    }
}
