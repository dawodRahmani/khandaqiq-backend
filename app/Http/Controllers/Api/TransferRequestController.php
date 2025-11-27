<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class TransferRequestController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'transportMode' => 'required|string|in:air,ship,truck,rail',
            'portOfLoading' => 'required|string|max:255',
            'portOfDelivery' => 'required|string|max:255',
            'cargoWeight' => 'required|string|max:100',
            'containerSize' => 'nullable|string|max:100',
            'email' => 'required|email|max:255',
            'note' => 'nullable|string|max:2000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();

        // Transport mode labels
        $transportModes = [
            'air' => 'Air Freight',
            'ship' => 'Sea Freight',
            'truck' => 'Truck Transport',
            'rail' => 'Rail Transport',
        ];

        try {
            // Send email
            Mail::send([], [], function ($message) use ($data, $transportModes) {
                $message->to('info@khandaqiq.com')
                    ->subject('New Transfer Request - Khan Daqiq Logistics')
                    ->html($this->buildEmailContent($data, $transportModes));
            });

            return response()->json([
                'success' => true,
                'message' => 'Transfer request submitted successfully. We will contact you soon.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to send request. Please try again later.',
                'error' => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }

    private function buildEmailContent(array $data, array $transportModes): string
    {
        $transportMode = $transportModes[$data['transportMode']] ?? $data['transportMode'];
        $containerSize = $data['containerSize'] ?? 'Not specified';
        $note = $data['note'] ?? 'No additional notes';

        return "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background-color: #7c838a; color: white; padding: 20px; text-align: center; }
                .content { padding: 20px; background-color: #f9f9f9; }
                .field { margin-bottom: 15px; }
                .label { font-weight: bold; color: #555; }
                .value { margin-top: 5px; padding: 10px; background-color: white; border-left: 3px solid #7c838a; }
                .footer { padding: 20px; text-align: center; font-size: 12px; color: #666; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h1>New Transfer Request</h1>
                    <p>Khan Daqiq Logistics</p>
                </div>
                <div class='content'>
                    <div class='field'>
                        <div class='label'>Mode of Transport:</div>
                        <div class='value'>{$transportMode}</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Port of Loading (POL):</div>
                        <div class='value'>{$data['portOfLoading']}</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Port of Delivery (POD):</div>
                        <div class='value'>{$data['portOfDelivery']}</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Cargo Weight:</div>
                        <div class='value'>{$data['cargoWeight']}</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Container Size:</div>
                        <div class='value'>{$containerSize}</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Customer Email:</div>
                        <div class='value'><a href='mailto:{$data['email']}'>{$data['email']}</a></div>
                    </div>
                    <div class='field'>
                        <div class='label'>Additional Notes:</div>
                        <div class='value'>{$note}</div>
                    </div>
                </div>
                <div class='footer'>
                    <p>This email was sent from Khan Daqiq website transfer request form.</p>
                </div>
            </div>
        </body>
        </html>
        ";
    }
}
