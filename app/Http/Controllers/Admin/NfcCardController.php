<?php

namespace App\Http\Controllers\Admin;


use Exception;
use Stripe\Charge;

use Stripe\Stripe;
use Stripe\Invoice;

// use Laravel\Cashier\Invoice;

use App\Models\User;
use App\Models\VirtualCard;
use Illuminate\Http\Request;
use App\Models\Admin\NfcCard;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\NfcShippingDetails;

class NfcCardController extends Controller
{

    public function index()
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $user = Auth::user();
        $nfc_cards = $isUserRoute
            ? VirtualCard::with('nfc', 'shippingDetails')->where('user_id', $user->id)->latest('id')->get()
            : VirtualCard::with('nfc', 'shippingDetails')->latest('id')->get();

        $view = $isUserRoute ? 'user.pages.virtualCard.index' : 'admin.pages.virtualCard.index';

        return view($view, [
            'nfc_cards' => $nfc_cards,
        ]);
        // return view('user.pages.virtualCard.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $user = User::where('id', Auth::user()->id)->with('cardProducts')->first();
        // $userCardProduct = $user->cardProducts->where('status', 'unused')->first();
        if (optional($user)->cardProducts) {
            $userCardProduct = $user->cardProducts->where('status', 'unused')->first();
        } else {
            $userCardProduct = '';
        }


        $count = $userCardProduct ? $userCardProduct->count() : 0;

        $data = [
            'count' => $count,
            'nfc_cards' => $isUserRoute
                ? NfcCard::with('nfcData', 'nfcMessages', 'virtualCard', 'shippingDetails')->where('user_id', $user->id)->latest('id')->get()
                : NfcCard::with('nfcData', 'nfcMessages', 'virtualCard', 'shippingDetails')->latest('id')->get(),
        ];
        $view = $isUserRoute ? 'user.pages.virtualCard.create' : 'admin.pages.virtualCard.create';
        return view($view, $data);
        // return view('user.pages.virtualCard.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
    //     try {
    //         // Set Stripe API key
    //         Stripe::setApiKey(env('STRIPE_SECRET'));
    //         // Create charge
    //         $charge = Charge::create([
    //             "amount" => 4999, // Amount in cents
    //             "currency" => "usd",
    //             "source" => $request->stripeToken,
    //             "description" => "NFC Card Payment"
    //         ]);
    //         // Create invoice
    //         $invoice = Invoice::create([
    //             'customer' => $charge->customer,
    //             'billing' => 'send_invoice',
    //             // 'due_date' => now()->addDays(30)->timestamp,
    //         ]);

    //         // $paymentMethod = $request->stripeToken;
    //         // $user = Auth::user();
    //         // if (!$user) {
    //         //     throw new \Exception('User not found.');
    //         // }
    //         // $charge = $user->charge(4999, $paymentMethod);

    //         // $invoice = $user->invoiceFor('NFC Card Payment', 4999);

    //         $email = $request->customer_email;
    //         try {
    //             Mail::send('emails.invoice', ['invoice' => $invoice], function ($message) use ($email) {
    //                 $message->to($email)->subject('NFC Card Payment Invoice');
    //             });
    //         } catch (\Exception $e) {
    //             Session::flash('error', "Email sent will be delayed due to server issue.");
    //         }
    //         $nfc = NfcCard::find($request->card_id);
    //         $code = $nfc->code;
    //         // Handle file uploads
    //         $files = [
    //             'card_logo'           => $request->file('card_logo'),
    //             'card_bg_front'       => $request->file('card_bg_front'),
    //             'card_bg_back'        => $request->file('card_bg_back'),
    //         ];

    //         $filePath = 'public/nfc/';
    //         $uploadedFiles = [];

    //         foreach ($files as $key => $file) {
    //             if (!empty($file)) {
    //                 $uploadedFiles[$key] = customUpload($file, $filePath, $code . '_' . $key);
    //                 if ($uploadedFiles[$key]['status'] === 0) {
    //                     throw new \Exception("Error uploading file: " . $uploadedFiles[$key]['error_message']);
    //                 }
    //             } else {
    //                 $uploadedFiles[$key] = ['status' => 0];
    //             }
    //         }
    //         $userId = $isUserRoute ? Auth::user()->id : null;
    //         $adminId = $isUserRoute ? null : Auth::guard('admin')->user()->id;
    //         // Create VirtualCard
    //         $card = VirtualCard::create([
    //             'card_id'               => $request->card_id,
    //             'user_id'               => $userId,
    //             'admin_id'              => $adminId,
    //             'virtual_card_template' => $request->virtual_card_template,
    //             'card_logo'             => $uploadedFiles['card_logo']['status'] == 1 ? $uploadedFiles['card_logo']['file_name'] : null,
    //             'card_bg_front'         => $uploadedFiles['card_bg_front']['status'] == 1 ? $uploadedFiles['card_bg_front']['file_name'] : null,
    //             'card_bg_back'          => $uploadedFiles['card_bg_back']['status'] == 1 ? $uploadedFiles['card_bg_back']['file_name'] : null,
    //             'card_name'             => $request->card_name,
    //             'card_designation'      => $request->card_designation,
    //             'card_phone'            => $request->card_phone,
    //             'card_email'            => $request->card_email,
    //             'card_address'          => $request->card_address,
    //             'card_font_color'       => $request->card_font_color,
    //             'card_font_style'       => $request->card_font_style,
    //         ]);

    //         // Create NfcShippingDetails
    //         NfcShippingDetails::create([
    //             'card_id'              => $card->id,
    //             'shipping_name'        => $request->shipping_name,
    //             'shipping_phone'       => $request->shipping_phone,
    //             'shipping_address'     => $request->shipping_address,
    //             'shipping_city'        => $request->shipping_city,
    //             'shipping_state'       => $request->shipping_state,
    //             'shipping_zip_code'    => $request->shipping_zip_code,
    //             'shipping_country'     => $request->shipping_country,
    //             'shipping_instruction' => $request->shipping_instruction,
    //         ]);

    //         session()->forget('error');
    //         $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
    //         if ($isUserRoute) {
    //             return redirect()->route('user.nfc-card.index')->with('success', 'NFC Created successfully.');
    //         } else {
    //             return redirect()->route('admin.nfc-card.index')->with('success', 'NFC Created successfully.');
    //         }
    //     } catch (\Exception $e) {
    //         // Handle exceptions here
    //         return redirect()->back()->with('error', $e->getMessage());
    //     }
    // }


    public function store(Request $request)
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;

        try {
            // Load the user and their associated card products
            $user = User::where('id', Auth::user()->id)->with('cardProducts')->first();
            $userCardProduct = $user->cardProducts->where('status', 'unused')->first();

            if ($userCardProduct) {
                $userCardProduct->update(['status' => 'used']);
            } else {
                return $this->handleStripePayment($request);
            }

            // Handle file uploads
            $uploadedFiles = $this->handleFileUploads($request);

            // Create NFC card and associated shipping details
            $this->createNfcCard($request, $uploadedFiles, $isUserRoute);

            return $this->redirectAfterCreation($isUserRoute);
        } catch (Exception $e) {
            Log::error('Error occurred while processing NFC card: ' . $e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Handle the payment process if no unused card product is found.
     */
    protected function handleStripePayment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            // Create charge
            $charge = Charge::create([
                "amount" => 4999, // Amount in cents (e.g., $49.99)
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "NFC Card Payment",
            ]);

            // Check if the payment was successful
            if ($charge->status !== 'succeeded') {
                throw new Exception('Payment failed with status: ' . $charge->status);
            }

            // Process the payment and send invoice
            $this->sendInvoice($charge, $request);

            // Return success message
            return redirect()->back()->with('success', 'Payment succeeded, NFC card creation will proceed.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Payment failed: ' . $e->getMessage());
        }
    }

    /**
     * Send an invoice to the customer.
     */
    protected function sendInvoice($charge, Request $request)
    {
        $invoice = Invoice::create([
            'customer' => $charge->customer,
            'billing' => 'send_invoice',
        ]);

        try {
            Mail::send('emails.invoice', ['invoice' => $invoice], function ($message) use ($request) {
                $message->to($request->customer_email)->subject('NFC Card Payment Invoice');
            });
        } catch (\Exception $e) {
            // Log the failure and notify the user
            session()->flash('error', "Email sending delayed due to server issue.");
            Log::error("Invoice email sending failed: " . $e->getMessage());
        }
    }

    /**
     * Handle file uploads for the NFC card.
     */
    protected function handleFileUploads(Request $request)
    {
        $uploadedFiles = [];
        $files = [
            'card_logo' => $request->file('card_logo'),
            'card_bg_front' => $request->file('card_bg_front'),
            'card_bg_back' => $request->file('card_bg_back'),
        ];

        $filePath = 'public/nfc/';
        $nfc = NfcCard::find($request->card_id);
        $code = $nfc->code;

        foreach ($files as $key => $file) {
            if ($file) {
                $upload = $this->customUpload($file, $filePath, $code . '_' . $key);
                if ($upload['status'] === 0) {
                    throw new Exception("Error uploading file: " . $upload['error_message']);
                }
                $uploadedFiles[$key] = $upload['file_name'];
            }
        }

        return $uploadedFiles;
    }



    /**
     * Create NFC card and shipping details.
     */
    protected function createNfcCard(Request $request, array $uploadedFiles, bool $isUserRoute)
    {
        $userId = $isUserRoute ? Auth::user()->id : null;
        $adminId = $isUserRoute ? null : Auth::guard('admin')->user()->id;

        $card = VirtualCard::create([
            'card_id' => $request->card_id,
            'user_id' => $userId,
            'admin_id' => $adminId,
            'virtual_card_template' => $request->virtual_card_template,
            'card_logo' => $uploadedFiles['card_logo'] ?? null,
            'card_bg_front' => $uploadedFiles['card_bg_front'] ?? null,
            'card_bg_back' => $uploadedFiles['card_bg_back'] ?? null,
            'card_name' => $request->card_name,
            'card_designation' => $request->card_designation,
            'card_phone' => $request->card_phone,
            'card_email' => $request->card_email,
            'card_address' => $request->card_address,
            'card_font_color' => $request->card_font_color,
            'card_font_style' => $request->card_font_style,
        ]);

        NfcShippingDetails::create([
            'card_id' => $card->id,
            'shipping_name' => $request->shipping_name,
            'shipping_phone' => $request->shipping_phone,
            'shipping_address' => $request->shipping_address,
            'shipping_city' => $request->shipping_city,
            'shipping_state' => $request->shipping_state,
            'shipping_zip_code' => $request->shipping_zip_code,
            'shipping_country' => $request->shipping_country,
            'shipping_instruction' => $request->shipping_instruction,
        ]);
    }

    /**
     * Redirect to the appropriate route after NFC card creation.
     */
    protected function redirectAfterCreation(bool $isUserRoute)
    {
        return redirect()->route($isUserRoute ? 'user.nfc-card.index' : 'admin.nfc-card.index')
            ->with('success', 'NFC Created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        // $user = Auth::user();
        // $data = [
        //     'nfc' => $isUserRoute
        //         ? VirtualCard::with('shippingDetails','nfc')->findOrFail($id)
        //         : VirtualCard::with('shippingDetails','nfc')->findOrFail($id),
        // ];
        // $view = $isUserRoute ? 'user.pages.virtualCard.edit' : 'admin.pages.virtualCard.edit';
        // return view($view, $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $vcard = NfcCard::find($nfc->card_id);
        //     $code = $nfc->code;
        //     // Handle file uploads
        //     $files = [
        //         'card_logo'           => $request->file('card_logo'),
        //         'card_bg_front'       => $request->file('card_bg_front'),
        //         'card_bg_back'        => $request->file('card_bg_back'),
        //     ];

        //     $filePath = 'public/nfc/';
        //     $uploadedFiles = [];

        //     foreach ($files as $key => $file) {
        //         if (!empty($file)) {
        //             $uploadedFiles[$key] = customUpload($file, $filePath, $code . '_' . $key);
        //             if ($uploadedFiles[$key]['status'] === 0) {
        //                 throw new \Exception("Error uploading file: " . $uploadedFiles[$key]['error_message']);
        //             }
        //         } else {
        //             $uploadedFiles[$key] = ['status' => 0];
        //         }
        //     }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $nfc = VirtualCard::with('shippingDetails')->findOrFail($id);

        // Define the files and file path
        $files = [
            'card_logo'     => $nfc->card_logo,
            'card_bg_front' => $nfc->card_bg_front,
            'card_bg_back'  => $nfc->card_bg_back,
        ];

        $filePath = 'public/nfc/';

        // Delete the files if they exist
        foreach ($files as $file) {
            if (!empty($file) && Storage::exists($filePath . $file)) {
                Storage::delete($filePath . $file);
            }
        }

        // Delete the shipping details
        if ($nfc->shippingDetails) {
            $nfc->shippingDetails->delete();
        }

        // Delete the virtual card
        $nfc->delete();
    }

    public function getNfcData(Request $request)
    {
        $nfc = NfcCard::with('nfcData')->where('id', $request->card_id)->first();
        $nfcData = $nfc->nfcData;
        return response()->json(['nfc' => $nfc, 'nfcData' => $nfcData]);
    }
}
