<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\NfcScan;
use App\Models\Admin\NfcData;
use App\Models\Subscription;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Stevebauman\Location\Facades\Location;
use App\Http\Requests\Admin\NfcCardRequest;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Admin\NfcCard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class VirtualCardFormController extends Controller
{
    // public function generalInfoStore(Request $request)
    // {
    //     $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
    //     $card_id = $request->card_id;
    //     $nfc_card = NfcCard::findOrFail($card_id);
    //     $nfc_data = $nfc_card->nfcData;


    //     $files = [
    //         'banner_image'        => $request->file('banner_image'),
    //         'profile_image'       => $request->file('profile_image'),
    //     ];

    //     $filePath = 'public/nfc/';
    //     $uploadedFiles = [];

    //     foreach ($files as $key => $file) {
    //         if (!empty($file)) {
    //             $oldFile = $nfc_data->$key ?? null;
    //             if ($oldFile) {
    //                 Storage::delete($filePath . $oldFile);
    //             }
    //             $uploadedFiles[$key] = customUpload($file, $filePath, $name = $nfc_card->code . '_' . $key);
    //             if ($uploadedFiles[$key]['status'] === 0) {
    //                 return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
    //             }
    //         } else {
    //             $uploadedFiles[$key] = ['status' => 0];
    //         }
    //     }

    //     $nfc_card->update([
    //         'banner_image'              => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_name'] : $nfc_data->banner_image,
    //         'profile_image'             => $uploadedFiles['profile_image']['status'] == 1 ? $uploadedFiles['profile_image']['file_name'] : $nfc_data->profile_image,
    //         'nfc_type'                  => $request->nfc_type,
    //         'url_alias'                 => $request->url_alias,
    //         'vcard_name'                => $request->vcard_name,
    //         'designation'               => $request->designation,
    //         'bio_description'           => $request->bio_description,
    //         'nfc_template'              => $request->nfc_template,
    //         'primary_color'             => $request->primary_color,
    //         'text_color'                => $request->text_color,
    //         'title_color'               => $request->title_color,
    //         'background_color'          => $request->background_color,
    //         'button_bg_color'           => $request->button_bg_color,
    //         'button_title_color'        => $request->button_title_color,
    //         'frame_color'               => $request->frame_color,
    //         'font_family'               => $request->font_family,
    //         'font_size'                 => $request->font_size,
    //         'scan_count'                => $request->scan_count,
    //         'header'                    => !empty($request->header) ?  $request->header : 0,
    //         'company'                   => !empty($request->company) ?  $request->company : 0,
    //         'contact_list'              => !empty($request->contact_list) ?  $request->contact_list : 0,
    //         'services'                  => !empty($request->services) ?  $request->services : 0,
    //         'galleries'                 => !empty($request->galleries) ?  $request->galleries : 0,
    //         'products'                  => !empty($request->products) ?  $request->products : 0,
    //         'testimonials'              => !empty($request->testimonials) ?  $request->testimonials : 0,
    //         'blogs'                     => !empty($request->blogs) ?  $request->blogs : 0,
    //         'business_hours'            => !empty($request->business_hours) ? $request->business_hours : 0,
    //         'appointments'              => !empty($request->appointments) ? $request->appointments : 0,
    //         'map'                       => !empty($request->map) ?  $request->map : 0,
    //         'banner'                    => !empty($request->banner) ?  $request->banner : 0,
    //         'news_latter_popup'         => !empty($request->news_latter_popup) ?  $request->news_latter_popup : 0,
    //         'social_link'               => !empty($request->social_link) ?  $request->social_link : 0,
    //         'updated_at'                => Carbon::now(),
    //     ]);

    //     // Update NfcData
    //     $nfc_data = NfcData::updateOrCreate(
    //         ['card_id' => $card_id],
    //         [
    //             'first_name'           => $request->first_name,
    //             'last_name'            => $request->last_name,
    //             'email_personal'       => $request->email_personal,
    //             'email_work'           => $request->email_work,
    //             'phone_personal'       => $request->phone_personal,
    //             'phone_work'           => $request->phone_work,
    //             'location'             => $request->location,
    //             'location_url'         => $request->location_url,
    //             'date_of_birth'        => $request->date_of_birth,
    //             'company'              => $request->company,
    //             'job_title'            => $request->job_title,
    //             'default_language'     => $request->default_language,
    //             'address_line_one'     => $request->address_line_one,
    //             'address_line_two'     => $request->address_line_two,
    //             'website_url'          => $request->website_url,
    //             'twitter_url'          => $request->twitter_url,
    //             'facebook_url'         => $request->facebook_url,
    //             'instagram_url'        => $request->instagram_url,
    //             'reddit_url'           => $request->reddit_url,
    //             'tumblr_url'           => $request->tumblr_url,
    //             'youtube_url'          => $request->youtube_url,
    //             'linkedin_url'         => $request->linkedin_url,
    //             'whatsapp_url'         => $request->whatsapp_url,
    //             'pinterest_url'        => $request->pinterest_url,
    //             'tiktok_url'           => $request->tiktok_url,
    //             'start_time_monday'    => $request->start_time_monday,
    //             'monday'               => $request->monday,
    //             'end_time_monday'      => $request->end_time_monday,
    //             'start_time_tuesday'   => $request->start_time_tuesday,
    //             'tuesday'              => $request->tuesday,
    //             'end_time_tuesday'     => $request->end_time_tuesday,
    //             'start_time_wednesday' => $request->start_time_wednesday,
    //             'wednesday'            => $request->wednesday,
    //             'end_time_wednesday'   => $request->end_time_wednesday,
    //             'start_time_thursday'  => $request->start_time_thursday,
    //             'thursday'             => $request->thursday,
    //             'end_time_thursday'    => $request->end_time_thursday,
    //             'start_time_friday'    => $request->start_time_friday,
    //             'friday'               => $request->friday,
    //             'end_time_friday'      => $request->end_time_friday,
    //             'start_time_saturday'  => $request->start_time_saturday,
    //             'saturday'             => $request->saturday,
    //             'end_time_saturday'    => $request->end_time_saturday,
    //             'start_time_sunday'    => $request->start_time_sunday,
    //             'sunday'               => $request->sunday,
    //             'end_time_sunday'      => $request->end_time_sunday,
    //             'privacy_policy'       => $request->privacy_policy,
    //             'qr_code'              => $request->qr_code,
    //         ]
    //     );

    //     $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
    //     if ($isUserRoute) {
    //         $nfc_card = NfcCard::with(
    //             'nfcData',
    //             'nfcMessages',
    //             'virtualCard',
    //             'shippingDetails',
    //             'nfcCompany',
    //             'nfcGallery',
    //             'nfcProduct',
    //             'nfcService',
    //             'nfcTestimonial'
    //         )->where('user_id', Auth::user()->id)->where('id', $card_id)->first();
    //     } else {
    //         $nfc_card = NfcCard::with(
    //             'nfcData',
    //             'nfcMessages',
    //             'virtualCard',
    //             'shippingDetails',
    //             'nfcCompany',
    //             'nfcGallery',
    //             'nfcProduct',
    //             'nfcService',
    //             'nfcTestimonial'
    //         )->where('id', $card_id)->first();
    //     }

    //     return response()->json([
    //         'general_info_container' => view('nfc.form_partials.general_info', ['nfc_card' => $nfc_card])->render(),
    //         'success' => 'Form updated successfully!',
    //     ]);
    // }

    public function generalInfoStore(Request $request)
    {
        $isUserRoute = strpos(Route::current()->getName(), 'user.') === 0;
        $card_id = $request->card_id;
        $nfc_card = NfcCard::findOrFail($card_id);
        $nfc_data = $nfc_card->nfcData;

        // Check if $nfc_data exists
        if (!$nfc_data) {
            $nfc_data = new NfcData(); // Create a new instance if it doesn't exist
            $nfc_data->card_id = $card_id; // Assign the card_id
        }

        // Handle file uploads
        $files = [
            'banner_image' => $request->file('banner_image'),
            'profile_image' => $request->file('profile_image'),
        ];

        $filePath = 'public/nfc/';
        $uploadedFiles = [];

        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $oldFile = $nfc_data->$key ?? null;
                if ($oldFile) {
                    Storage::delete($filePath . $oldFile);
                }
                $uploadedFiles[$key] = customUpload($file, $filePath, $name = $nfc_card->code . '_' . $key);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }
        $urlAlias = $nfc_card->url_alias;
        if ($request->url_alias !== $nfc_card->url_alias) {
            $urlAlias = $request->url_alias;
        }
        // Update NfcCard
        $nfc_card->update([
            'banner_image'              => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_name'] : $nfc_data->banner_image,
            'profile_image'             => $uploadedFiles['profile_image']['status'] == 1 ? $uploadedFiles['profile_image']['file_name'] : $nfc_data->profile_image,
            'nfc_type'                  => $request->nfc_type,
            'url_alias'                 => $urlAlias,
            'vcard_name'                => $request->vcard_name,
            'designation'               => $request->designation,
            'bio_description'           => $request->bio_description,
            'nfc_template'              => $request->nfc_template,
            'primary_color'             => $request->primary_color,
            'text_color'                => $request->text_color,
            'title_color'               => $request->title_color,
            'background_color'          => $request->background_color,
            'button_bg_color'           => $request->button_bg_color,
            'button_title_color'        => $request->button_title_color,
            'frame_color'               => $request->frame_color,
            'font_family'               => $request->font_family,
            'font_size'                 => $request->font_size,
            'scan_count'                => $request->scan_count,
            'header'                    => !empty($request->header) ?  $request->header : 0,
            'company'                   => !empty($request->company) ?  $request->company : 0,
            'contact_list'              => !empty($request->contact_list) ?  $request->contact_list : 0,
            'services'                  => !empty($request->services) ?  $request->services : 0,
            'galleries'                 => !empty($request->galleries) ?  $request->galleries : 0,
            'products'                  => !empty($request->products) ?  $request->products : 0,
            'testimonials'              => !empty($request->testimonials) ?  $request->testimonials : 0,
            'blogs'                     => !empty($request->blogs) ?  $request->blogs : 0,
            'business_hours'            => !empty($request->business_hours) ? $request->business_hours : 0,
            'appointments'              => !empty($request->appointments) ? $request->appointments : 0,
            'map'                       => !empty($request->map) ?  $request->map : 0,
            'banner'                    => !empty($request->banner) ?  $request->banner : 0,
            'news_latter_popup'         => !empty($request->news_latter_popup) ?  $request->news_latter_popup : 0,
            'social_link'               => !empty($request->social_link) ?  $request->social_link : 0,
            'updated_at'                => Carbon::now(),
        ]);

        // Update NfcData
        $nfc_data->fill([
            'first_name'           => $request->first_name,
            'last_name'            => $request->last_name,
            'email_personal'       => $request->email_personal,
            'email_work'           => $request->email_work,
            'phone_personal'       => $request->phone_personal,
            'phone_work'           => $request->phone_work,
            'location'             => $request->location,
            'location_url'         => $request->location_url,
            'date_of_birth'        => $request->date_of_birth,
            'company_name'         => $request->company_name,
            'job_title'            => $request->job_title,
            'default_language'     => $request->default_language,
            'address_line_one'     => $request->address_line_one,
            'address_line_two'     => $request->address_line_two,
            'website_url'          => $request->website_url,
            'twitter_url'          => $request->twitter_url,
            'facebook_url'         => $request->facebook_url,
            'instagram_url'        => $request->instagram_url,
            'reddit_url'           => $request->reddit_url,
            'tumblr_url'           => $request->tumblr_url,
            'youtube_url'          => $request->youtube_url,
            'linkedin_url'         => $request->linkedin_url,
            'whatsapp_url'         => $request->whatsapp_url,
            'pinterest_url'        => $request->pinterest_url,
            'tiktok_url'           => $request->tiktok_url,
            'start_time_monday'    => $request->start_time_monday,
            'monday'               => $request->monday,
            'end_time_monday'      => $request->end_time_monday,
            'start_time_tuesday'   => $request->start_time_tuesday,
            'tuesday'              => $request->tuesday,
            'end_time_tuesday'     => $request->end_time_tuesday,
            'start_time_wednesday' => $request->start_time_wednesday,
            'wednesday'            => $request->wednesday,
            'end_time_wednesday'   => $request->end_time_wednesday,
            'start_time_thursday'  => $request->start_time_thursday,
            'thursday'             => $request->thursday,
            'end_time_thursday'    => $request->end_time_thursday,
            'start_time_friday'    => $request->start_time_friday,
            'friday'               => $request->friday,
            'end_time_friday'      => $request->end_time_friday,
            'start_time_saturday'  => $request->start_time_saturday,
            'saturday'             => $request->saturday,
            'end_time_saturday'    => $request->end_time_saturday,
            'start_time_sunday'    => $request->start_time_sunday,
            'sunday'               => $request->sunday,
            'end_time_sunday'      => $request->end_time_sunday,
            'privacy_policy'       => $request->privacy_policy,
            'qr_code'              => $request->qr_code,
        ]);
        $nfc_data->save();

        // Prepare $nfc_card with relationships

        $nfc_card = NfcCard::with(
            'nfcData',
            'nfcMessages',
            'virtualCard',
            'shippingDetails',
            'nfcCompany',
            'nfcGallery',
            'nfcProduct',
            'nfcService',
            'nfcTestimonial'
        )->where('id', $card_id)->first();

        $view = view('nfc.form_partials.general_info', compact('nfc_card'))->render();

        return response()->json(['general_info_view' => $view]);
    }
}
