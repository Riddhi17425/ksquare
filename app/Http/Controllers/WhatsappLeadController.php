<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhatsappLeadController extends Controller
{
    public function store(Request $request)
    {
        // ✅ Validation
        $request->validate([
            'phone' => 'required|digits_between:10,20',
        ]);

        // ✅ Save to Database
        DB::table('whatsapp_leads')->insert([
            'form_type'  => $request->form_type ?? 'whatsapp_popup',
            'phone'      => $request->phone,
            'message'    => $request->message ?? null,
            'created_at' => now()
        ]);

        /* ===============================
           SEND TO GOOGLE SHEET
        =============================== */
        $googleURL = "https://script.google.com/macros/s/AKfycbw3zM2B6HvAqzWK3OZPXi2EabZCLwZpKASv35m2CTK71KSR1UAK9beU7611lv-pD6Rtiw/exec";

        try {
            Http::get($googleURL, [
                'form_type'  => $request->form_type ?? 'whatsapp_popup',
                'contact'    => $request->phone,
                'message'    => $request->message ?? '',
                'created_at' => now()->format('Y-m-d H:i:s')
            ]);
        } catch (\Exception $e) {
            Log::error('Google Sheet Error', [
                'message' => $e->getMessage(),
                'data'    => $request->all()
            ]);
        }

       
        $crmData = [
            "form_type" => $request->form_type ?? 'whatsapp_popup',
            "phone"     => $request->phone,
            "message"   => $request->message ?? ''
        ];


        try {
            $crmResponse = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post(
                'https://crm.ksquareenergy.online/web/hook/2dd2b426-480f-4d5f-a8b6-4568146b06e1',
                $crmData
            );

            Log::info('CRM WhatsApp Lead Response', [
                'status' => $crmResponse->status(),
                'body'   => $crmResponse->body(),
            ]);

            if (!$crmResponse->successful()) {
                Log::error('CRM WhatsApp Lead Error', [
                    'status' => $crmResponse->status(),
                    'body'   => $crmResponse->body(),
                    'data'   => $crmData
                ]);
            }

        } catch (\Exception $e) {
            Log::error('CRM WhatsApp Lead Exception', [
                'message' => $e->getMessage(),
                'data'    => $crmData
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'WhatsApp lead saved successfully'
        ]);
    }
}
