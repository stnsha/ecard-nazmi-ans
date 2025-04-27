<?php

namespace App\Http\Controllers;

use App\Models\Toyyib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ToyyibPayController extends Controller
{
    public function createBill()
    {

        $option = array(
            'userSecretKey' => config('toyyibpay.key'),
            'categoryCode' => config('toyyibpay.category'),
            'billName' => 'Salam Kaut Nazmi & Anasuha',
            'billDescription' => 'Salam kaut online',
            'billPriceSetting' => 0,
            'billPayorInfo' => 0,
            'billAmount' => 0, //100 = RM1
            'billReturnUrl' => route('gift'), //URL Status kita
            'billCallbackUrl' => route('toyyib.callback'),
            'billTo' => '',
            'billEmail' => '',
            'billPhone' => '',
            'billPaymentChannel' => 0,
            'enableFPXB2B' => 1,
            'chargeFPXB2B' => 0,
            // 'billContentEmail' => 'Terima kasih! Selamat berpuasa :D',
            'billChargeToCustomer' => '',
            'billExpiryDate' => now()->setTimezone('Asia/Kuala_Lumpur')->addMinutes(15)->format('d-m-Y H:i:s'),
        );

        // dd($option);

        if (App::isLocal()) {
            $domain = 'https://dev.toyyibpay.com/';
        } else {
            $domain = 'https://toyyibpay.com/';
        }
        $url = $domain . 'index.php/api/createBill';

        try {
            $response = Http::asForm()->timeout(60)->post($url, $option);

            Log::info('ToyyibPay Response', ['response' => $response->json()]);
            if ($response->successful() && isset($response[0]['BillCode'])) {
                return redirect($domain . $response[0]['BillCode']);
            } else {
                return back();
            }
        } catch (\Illuminate\Http\Client\RequestException $e) {
            Log::error('ToyyibPay API Request Failed', ['message' => $e->getMessage()]);
            return back();
        }
    }


    public function callback()
    {
        $response = request()->all(['status', 'reason', 'billcode', 'amount']);

        // Log::info($response);

        $status = $response['status'] ?? null;
        $reason = $response['reason'] ?? null;
        $bill_code = $response['billcode'] ?? null;
        $amount = $response['amount'] ?? null;

        Toyyib::create([
            'status' => $status,
            'reason' => $reason,
            'bill_code' => $bill_code,
            'amount' => $amount,
        ]);
    }
}
