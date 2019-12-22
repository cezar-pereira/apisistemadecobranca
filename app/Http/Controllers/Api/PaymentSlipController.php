<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdatePaymentSlipRequest;
use App\Models\PaymentSlip;
use Illuminate\Http\Request;

class PaymentSlipController extends Controller
{
    private $itemsPerPage = 10;

    public function __construct(PaymentSlip $paymentSlip, Request $request) {
        $this->paymentSlip = $paymentSlip;
        $this->request = $request;
    }

    public function index()
    {
        return PaymentSlip::paginate($this->itemsPerPage);
    }

    public function store(StoreUpdatePaymentSlipRequest $request)
    {
        PaymentSlip::create($request->all());
    }

    public function show($id)
    {
        return PaymentSlip::findOrFail($id);
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
            return response()->json(['error' => 'Usuário não encontrado'], 404);
        else
            return response()->json($data);
    }
}
