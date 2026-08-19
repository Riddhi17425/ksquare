<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Category;
use App\Models\Products;
use App\Models\Contact;
use App\Models\Inquiry;
use App\Models\Blog;
use App\Models\BlogFaq;
use App\Models\SuryagharStore;
use App\Models\ProductsTabing;
use App\Models\StatesSolar;
use App\Models\CitySolar;
use App\Models\Solar;
use App\Models\SolarFaq;
use App\Models\Certificate;
use App\Models\Landing;
use App\Models\State;
use App\Models\City;
use App\Models\Grievance;
use App\Models\QuotationNumber;
use App\Models\CustomerDetail;
use App\Models\Teamslife;
use App\Models\LifeImage;
use App\Models\Events;
use App\Models\PR;
use App\Models\KLanding;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Google\Service\Sheets;
use Illuminate\Support\Facades\Log;
use Google_Client;
use Google_Service_Sheets;
use Google_Service_Sheets_ValueRange;
use Maatwebsite\Excel\Facades\Excel;
use GuzzleHttp\Client;
use SheetDB\SheetDB;
use DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Validation\Rule;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $meta = "Solar Panel Supplier Ahmedabad | Best Solar Company Gujarat";
        $desc = "Leading solar panel supplier and manufacturer of solar products in Ahmedabad, Gujarat, offering complete and turnkey solar solutions to meet your needs.";
        $link = 'https://ksquareenergy.com/';
        $ogimage= "https://www.ksquareenergy.com/public/wp-content/uploads/sites/2/2019/01/favicon.png";
        $category = Category::select('id', 'image', 'name', 'description', 'seourl')->where('deleted_at', null)->get();
        $data =  Blog::select('id', 'url', 'image', 'title')->orderBy('id','desc')->take(3)->where('is_delete','0')->get();
        return view('index', ['category' => $category, 'meta' => $meta, 'desc' => $desc, 'link' => $link,'data' => $data,'ogimage'=>$ogimage]);
    }

    public function SendEmail($product,$email)
    {
        echo json_encode('hi');
        echo json_encode($email);exit;
        $meta = "Solar Panel Supplier Ahmedabad, Best Solar Company Gujarat";
        $desc = "Top leading solar panels supplier and manufacturer of solar product companies in Ahmedabad, Gujarat offers complete and turnkey solutions to meet your needs.";
        $link = 'https://ksquareenergy.com/';
        $category = Category::where('deleted_at', null)->get();
        return view('index', ['category' => $category, 'meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function social()
    {
        $meta = "Ksquare Energy - Social Media Presence";
        $desc = "Connect Us On Social Platforms For More Informations. Stay In Touch For latest Updates.";
        $link = 'https://ksquareenergy.com/social';
        return view('social', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }

    public function profile()
    {
        $meta = "About Ksquare";
        $desc = "Ksquare, Gujarat's leading manufacturer of solar products, offers DCDB, ACDB, earthing kits, cables, LT panels, solar inverters, and more. Order now!";
        $link = 'https://ksquareenergy.com/profile';
        return view('profile', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }

    public function team()
    {
        $meta = "Team Behind Solar Mission";
        $desc = "Ksquare Energy's High Experienced Staff With up to date Solar Industry Knowledge. Contact Us At +91 7227931916/17 For Any Queries Related to Solar PV Systems.";
        $link = 'https://ksquareenergy.com/team';
        return view('our-team', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }

    public function infrastructure()
    {
        $meta = "Fastest Growing Solar Company With Smart Infrastructure";
        $desc = "Ksquare Energy Pvt. Ltd. is ISO-certified, featuring smart infrastructure. Our 4,500 sq. ft. factory is equipped with the latest machinery and skilled staff.";
        $link = 'https://ksquareenergy.com/infrastructure';
        return view('infrastructure', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }

    // public function certificates()
    // {
        
    //     $certificates = Certificate::where('is_delete', '0')->get();
    //     // dd($certificate);
    //     $meta = "Quality That Speaks of Itself";
    //     $desc = "Ksquare Energy Pvt. Ltd. is certified solar company with number of institutes. We ahve Electrical Contractor License - Geda Work Order - MSME - RoHS - IEC - ISO - PGVCL Certificates.";
    //     $link = 'https://ksquareenergy.com/certificates';
    //     return view('certificates', compact('certificates', 'meta', 'desc', 'link'));

    // }
    
    public function certificates()
    {
        $certificates = Certificate::where('is_delete', 0)
            ->get()
            ->groupBy('certificate_cat');
            //  dd($certificates);
    
        $meta = "Quality That Speaks of Itself";
        $desc = "Ksquare Energy Pvt. Ltd. is a certified solar company with a number of institutes. We have Electrical Contractor License - Geda Work Order - MSME - RoHS - IEC - ISO - PGVCL Certificates.";
        $link = 'https://ksquareenergy.com/certificates';
    
        return view('certificates', [
            'certificates' => $certificates,
            'meta' => $meta,
            'desc' => $desc,
            'link' => $link
        ]);
    }


    public function awards()
    {
        $meta = "Awards & Accolades | Solar Energy Company in Ahmedabad";
        $desc = "Ksquare Energy have been awarded by Industry's Top Awards for our Quality Work & Fastest Growing within the Industry Space. Here are some of them.";
        $link = 'https://ksquareenergy.com/awards';
        return view('awards', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }

    public function residential()
    {
        $meta = "Residential Solar Rooftop Panels for Homes at Best Prices";
        $desc = "Ksquare offers rooftop panels for homes in Gujarat at the best prices, helping you save money and earn from your rooftop space. Trusted by 85,000+ homes.";
        $link = 'https://ksquareenergy.com/residential-solar-rooftop-ahmedabad';
        return view('residential', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    
    
    
    public function rooftop()
    {
        $meta = "Rooftop Solar for Flat Owners";
        $desc = "Ksquare Energy offers customized rooftop solar solutions for flat owners, ensuring optimal performance and energy savings with our advanced solar technology.";
        // $link = 'https://ksquareenergy.com/residential-solar-rooftop-ahmedabad';
        return view('rooftopSolar', ['meta' => $meta, 'desc' => $desc]);
    }

    public function commercial()
    {
        $meta = "Commercial And Industrial Solar Solutions";
        $desc = "Ksquare specializes in commercial and industrial solar solutions across various sectors, offering easy maintenance and lower electricity bills. Get a quote!";
        $link = 'https://ksquareenergy.com/commercial-solar-system-ahmedabad';
        return view('commercial', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }

    public function solsquare()
    {
        $meta = "Solsquare – Best-in-Class Cables for Solar Projects";
        $desc = "Solsquare provides best-in-class cables for solar projects, delivering reliable and efficient solutions for optimal solar energy performance. Contact us.";
        $link = 'https://ksquareenergy.com/solsquare';
        return view('solsquare', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    
    

    public function kenclozer()
    {
        $meta = "Kenclozer – Polycarbonate Enclosures and Junction Boxes";
        $desc = "Kenclozer offers high-quality polycarbonate enclosures and junction boxes for indoor and outdoor use. Discover our durable, reliable solutions today!";
        $link = 'https://ksquareenergy.com/kenclozer';
        return view('kenclozer', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
   
    public function solplast()
    {
        $meta = "Solplast – High-Quality PVC Materials For solar plants";
        $desc = "Solplast, a Ksquare Energy brand, offers top-quality PVC materials for solar power plants, designed to withstand harsh conditions and enhance system efficiency.";
        $link = 'https://ksquareenergy.com/solplast';
        return view('solplast', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function blitz()
    {
        $meta = "Blitz – AC/DC Surge Protector";
        $desc = "Blitz, part of Ksquare Energy, provides advanced AC & DC surge protection devices designed to protect and enhance the performance of solar power projects.";
        $link = 'https://ksquareenergy.com/blitz';
        return view('blitz', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }

    public function downloads()
    {
        $meta = "Ksquare Brochure, Solar Product Catalogue & Presentation";
        $desc = "Ksquare Energy Pvt. Ltd.'s brochures, solar product catalog, and guides are available. Download for more info on solar products and appliances. Get a quote!";
        $link = 'https://ksquareenergy.com/downloads';
        $ogimage= "story.jpg";
        return view('downloads', ['meta' => $meta, 'desc' => $desc, 'link' => $link, 'ogimage' => $ogimage ]);
    }
    public function payment()
    {
        $meta = "";
        $desc = "";
        $link = 'https://ksquareenergy.com/payment-detail';
        $ogimage= "";
        return view('paymen-detail', ['meta' => $meta, 'desc' => $desc, 'link' => $link, 'ogimage' => $ogimage ]);
    }

    public function contact()
    {
        $meta = "Contact Ksquare Energy Pvt. Ltd. - Solar Energy Solution Provider";
        $desc = "We Are Located At B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210. Contact Us At - +91 72279 31916/17 Or Drop Us Mail At - info@ksquareenergy.com";
        $link = 'https://ksquareenergy.com/contact-us';
        $states =  State::select('name')->where('country_id', 101)->distinct()->get();
        return view('contact', ['meta' => $meta, 'desc' => $desc, 'link' => $link , 'states' => $states]);
    }
    public function grievance()
    {   
        $meta = "";
        $desc = "";
        $state = State::all();
        // $link = 'https://ksquareenergy.com/contact-us';
        return view('grievance', ['meta' => $meta, 'desc' => $desc,'state' => $state ]);
    }
    
    // public function grievancestore(Request $request)
    // {
    //      $validatedData = $request->validate([
    //         'full_name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'phone' => 'required|digits:10',
    //         'subject' => 'required|string|max:255',
    //         'state' => 'required|string|max:255',
    //         'city' => 'required|string|max:255',
    //         'message' => 'required|string',
    //     ]);
    
    //     $grievance = Grievance::create($validatedData);
    
    //      $sheetsData = [
    //         'form_type' => 'Grievance Inquiry',
    //         'full_name' => $validatedData['full_name'],
    //         'email' => $validatedData['email'],
    //         'phone' => $validatedData['phone'],
    //         'subject' => $validatedData['subject'],
    //         'state' => $validatedData['state'],
    //         'city' => $validatedData['city'],
    //         'message' => $validatedData['message'],
    //         'formattedDate' => now()->format('Y-m-d H:i:s'),
    //     ];
    
    //     try {
    //         Http::withHeaders([
    //             'Content-Type' => 'application/json'
    //         ])->post('https://script.google.com/macros/s/AKfycbx4xVctk_bwahYvwycRBIVXFe-dz8BBGLJwFhozc-4NKQwdozD2XHkC-bRxMEYCDkZQKw/exec', $sheetsData);
    //     } catch (\Exception $e) {
    //         Log::error('Google Sheets Error:', [
    //             'message' => $e->getMessage(),
    //             'data_sent' => $sheetsData,
    //         ]);
    //     }
    
    //     $webhookData = [
    //         'name' => $validatedData['full_name'],
    //         'phone' => $validatedData['phone'],
    //         'email' => $validatedData['email'],
    //     ];
    // // dd($webhookData);
    //     try {
    //         $client = new Client();
    //         $response = $client->post('https://ksquare-energy-pvt-ltd.odoo.com/web/hook/2c468e1a-9f3b-4179-b43c-9974e920873c', [
    //             'json' => $webhookData
    //         ]);
    
    //         Log::info('Webhook sent successfully', [
    //             'status' => $response->getStatusCode(),
    //             'response' => $response->getBody()->getContents()
    //         ]);
    
    //     } catch (\Exception $e) {
    //         Log::error('Webhook Error:', [
    //             'message' => $e->getMessage(),
    //             'data_sent' => $webhookData,
    //         ]);
    //     }
    
    //     return redirect()->route('thank-you')->with('success', 'Your grievance has been submitted successfully.');
    // }

    
    
    public function grievancestore(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits:10',
            'subject' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
    
        // Save to database
        $grievance = Grievance::create($validatedData);
    
        // Prepare data for Google Sheets
        $sheetsData = [
            'form_type' => 'Grievance Inquiry',
            'full_name' => $validatedData['full_name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'subject' => $validatedData['subject'],
            'state' => $validatedData['state'],
            'city' => $validatedData['city'],
            'message' => $validatedData['message'],
            'formattedDate' => now()->format('Y-m-d H:i:s'),
        ];
    // dd($sheetsData);
        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post('https://script.google.com/macros/s/AKfycbx4xVctk_bwahYvwycRBIVXFe-dz8BBGLJwFhozc-4NKQwdozD2XHkC-bRxMEYCDkZQKw/exec', $sheetsData);
    
            Log::info('Google Sheets Response:', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
    
            if (!$response->successful()) {
                Log::error('Google Sheets Error:', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                    'data_sent' => $sheetsData
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Google Sheets Exception:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'data_sent' => $sheetsData
            ]);
        }
    
        return redirect()->route('thank-you')->with('success', 'Your grievance has been submitted successfully.');
    }
  

    
    public function fetchCity(Request $request)
    {
        $cities = City::where('state_id', $request->state_id)->get();
        return response()->json(['cities' => $cities]);
    }
    public function life_at_ksquare()
    {
        $meta = "";
        $desc = "";
        // $link = 'https://ksquareenergy.com/contact-us';
        $teamslife = Teamslife::whereNull('deleted_at')->get()->groupBy('activity');
        $teamsimages = LifeImage::whereNull('deleted_at')->get();
        // dd($teamslife);
        return view('life-at-ksquare', ['meta' => $meta, 'desc' => $desc,'teamslife'=>$teamslife,'teamsimages'=>$teamsimages]);
    }
    public function contact_new()
    {
        $meta = "Contact Ksquare Energy Pvt. Ltd. - Solar Energy Solution Provider";
        
        $desc = "We Are Located At B-403/404 Signature - 2 Sarkhej Sanand Road, Sarkhej, Ahmedabad - 382210. Contact Us At - +91 72279 31916/17 Or Drop Us Mail At - info@ksquareenergy.com";
        $link = 'https://ksquareenergy.com/contact-us';
        return view('contact-new', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }

    public function privacy()
    {
        $meta = "Privacy Policy| Ksquare Energy";
        $desc = "Explore Ksquare Energy Pvt. Ltd.'s Privacy Policy to learn how we collect, use, and protect your information related to solar panels and services.";
        $link = 'https://ksquareenergy.com/privacy-policy';
        return view('privacy', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function channelpartner()
    {
        $meta = "Ksquare Solar Partnership – Launch Your Solar Business";
        $desc = "Ksquare empowers small businesses to grow and succeed in the solar industry by becoming solar channel partners. Join us and expand your solar business today!";
        $link = '';
        return view('channel-partner', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function gujarat()
    {
        $meta = "";
        $desc = "";
        $link = '';
        return view('solar-products-in-gujarat', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function andharapradesh()
    {
        $meta = "";
        $desc = "";
        $link = '';
        return view('solar-products-in-andharapradesh', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function andhra()
    {
        $meta = "";
        $desc = "";
        $link = '';
        return view('solar-products-in-andharapradesh', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function karnataka()
    {
        $meta = "";
        $desc = "";
        $link = '';
        return view('solar-products-in-karnataka', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function kerala()
    {
        $meta = "";
        $desc = "";
        $link = '';
        return view('solar-products-in-kerala', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function madhyapradesh()
    {
        $meta = "";
        $desc = "";
        $link = '';
        return view('solar-products-in-madhyapradesh', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function rajasthan()
    {
        $meta = "";
        $desc = "";
        $link = '';
        return view('solar-products-in-rajasthan', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function tamilnadu()
    {
        $meta = "";
        $desc = "";
        $link = '';
        return view('solar-products-in-tamilnadu', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function uttarpradesh()
    {
        $meta = "";
        $desc = "";
        $link = '';
        return view('solar-products-in-uttarpradesh', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function westbengal()
    {
        $meta = "";
        $desc = "";
        $link = '';
        return view('solar-products-in-westbengal', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function landing()
    {
        $meta = "Buy Solar Inverters & Energy Solutions | Ksquare Inverter";
        $desc = "Ksquare is a top solar inverter manufacturer in India, offering innovative and reliable energy solutions for diverse applications.";
        $link = '';
        return view('landing', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function klanding()
    {
        $meta = "";
        $desc = "";
        $link = '';
        return view('klanding', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function ourpresence()
    {
        $meta = "";
        $desc = "";
        $link = '';
        return view('ourpresence', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    
    
    //comment by yamini 28-07-2025
    // public function klandingstore(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'full_name'     => 'required|string|max:255',
    //         'email'         => 'required|email|max:255',
    //         'phone'         => 'required|string|regex:/^[0-9]{10,15}$/',
    //         'pincode'       => 'required|string|max:20',
    //         'monthly_bill'  => 'required|string|max:255',
    //     ]);

    
    //     $landingForm = KLanding::create($validatedData);
    
    //     $sheetsData = [
    //         'form_type'     => 'KLanding Inquiry',
    //         'full_name'     => $request->full_name,
    //         'email'         => $request->email,
    //         'phone'         => $request->phone,
    //         'pincode'       => $request->pincode,
    //         'monthly_bill'  => $request->monthly_bill,
    //         'formattedDate' => now()->format('Y-m-d H:i:s'),
    //     ];
    
    //     try {
    //         $response = Http::withHeaders([
    //             'Content-Type' => 'application/json'
    //         ])->post('https://script.google.com/macros/s/AKfycbw58qCVft0I0vc9_YiXzBHnGqse9i806uqXnDR-vRgHytOwAe3HPiKmb762PkUTIfnyLA/exec', $sheetsData);
    
    //         Log::info('Google Sheets Response:', [
    //             'status' => $response->status(),
    //             'body' => $response->body(),
    //         ]);
    
    //         if (!$response->successful()) {
    //             Log::error('Google Sheets Error:', [
    //                 'status' => $response->status(),
    //                 'body' => $response->body(),
    //                 'data_sent' => $sheetsData
    //             ]);
    //         }
    
    //     } catch (\Exception $e) {
    //         Log::error('Google Sheets Exception:', [
    //             'message' => $e->getMessage(),
    //             'trace' => $e->getTraceAsString(),
    //             'data_sent' => $sheetsData
    //         ]);
    //     }
    
    //     return response()->json([
    //         'status' => true,
    //         'redirect' => route('thank-you')
    //     ]);
    // }
    //end comment by yamini 28-07-2025
    
    public function klandingstore(Request $request)
    {
        $validatedData = $request->validate([
            'full_name'     => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            'phone'         => 'required|string|regex:/^[0-9]{10,15}$/',
            'pincode'       => 'required|string|max:20',
            'monthly_bill'  => 'required|string|max:255',
        ]);
    
        $landingForm = KLanding::create($validatedData);
    
        $sheetsData = [
            'form_type'     => 'KLanding Inquiry',
            'full_name'     => $request->full_name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'pincode'       => $request->pincode,
            'monthly_bill'  => $request->monthly_bill,
            'formattedDate' => now()->format('Y-m-d H:i:s'),
        ];
    
        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post('https://script.google.com/macros/s/AKfycbw58qCVft0I0vc9_YiXzBHnGqse9i806uqXnDR-vRgHytOwAe3HPiKmb762PkUTIfnyLA/exec', $sheetsData);
    
            Log::info('Google Sheets Response:', [
                'status' => $response->status(),
                'body'   => $response->body(),
            ]);
    
            if (!$response->successful()) {
                Log::error('Google Sheets Error:', [
                    'status'    => $response->status(),
                    'body'      => $response->body(),
                    'data_sent' => $sheetsData
                ]);
            }
    
        } catch (\Exception $e) {
            Log::error('Google Sheets Exception:', [
                'message'    => $e->getMessage(),
                'trace'      => $e->getTraceAsString(),
                'data_sent'  => $sheetsData
            ]);
        }
    
        $crmData = [
            "name"    => $request->full_name,
            "email"   => $request->email,
            "phone"   => $request->phone,
            "pincode" => $request->pincode,
            "subject" => "Landing Inquiry",
            "message" => "Monthly Bill: " . $request->monthly_bill,
        ];
    
        try {
            $crmResponse = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post('https://crm.ksquareenergy.online/web/hook/78a0e8f2-1ce7-43ce-9469-a73b348f1f27', $crmData);
    
            Log::info('CRM Response:', [
                'status' => $crmResponse->status(),
                'body'   => $crmResponse->body(),
            ]);
    
            if (!$crmResponse->successful()) {
                Log::error('CRM Error:', [
                    'status'    => $crmResponse->status(),
                    'body'      => $crmResponse->body(),
                    'data_sent' => $crmData
                ]);
            }
    
        } catch (\Exception $e) {
            Log::error('CRM Exception:', [
                'message'    => $e->getMessage(),
                'trace'      => $e->getTraceAsString(),
                'data_sent'  => $crmData
            ]);
        }
    
        return response()->json([
            'status'   => true,
            'redirect' => route('thank-you')
        ]);
    }

    
        
    public function suryaghar()
    {
        $meta = "PM Surya Ghar Muft Bijli Yojana";
        $desc = "PM Surya Ghar Muft Bijli Yojana offers free electricity to households in India. Learn more about the scheme and eligibility. Contact us for details!";
        return view('suryaghar', ['meta' => $meta, 'desc' => $desc]);
    }
    
    // public function suryagharstore(Request $request) 
    // {
    //     $validatedData = $request->validate([
    //         'full_name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'phone' => 'required|string|max:20',
    //         'message' => 'nullable|string',
    //     ]);
    
    //     $suryagharForm = SuryagharStore::create($validatedData);
    
    //     return response()->json([
    //         'status' => true,
    //         'redirect' => route('thank-you')
    //     ]);
    // }
    
    public function suryagharstore(Request $request) 
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);
    
        $suryagharForm = SuryagharStore::create($validatedData);
    
        $sheetsData = [
            'form_type' => 'Suryaghar Inquiry',
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'inverter_type' => $request->inverter_type ?? '',
            'city' => $request->city ?? '',
            'message' => $request->message ?? '',
            'formattedDate' => now()->format('Y-m-d H:i:s'),
        ];
    
        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post('https://script.google.com/macros/s/AKfycbwoYpVETNt_mzbGcxGg_H0ktQdwE2oNHToCC9F68WJ-O3SbzxJyt_x9fp3Bdr6v7-Dlog/exec', $sheetsData);
    
            Log::info('Google Sheets Response:', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
    
            if (!$response->successful()) {
                Log::error('Google Sheets Error:', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                    'data_sent' => $sheetsData
                ]);
            }
    
        } catch (\Exception $e) {
            Log::error('Google Sheets Exception:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'data_sent' => $sheetsData
            ]);
        }
    
        return response()->json([
            'status' => true,
            'redirect' => route('thank-you')
        ]);
    }
    
    public function maharashtra()
    {
        $statessolar = StatesSolar::where('is_delete', '0')->first();
        // dd($statessolar);
        if ($statessolar) {
            $solar = Solar::where('is_delete', '0')->where('statessolar_id', $statessolar->id)->get();
            $solarfaq = SolarFaq::where('is_delete', '0')->where('statessolar_id', $statessolar->id)->get();
    // dd($solar);
            foreach ($solarfaq as $faq) {
                $faq->title_description = json_decode($faq->title_description, true);
            }
    
            $meta = $statessolar->meta_title;
            $desc = $statessolar->meta_description;
            $ogtitle = $statessolar->og_title;
            $ogdescription = $statessolar->og_description;
            $link = 'https://ksquareenergy.com/downloads';
    
            return view('solar-products-in-maharashtra', [
                'meta' => $meta,
                'desc' => $desc,
                'ogtitle' => $ogtitle,
                'ogdescription' => $ogdescription,
                'link' => $link,
                'statessolar' => $statessolar, 
                'solar' => $solar,
                'solarfaq' => $solarfaq
            ]);
        } else {
            abort(404, 'State Solar data not found');
        }
    }
    public function solarstate($url)
    {
        $statessolar = StatesSolar::where('url', $url)->where('is_delete', 0)->first();
    
        if (!$statessolar) {
            abort(404, 'State Solar data not found');
        }
    
        $solar = Solar::where('is_delete', 0)->where('statessolar_id', $statessolar->id)->get();
        $solarfaq = SolarFaq::where('is_delete', 0)->where('statessolar_id', $statessolar->id)->get();
        
        // dd($solar);

        foreach ($solarfaq as $faq) {
            $faq->title_description = json_decode($faq->title_description, true);
        }
        foreach ($solar as $solarpro) {
            $solarpro->proname_description = json_decode($solarpro->proname_description, true);
            
        }
        // dd($solar);
        $meta = $statessolar->meta_title ?? '';
        $desc = $statessolar->meta_description ?? '';
        $ogtitle = $statessolar->og_title ?? '';
        $ogdescription = $statessolar->og_description ?? '';
        $link = 'https://ksquareenergy.com/downloads';
    
        return view('solar-state', compact('meta', 'desc', 'ogtitle', 'ogdescription', 'link', 'statessolar', 'solar', 'solarfaq'));
    }
    
    public function solarcity($url)
    {
        $citysolar = CitySolar::where('url', $url)->where('is_delete', 0)->first();
    
        if (!$citysolar) {
            abort(404, 'City Solar data not found');
        }
        // dd($solar);

        // dd($solar);
        $meta = $citysolar->meta_title ?? '';
        $desc = $citysolar->meta_description ?? '';
    
        return view('solar-city', compact('meta', 'desc', 'citysolar'));
    }

    // public function maharashtra()
    // {
    //     $statessolar = StatesSolar::where('is_delete', '0')->get(); // Changed to get()
    //     $solar = Solar::where('is_delete', '0')->where('statessolar_id', $statessolar->first()->id ?? null)->get();
    //     $solarfaq = SolarFaq::where('is_delete', '0')->where('statessolar_id', $statessolar->first()->id ?? null)->get();
    //     // dd($solar);
    //     foreach ($solarfaq as $faq) {
    //         $faq->title_description = json_decode($faq->title_description, true);
    //     }
    //     $meta = $statessolar->meta_title;
    //     $desc = $statessolar->meta_description;
    //     $ogtitle = $statessolar->og_title;
    //     $ogdescription = $statessolar->og_description;
    //     $link = 'https://ksquareenergy.com/downloads';
        
    //     return view('solar-products-in-maharashtra', ['meta' => $meta, 'desc' => $desc,  'ogtitle' => $ogtitle, 'ogdescription' => $ogdescription,'link' => $link, 'statessolar' => $statessolar, 'solar' => $solar, 'solarfaq' => $solarfaq]);
    // }

    public function download(Request $request)
    {
        $meta = "";
        $desc = "";
        $link = '';
      
        
        return view('download_new',compact('meta','desc','link'));
    }
    public function pmsurya(Request $request)
    {
       
        
        $meta = "PM Surya Ghar Muft Bijli Yojana";
        $desc = "PM Surya Ghar Muft Bijli Yojana offers free electricity to households in India. Learn more about the scheme and eligibility. Contact us for details!";
        return view('suryaghar', ['meta' => $meta, 'desc' => $desc]);
        
        // $meta = "";
        // $desc = "";
        // $link = '';
        // return view('pmsurya',compact('meta','desc','link'));
    }
    public function blogs(Request $request)
    {
        $meta = "Read Solar Blogs by Ksquare Energy";
        $desc = "Ksquare Energy is Best Quality Solar Products Manufacturer based in Ahmedabad, Gujarat, India. Read regular Blogs related to Solar Industry Here.";
        $link = 'https://ksquareenergy.com/blogs';
        //return view('blogs', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
        
        $data =  Blog::orderBy('id','desc')->where('is_delete','0')->paginate(50);
        if($request->ajax()){
            $view = view('blogdata',compact('data'))->render();
            return response()->json(['html'=>$view]);
        }
        return view('bloglisting',compact('meta','data','desc','link'));
    }
    
    public function blog_details($id)
    {
        $link = 'https://ksquareenergy.com/' . $id;
        $data = Blog::where('is_delete', '0')->where('url', $id)->firstOrFail(); 
        $meta = $data->meta_title ?? 'Default Blog Meta Title';
        $desc = $data->meta_description ?? 'Default Blog Meta Description';
        $ogtitle = $data->og_title ?? 'Default OG Title';
        $ogdescription = $data->og_description ?? 'Default OG Description';
        $ogimage = $data->og_image ?? asset('default-image-path.jpg'); 
        $ogurl = 'https://www.ksquareenergy.com/blogs/' . $data->url;
    
        $blogfaq = BlogFaq::where('is_delete', '0')->where('blog_id', $data->id)->get();
        // dd($blogfaq);
        foreach ($blogfaq as $faq) {
            $faq->title_description = json_decode($faq->title_description, true);
        }
    
        return view('blog-detail', [
            'meta' => $meta,
            'desc' => $desc,
            'link' => $link,
            'data' => $data,
            'ogtitle' => $ogtitle,
            'ogdescription' => $ogdescription,
            'ogimage' => $ogimage,
            'ogurl' => $ogurl,
            'blogfaq' => $blogfaq,
        ]);
    }

    // public function blog_details($id)
    // {
       
    //     $link = 'https://ksquareenergy.com/'.$id;
    //     $data = Blog::where('is_delete','0')->where('url',$id)->first();
    //     $meta = $data->meta_title;
    //     $desc = $data->meta_description;
    //     $ogtitle = $data->og_title;
    //     $ogdescription = $data->og_description;
    //     $ogimage = $data->og_image;
    //     $ogurl = 'https://www.ksquareenergy.com/blogs' . $data->url;
    //     return view('blog-detail', ['meta' => $meta, 'desc' => $desc, 'link' => $link,'data'=>$data, 'ogtitle'=>$ogtitle, 'ogdescription'=>$ogdescription, 'ogimage'=>$ogimage, 'ogurl'=>$ogurl]);
    // }

    public function blog_details1()
    {
        return redirect('/blogs/top-reasons-why-solar-energy-is-a-cost-saving-investment-in-2022');
        // $meta = "Top reasons why solar energy is a cost-saving investment in 2022 | Ksquare Energy";
        // $desc = "Investment in Solar is cost-saving as, Over the years, electricity cost for the residential, commercial and industrial sector has risen up to a significant limit. And it's not surprising, as most of India’s power companies depend on fossil fuels.";
        // $link = 'https://ksquareenergy.com/Top%20reasons%20why%20solar%20energy%20is%20a%20cost-saving%20investment%20in%202022';
        // return view('blog1-detail', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }

    public function blog_details2()
    {
        return redirect('/blogs/impact-of-weather-conditions-on-solar-panels-and-their-efficiency');
        // $meta = "Impact of weather conditions on Solar Panels and their efficiency | Ksquare Energy";
        // $desc = "Solar panel work in Hear, Cold & Other Weathers: solar panels work in most weather conditions and constantly serve the power. However, the performance of solar panels depends on the weather condition. If weather varies then there might be the possibility that energy from solar panels can be varied. ";
        // $link = 'https://ksquareenergy.com/Impact%20of%20weather%20conditions%20on%20Solar%20Panels%20and%20their%20efficiency';
        // return view('blog2-detail', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }

    public function blog_details3()
    {
        return redirect('/blogs/know-the-benefits-of-installing-solar-power-system-for-the-industrial-sector');
        // $meta = "Know the Benefits of Installing Solar Power System for the Industrial Sector | Ksquare Energy";
        // $desc = "Benefits of Installing Solar Power System for the Industrial Sector: Traditional power sources are expensive, limited and major sources of pollution. On the other hand, solar power has an edge over all of it. It is the cleanest and cost-effective solution especially for meeting industrial demand.";
        // $link = 'https://ksquareenergy.com/Know%20the%20Benefits%20of%20Installing%20Solar%20Power%20System%20for%20the%20Industrial%20Sector';
        // return view('blog3-detail', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }

    public function blog_details4()
    {
        return redirect('/blogs/solar-energy-ultimate-guide');
        // $meta = "Solar Energy – Meaning, How it works, Advantages, Disadvantages & Impact on environment – Ksquare Energy";
        // $desc = "Solar energy is any kind of energy generated by the sun. Solar power works by converting sunlight to electricity & then it can be used or exported to the grid when it’s not needed.";
        // $link = 'https://www.ksquareenergy.com/solar-energy-ultimate-guide';
        // return view('blog4-detail', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function blog_details5()
    {
        return redirect('/blogs/solar-energy-alternative-to-fossil-fuel');
        // $meta = "Solar Energy is an alternative solution – Ksquare Energy";
        // $desc = "Solar energy is a clean form of energy that will meet the needs of future generations. It's an alternative to fossil fuels and a clean and environmentally beneficial source to rely on";
        // $link = 'https://www.ksquareenergy.com/solar-energy-alternative-to-fossil-fuel';
        // return view('blog5-detail', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    
    public function blog_details6()
    {
        return redirect('/blogs/debunking-6-myths-about-solar-energy');
        // $meta = "Debunking 6 Myths about Solar Energy – Ksquare Energy";
        // $desc = "You shouldn't judge a book by its cover, and here are 6 myths about solar energy you should know before investing or installing it.";
        // $link = 'https://www.ksquareenergy.com/debunking-6-myths-about-solar-energy';
        // return view('blog6-detail', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function blog_details7()
    {
        return redirect('/blogs/solar-rooftop-panel-for-home');
        // $meta = "Solar Rooftop Panel for Home: A Complete Guide to Rooftop Solar Systems";
        // $desc = "Get the perfect solar rooftop panels for your home with Ksquare Energy. Their experts will help you select the right system and provide hassle-free installation.";
        // $link = 'https://www.ksquareenergy.com/solar-rooftop-panel-for-home';
        // return view('blog7-detail', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function blog_details8()
    {
        return redirect('/blogs/tips-for-investing-in-commercial-solar-panels');
        // $meta = "The Ultimate Guide to Investing in Commercial Solar Panels";
        // $desc = "Learn about the installation of solar panels for commercial buildings, the advantages of solar energy & how Ksquare Energy can assist you in harnessing its power.";
        // $link = 'https://www.ksquareenergy.com/tips-for-investing-in-commercial-solar-panels';
        // return view('blog8-detail', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    
      public function blog_details9()
    {
        return redirect('/blogs/complete-guide-to-industrial-solar-panels-and-systems');
        // $meta = "A Complete Guide to Industrial Solar Panels and Systems";
        // $desc = "Explore the advantages of industrial solar panels, learn about installation methods, and evaluate their efficiency in our all-inclusive business guide.";
        // $link = 'https://www.ksquareenergy.com/complete-guide-to-industrial-solar-panels-and-systems';
        // return view('blog9-detail', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    public function blog_details10()
    {
        return redirect('/blogs/solar-panel-installation-common-questions-answered');
        // $meta = "Solar Panel Installation: Common Questions Answered";
        // $desc = " Find answers to common solar panel installation questions: How do they work? Financial benefits? Cloudy day performance? Roof suitability? Get clear answers in our blog.";
        // $link = 'https://www.ksquareenergy.com/solar-panel-installation-common-questions-answered';
        // return view('blog10-detail', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    }
    
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function categories()
    {
        $category = Category::where('deleted_at', null)->get();
        return $category;
    }

    // public function productsList($nm)
    // {
    //     $cats = Category::where('seourl', $nm)->first();
    //     // echo $cats->id;exit;
    //     $list = Products::where('category_id', $cats->id)->get();

    //     $name =  $cats->name;
    //     $meta = $cats->seo_title;
    //     $desc = $cats->seo_desc;

    //     return view('productsList', ['list' => $list, 'meta' => $meta, 'desc' => $desc,'cats'=>$cats, 'name' => $name]);
    // }
    
    // public function productDetails($name)
    // {
    //     $list = Products::where('seourl', $name)->first();
    //     $meta = $list->seo_title;
    //     $desc = $list->seo_desc;
    //     // echo json_encode($list);exit;
    //     return view('productDetails', ['list' => $list, 'meta' => $meta, 'desc' => $desc]);
    // }
    
    public function productsList($nm)
    {
        $cats = Category::where('seourl', $nm)->first();
    
        if (!$cats) {
            abort(404, 'Category not found');
        }
    
        $list = Products::where('category_id', $cats->id)->where('deleted_at', null)->get();
    
        $name = $cats->name;
        $meta = $cats->seo_title;
        $desc = $cats->seo_desc;
    
        
        if ($nm === 'ksquare-inverter') {
            return view('ksquare-inverter-list', [
                'list' => $list,
                'meta' => $meta,
                'desc' => $desc,
                'cats' => $cats,
                'name' => $name
            ]);
        }
    
        return view('productsList', [
            'list' => $list,
            'meta' => $meta,
            'desc' => $desc,
            'cats' => $cats,
            'name' => $name
        ]);
    }

    public function productDetails($name)
    {
        $product = Products::where('seourl', $name)->first();
    
        if (!$product) {
            return redirect()->route('home');
        }
        $meta = $product->seo_title;
        $desc = $product->seo_desc;
    
        $tabData = ProductsTabing::where('product_id', $product->id)->where('deleted_at', null)->get();
    
        if ($product->category && $product->category->seourl === 'ksquare-inverter') {
            return view('ksquare-inverter-detail', [
                'product' => $product,
                'meta' => $meta,
                'desc' => $desc,
                'tabData' => $tabData, 
            ]);
        }
        return view('productDetails', [
            'list' => $product,
            'meta' => $meta,
            'desc' => $desc
        ]);
    }


    // public function ksquare_inverter()
    // {
    //     $meta = "";
    //     $desc = "";
    //     $link = 'https://ksquareenergy.com/ksquare-inverter';
    //     return view('ksquare-inverter-list', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    // }
    
    // public function ksquare_inverter_detail()
    // {
    //     $meta = "";
    //     $desc = "";
    //     $link = 'https://ksquareenergy.com/ksquare-inverter-detail';
    //     return view('ksquare-inverter-detail', ['meta' => $meta, 'desc' => $desc, 'link' => $link]);
    // }
    
    
    
    // public function contactSubmit(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required',
    //         'phone' => 'required|min:10|max:10',
    //         'email' => 'required|email',
    //         'subject' => 'required',
    //         'message' => 'required',
    //     ]);
    
    //     $info = [
    //         'name' => $validatedData['name'],
    //         'phone' => $validatedData['phone'],
    //         'email' => $validatedData['email'],
    //         'subject' => $validatedData['subject'],
    //         'message' => $validatedData['message'],
    //     ];
    
    //     //dd($info);
    //     DB::table('contacts')->insert($info);
    //     //return back()->with('success', 'Form submitted successfully!');
            
    //     $client = new Client();
    //     $response = $client->post('https://sheetdb.io/api/v1/d92197qk6lv20', [
    //         'json' => [$info]
    //     ]);
    //     $responseData = json_decode($response->getBody(), true);
    
    //     if ($responseData['created'] == 1) {
    //         return redirect('thank-you')->with('success', 'Your message has been submitted successfully!');
    //     } else {
    //         return redirect()->back()->with('error', 'Failed to submit your message. Please try again later.');
    //     }
    // }
    
// comment by yamini 15-07-2025    

    // public function contactSubmit(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'phone' => 'required|string|max:20',
    //         'message' => 'required|string',
    //         'subject' => 'required|string',
    //     ]);
    //     $info = [
    //         'name' => $validatedData['name'],
    //         'phone' => $validatedData['phone'],
    //         'email' => $validatedData['email'],
    //         'subject' => $validatedData['subject'],
    //         'message' => $validatedData['message'],
    //     ];
    
    //     //dd($info);
    //     DB::table('contacts')->insert($info);
    
    //     // Prepare payload
    //     $requestData = [
    //         "customer_type" => "Business",
    //         "company_name" => "Intelliworkz",
    //         "name" => $validatedData['name'],
    //         "email" => $validatedData['email'],
    //         "country_code" => "+91",
    //         "phone_no" => $validatedData['phone'],
    //         "address" => "Surat, Gujarat,395009",
    //         "pincode" => "395009",
    //         "country_name" => "India",
    //         "state_name" => "Gujarat",
    //         "city_name" => "Surat",
    //         "whatsapp_no" => $validatedData['phone'],
    //         "whatsapp_country_code" => "+91",
    //         "lead_category" => "B2C Solar Projects",
    //         "lead_stage" => "New Lead",
    //         "lead_source" => "Website",
    //         "gst_no" => "",
    //         "description" => "Subject: ".$validatedData['subject']." Message: ".$validatedData['message'],
    //     ];
        
    //     // dd($requestData);
        
    //     // Call Quickest API
    //     $response = Http::withHeaders([
    //         'quickest-key' => 'token=04981697e1d1267fef5f0afc3cecce5a',
    //         'xemail' => 'info@ksquareenergy.com',
    //     ])->post('https://app.quickestimate.co/api/import-export/header-store-leads-to-quickest', $requestData);
    
    //     // Handle response
    //   if ($response->successful()) {
    //         if ($request->wantsJson()) {
    //             return response()->json([
    //                 'success' => true,
    //                 'message' => 'Lead successfully stored in Quickest CRM.',
    //                 'sent_data' => $requestData,
    //                 'quickest_response' => $response->json(),
    //             ]);
    //         }
    //         return redirect()->route('thank-you')->with('success', 'Lead successfully stored in Quickest CRM.');
    //     } else {
    //         if ($request->wantsJson()) {
    //             return response()->json([
    //                 'success' => false,
    //                 // 'message' => 'Failed to store lead in Quickest CRM.',
    //                 'sent_data' => $requestData,
    //                 'quickest_response' => $response->json(),
    //             ], $response->status());
    //         }
    //         return redirect()->back()->with('error', 'Thank you for showing interest, your inquiry already exists in the Ksquare Database, 
    //         please connect with us for an Immediate Response. +91 74868 10016');
    //     }


    // }
// end comment by yamini 15-07-2025

    public function contactSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:255',
            'phone'    => 'required|min:10|max:15',
            'subject'  => 'required|string|max:255',
            'pincode'  => 'nullable|max:255',
            'city'  => 'nullable|string|max:255',
            'state'  => 'nullable|string|max:255',
            'message' => [
                'nullable','string','max:500',
                function ($attribute, $value, $fail) {
                    if (!$value) return;
                    if (preg_match('/<[^>]*>/i', $value)) {
                        $fail('HTML tags are not allowed.');
                    }
                    if (preg_match('/<[^>]*>/', $value)) {
                        $fail('HTML tags are not allowed.');
                    }
    
                    if (preg_match('/https?:\/\/|www\./i', $value)) {
                        $fail('Links are not allowed in message.');
                    }
    
                    if (preg_match('/[\x{0400}-\x{04FF}]/u', $value)) {
                        $fail('Invalid characters detected.');
                    }
    
                    $spamWords = ['seo','crypto','viagra','casino','furniture','wholesale'];
                    $count = 0;
    
                    foreach ($spamWords as $word) {
                        if (stripos($value, $word) !== false) {
                            $count++;
                        }
                    }
                    if ($count >= 2) {
                        $fail('Spam content detected.');
                    }
    
                    preg_match_all('/https?:\/\/|www\./i', $value, $matches);
                    if (count($matches[0]) > 1) {
                        $fail('Too many links not allowed.');
                    }
                }
            ],
            'source'   => 'nullable|string|max:255',
        ]);
        
        $crmPayload = [
            'inquiry_type' => $validatedData['source'] ?? 'General Inquiry',
            'name'         => $validatedData['name'],
            'email'        => $validatedData['email'],
            'phone'        => $validatedData['phone'],
            'pincode'      => $validatedData['pincode'],
            'subject'      => $validatedData['subject'],
            'message'      => $validatedData['message'],
        ];

        $crmStored = false;

        try {
            $response = Http::post(
                'https://crm.ksquareenergy.online/web/hook/78a0e8f2-1ce7-43ce-9469-a73b348f1f27',
                $crmPayload
            );

            $responseData = $response->json();

            // dd(['sent' => $crmPayload, 'response' => $responseData]);

            if (isset($responseData['created']) && $responseData['created'] == 1) {
                $crmStored = true;
            }
        } catch (\Exception $e) {
            Log::error('CRM submission failed: ' . $e->getMessage());
            $crmStored = false;
        }

        if (!$crmStored) {
            DB::table('contacts')->insert([
                'name'       => $validatedData['name'],
                'email'      => $validatedData['email'],
                'phone'      => $validatedData['phone'],
                'pincode'    => $validatedData['pincode'],
                'subject'    => $validatedData['subject'],
                'state'       => $validatedData['state'],
                'city'       => $validatedData['city'],
                'message'    => $validatedData['message'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
        //try {
            $sheetData = [
                'form_type' => $validatedData['source'] ?? 'General Inquiry',
                'name'      => $validatedData['name'],
                'product_name' => null,
                'email'     => $validatedData['email'],
                'phone'     => $validatedData['phone'],
                'state'     => $validatedData['state'],
                'city'      => $validatedData['city'],
                'pincode'   => $validatedData['pincode'],
                'subject'   => $validatedData['subject'],
                'message'   => $validatedData['message'] ?? '',
                'date'      => now()->format('Y-m-d H:i:s')
            ];

            $response = Http::asJson()->post(
                'https://script.google.com/macros/s/AKfycbw79YiS46Ms4ALbqQaE4pmmpKHbOzoQ-EB8tfI2wPdLcr-UDOo53YBf20uf-PZgKCOVgg/exec',
                $sheetData
            );

            // Http::timeout(15)
            //     ->asForm()
            //     ->post(
            //         'https://script.google.com/macros/s/AKfycbxwJbYLReG7yHSCPqdW1xsbbtDzKU36y-oQHk5h0uGwWGGCByAMxneRd3RgTouAOx6bUg/exec',
            //         $sheetData
            //     );
        
        // } catch (\Exception $e) {
        //     Log::error('Google Sheet Error: ' . $e->getMessage());
        // }

        return redirect()->route('thank-you')->with('success', 'Your inquiry has been submitted successfully!');
    }
 




    public function inquirySubmit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'product_name' => 'required',
            'phone' => 'required|min:10|max:15',
            'email' => 'required|email',
            'city' => 'required',
            'message' => 'nullable',
        ]);
    
        $info = [
            'name' => $validatedData['name'],
            'product_name' => $validatedData['product_name'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'city' => $validatedData['city'],
            'message' => $validatedData['message'],
        ];
    
        //dd($info);
        DB::table('inquiries')->insert($info);
        //return back()->with('success', 'Form submitted successfully!');
        
        $requestData = [
            "customer_type" => "Business",
            "company_name" => "Intelliworkz",
            "name" => $validatedData['name'],
            "email" => $validatedData['email'],
            "country_code" => "+91",
            "phone_no" => $validatedData['phone'],
            "address" => "Ahmedabad, Gujarat,395009",
            "pincode" => "395009",
            "country_name" => "India",
            "state_name" => "Gujarat",
            "city_name" => $validatedData['city'],
            "whatsapp_no" => $validatedData['phone'],
            "whatsapp_country_code" => "+91",
            "lead_category" => "B2B Solar Projects",
            "lead_stage" => "New Lead",
            "lead_source" => "Website",
            "gst_no" => "",
            "description" => "Product Name: ".$validatedData['product_name']." AND Message: ".$validatedData['message'],
        ];
        //dd($requestData);
        
        // Call Quickest API
        $response = Http::withHeaders([
            'quickest-key' => 'token=04981697e1d1267fef5f0afc3cecce5a',
            'xemail' => 'info@ksquareenergy.com',
        ])->post('https://app.quickestimate.co/api/import-export/header-store-leads-to-quickest', $requestData);
        //dd($response->successful());
        
       try {
            $sheetData = [
                'form_type'    => 'Product Inquiry',
                'name'         => $validatedData['name'],
                'product_name' => $validatedData['product_name'],
                'email'        => $validatedData['email'],
                'phone'        => $validatedData['phone'],
                'city'         => $validatedData['city'],
                'pincode'      =>  '',
                'subject'      =>  '',
                'message'      => $validatedData['message'] ?? '',
                'date'         => now()->format('Y-m-d H:i:s')
            ];
        
            $responseSheet = Http::timeout(15)
                ->asForm()
                ->post(
                    'https://script.google.com/macros/s/AKfycbxwJbYLReG7yHSCPqdW1xsbbtDzKU36y-oQHk5h0uGwWGGCByAMxneRd3RgTouAOx6bUg/exec',
                    $sheetData
                );
        
        } catch (\Exception $e) {
            dd($e->getMessage());
        }


        if ($response->successful()) {
            if ($request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Lead successfully stored in Quickest CRM.',
                    'sent_data' => $requestData,
                    'quickest_response' => $response->json(),
                ]);
            }
            return redirect()->route('thank-you');
            // return redirect()->back()->with('success', 'Lead successfully stored in Quickest CRM.');
        } else {
            if ($request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'sent_data' => $requestData,
                    'quickest_response' => $response->json(),
                ], $response->status());
            }
            return redirect()->back()->with('success', 'Thank you for showing interest, your inquiry already exists in the Ksquare Database, 
            please connect with us for an Immediate Response. +91 74868 10016');
        }

    }
    
    
    public function landingSubmit(Request $request) 
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'inverter_type' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);
    
        $landingForm = Landing::create($validatedData);
    
        $sheetsData = [
            'form_type' => 'Landing Inquiry',
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'inverter_type' => $request->inverter_type,
            'city' => $request->city,
            'message' => $request->message ?? '',
            'formattedDate' => now()->format('Y-m-d H:i:s'),
        ];
    
        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post('https://script.google.com/macros/s/AKfycbwoYpVETNt_mzbGcxGg_H0ktQdwE2oNHToCC9F68WJ-O3SbzxJyt_x9fp3Bdr6v7-Dlog/exec', $sheetsData);
    
            Log::info('Google Sheets Response:', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
    
            if (!$response->successful()) {
                Log::error('Google Sheets Error:', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                    'data_sent' => $sheetsData
                ]);
            }
    
        } catch (\Exception $e) {
            Log::error('Google Sheets Exception:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'data_sent' => $sheetsData
            ]);
        }
    
        return response()->json([
            'status' => true,
            'redirect' => route('thank-you')
        ]);
    }
    
    
    public function citySubmit(Request $request)
    {
        // Validate form inputs
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'pincode' => 'required|string|max:10',
            'customer_type' => 'required|string',
            'electricity_bill' => 'required|string',
            'city_name' => ['required', Rule::exists('citysolar', 'city_name')],
        ]);

        // Store data in database
        $info = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'pincode' => $validatedData['pincode'],
            'customer_type' => $validatedData['customer_type'],
            'electricity_bill' => $validatedData['electricity_bill'],
            'city_name' => $validatedData['city_name'],
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('citiesstore')->insert($info);

        // Prepare payload for Quickest API
        $requestData = [
            "customer_type" => $validatedData['customer_type'],
            "company_name" => "Intelliworkz",
            "name" => $validatedData['name'],
            "email" => $validatedData['email'],
            "country_code" => "+91",
            "phone_no" => $validatedData['phone'],
            "address" => "Surat, Gujarat,395009",
            "pincode" => $validatedData['pincode'],
            "country_name" => "India",
            "state_name" => "Gujarat",
            "city_name" => "Surat",
            "whatsapp_no" => $validatedData['phone'],
            "whatsapp_country_code" => "+91",
            "lead_category" => "City Solar Projects",
            "lead_stage" => "New Lead",
            "lead_source" => "Website Solar Company in " . $validatedData['city_name'],
            "gst_no" => "",
            "description" => "Customer Type: " . $validatedData['customer_type'] . ", Electricity Bill: " . $validatedData['electricity_bill'],
        ];
        // dd($requestData);

        // Call Quickest API
        $response = Http::withHeaders([
            'quickest-key' => 'token=04981697e1d1267fef5f0afc3cecce5a',
            'xemail' => 'info@ksquareenergy.com',
        ])->post('https://app.quickestimate.co/api/import-export/header-store-leads-to-quickest', $requestData);

        // Handle API response
        if ($response->successful()) {
            return redirect()->route('thank-you')->with('success', 'Lead successfully stored in Quickest CRM.');
        } else {
            return redirect()->back()->with('error', 'Thank you for showing interest, your inquiry already exists in the Ksquare Database. Please connect with us for an immediate response: +91 74868 10016');
        }
    }
    
public function calculator(){
        $meta = 'Solar Calculator | Free Solar Calculation Tool ';
        $desc = 'Use the Ksquare Solar Calculator to estimate solar panel costs, system size, required area, and ROI—plan your solar installation with ease.';
        return view('calculator', ['meta' => $meta, 'desc' => $desc]);
    }
    
    public function generateQuotationNumber()
    {
        $prefix = 'KSQ' . Carbon::now()->format('Ymd');
        $maxAttempts = 10;
    
        for ($attempt = 0; $attempt < $maxAttempts; $attempt++) {
            // Generate 6-character random string using md5
            $random = strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 6));
            $quotationNo = $prefix . $random;
    
            // Check if already exists
            if (!QuotationNumber::where('quotation_no', $quotationNo)->exists()) {
                // Store in DB
                QuotationNumber::create(['quotation_no' => $quotationNo]);
    
                // Return response
                return response()->json(['quotation_no' => $quotationNo], 200);
            }
        }
    
        Log::error('Failed to generate unique quotation number after ' . $maxAttempts . ' attempts');
        return response()->json(['error' => 'Unable to generate a unique quotation number.'], 500);
    }

    /**
     * Save form data from calculator
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function saveForm(Request $request)
    {
        try {
            $validated = $request->validate([
                'quotation_no' => 'required|string',
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'capacity' => 'required|numeric',
                'yearly_savings' => 'required|numeric',
                'roi' => 'required|numeric',
                'savings_25yrs' => 'required|numeric',
                'daily_generation' => 'required|numeric',
                'yearly_generation' => 'required|numeric',
                'co2_saving' => 'required|numeric',
                'tree_equivalent' => 'required|numeric',
                'panels' => 'required|integer',
                'subsidy' => 'required|numeric',
                'total_cost' => 'required|numeric',
                'pincode' => 'required|string|max:6', 
            ]);
    
            // dd($request->all());
    
            $customerDetail = CustomerDetail::create([
                'quotation_no' => $request->quotation_no,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'capacity' => $request->capacity,
                'yearly_savings' => $request->yearly_savings,
                'roi' => $request->roi,
                'savings_25yrs' => $request->savings_25yrs,
                'daily_generation' => $request->daily_generation,
                'yearly_generation' => $request->yearly_generation,
                'co2_saving' => $request->co2_saving,
                'tree_equivalent' => $request->tree_equivalent,
                'panels' => $request->panels,
                'subsidy' => $request->subsidy,
                'project_cost' => $request->total_cost,
                'landed_cost' => $request->total_cost - $request->subsidy,
                'pincode' => $request->pincode, 
                'datetime' => Carbon::now()
            ]);
    
            try {
                Storage::put(
                    "forms/{$request->quotation_no}.json",
                    json_encode($request->all())
                );
            } catch (\Exception $e) {
                Log::warning("Failed to store JSON backup: " . $e->getMessage());
            }
    
            try {
                $client = new Client();
                $webhookData = [
                    'inquiry_type' => 'Calcultor Page Inquiry',
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'pincode' => $request->pincode,
                    'subject' => '',
                    'message' => ''
                ];
            
                $response = $client->post('https://crm.ksquareenergy.online/web/hook/78a0e8f2-1ce7-43ce-9469-a73b348f1f27', [
                    'json' => $webhookData
                ]);
            
                // $body = $response->getBody()->getContents(); // Read response
                \Log::info('CRM response:', ['response' => $body]);
            
                Log::info('Webhook sent for calculator form', [
                    'status' => $response->getStatusCode(),
                    'response_body' => $body,
                    'data_sent' => $webhookData
                ]);
            } catch (\Exception $e) {
                Log::error('Webhook Error:', [
                    'message' => $e->getMessage(),
                    'data_sent' => $webhookData,
                ]);
            }

    
            return response()->json([
                'status' => 'success',
                'message' => 'Form data saved successfully',
                'quotation_no' => $request->quotation_no
            ]);
        } catch (\Exception $e) {
            Log::error("Error saving form data: " . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to save form data',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    // Generate PDF (Blade View)
    // public function generatePDF($quotation_no)
    // {
    //     $data = \App\Models\CustomerDetail::where('quotation_no', $quotation_no)->firstOrFail();
    //     return view('pdf.quotation', compact('data', 'quotation_no'));
    // }
     
     
    // end comment by yamini 17-07-2025
     
    // public function saveForm(Request $request)
    // {
    //     try {
    //         $validated = $request->validate([
    //             'quotation_no' => 'required|string',
    //             'name' => 'required|string|max:255',
    //             'phone' => 'required|string|max:20',
    //             'email' => 'required|email|max:255',
    //             'capacity' => 'required|numeric',
    //             'yearly_savings' => 'required|numeric',
    //             'roi' => 'required|numeric',
    //             'savings_25yrs' => 'required|numeric',
    //             'daily_generation' => 'required|numeric',
    //             'yearly_generation' => 'required|numeric',
    //             'co2_saving' => 'required|numeric',
    //             'tree_equivalent' => 'required|numeric',
    //             'panels' => 'required|integer',
    //             'subsidy' => 'required|numeric',
    //             'total_cost' => 'required|numeric',
    //         ]);
    //         $customerDetail = CustomerDetail::create([
    //             'quotation_no' => $request->quotation_no,
    //             'name' => $request->name,
    //             'phone' => $request->phone,
    //             'email' => $request->email,
    //             'capacity' => $request->capacity,
    //             'yearly_savings' => $request->yearly_savings,
    //             'roi' => $request->roi,
    //             'savings_25yrs' => $request->savings_25yrs,
    //             'daily_generation' => $request->daily_generation,
    //             'yearly_generation' => $request->yearly_generation,
    //             'co2_saving' => $request->co2_saving,
    //             'tree_equivalent' => $request->tree_equivalent,
    //             'panels' => $request->panels,
    //             'subsidy' => $request->subsidy,
    //             'project_cost' => $request->total_cost,
    //             'landed_cost' => $request->total_cost - $request->subsidy,
    //             'datetime' => Carbon::now()
    //         ]);
    
    //         try {
    //             Storage::put(
    //                 "forms/{$request->quotation_no}.json",
    //                 json_encode($request->all())
    //             );
    //         } catch (\Exception $e) {
    //             Log::warning("Failed to store JSON backup: " . $e->getMessage());
    //         }
    
    //         try {
    //             $client = new Client();
    //             $webhookData = [
    //                 'name' => $request->name,
    //                 'phone' => $request->phone,
    //                 'email' => $request->email,
    //                 'pincode' => $request->pincode,
    //             ];
    //             $response = $client->post('https://f2ac-122-162-239-179.ngrok-free.app/create-lead', [
    //                 'json' => $webhookData
    //             ]);
    
    //             Log::info('Webhook sent for calculator form', [
    //                 'status' => $response->getStatusCode(),
    //                 'response' => $response->getBody()->getContents()
    //             ]);
    //         } catch (\Exception $e) {
    //             Log::error('Webhook Error:', [
    //                 'message' => $e->getMessage(),
    //                 'data_sent' => $webhookData,
    //             ]);
    //         }
    
    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'Form data saved successfully',
    //             'quotation_no' => $request->quotation_no
    //         ]);
    //     } catch (\Exception $e) {
    //         Log::error("Error saving form data: " . $e->getMessage());
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'Failed to save form data',
    //             'error' => $e->getMessage()
    //         ], 500);
    //     }
    // }
    
    // end comment by yamini 17-07-2025
     
    // public function saveForm(Request $request)
    // {
    //     try {
    //         // Validate incoming request
    //         $validated = $request->validate([
    //             'quotation_no' => 'required|string',
    //             'name' => 'required|string|max:255',
    //             'phone' => 'required|string|max:20',
    //             'email' => 'required|email|max:255',
    //             'capacity' => 'required|numeric',
    //             'yearly_savings' => 'required|numeric',
    //             'roi' => 'required|numeric',
    //             'savings_25yrs' => 'required|numeric',
    //             'daily_generation' => 'required|numeric',
    //             'yearly_generation' => 'required|numeric',
    //             'co2_saving' => 'required|numeric',
    //             'tree_equivalent' => 'required|numeric',
    //             'panels' => 'required|integer',
    //             'subsidy' => 'required|numeric',
    //             'total_cost' => 'required|numeric',
    //         ]);
            
    //         $customerDetail = CustomerDetail::create([
    //             'quotation_no' => $request->quotation_no,
    //             'name' => $request->name,
    //             'phone' => $request->phone,
    //             'email' => $request->email,
    //             'capacity' => $request->capacity,
    //             'yearly_savings' => $request->yearly_savings,
    //             'roi' => $request->roi,
    //             'savings_25yrs' => $request->savings_25yrs,
    //             'daily_generation' => $request->daily_generation,
    //             'yearly_generation' => $request->yearly_generation,
    //             'co2_saving' => $request->co2_saving,
    //             'tree_equivalent' => $request->tree_equivalent,
    //             'panels' => $request->panels,
    //             'subsidy' => $request->subsidy,
    //             'project_cost' => $request->total_cost,
    //             'landed_cost' => $request->total_cost - $request->subsidy,
    //             'datetime' => Carbon::now()
    //         ]);
        
    //         // Create backup JSON file
    //         try {
    //             Storage::put(
    //                 "forms/{$request->quotation_no}.json",
    //                 json_encode($request->all())
    //             );
    //         } catch (Exception $e) {
    //             Log::warning("Failed to store JSON backup for quotation {$request->quotation_no}: " . $e->getMessage());
    //         }
        
    //         return response()->json([
    //             'status' => 'success',
    //             'message' => 'Form data saved successfully',
    //             'quotation_no' => $request->quotation_no
    //         ]);
            
    //     } catch (Exception $e) {
    //         Log::error("Error saving form data: " . $e->getMessage());
    //         return response()->json([
    //             'status' => 'error',
    //             'message' => 'Failed to save form data',
    //             'error' => $e->getMessage()
    //         ], 500);
    //     }
    // }
    
    /**
     * Generate PDF from customer data
     *
     * @param string $quotation_no
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($quotation_no)
    {
        try {
            // Try to get the data from the database first
            $customerDetail = CustomerDetail::where('quotation_no', $quotation_no)->first();
            
            if ($customerDetail) {
                $data = $customerDetail->toArray();
            } else {
                // Fallback to JSON file if not in database
                $jsonPath = "forms/{$quotation_no}.json";
                
                if (!Storage::exists($jsonPath)) {
                    Log::error("Form data not found for quotation: {$quotation_no}");
                    return response()->view('errors.404', ['message' => 'Quotation data not found'], 404);
                }
                
                $json = Storage::get($jsonPath);
                $data = json_decode($json, true);
                
                if (json_last_error() !== JSON_ERROR_NONE) {
                    Log::error("Invalid JSON data for quotation: {$quotation_no}");
                    return response()->view('errors.500', ['message' => 'Invalid quotation data'], 500);
                }
            }
            
            // Check if we have required data
            if (!isset($data['name']) || !isset($data['capacity'])) {
                Log::error("Missing required data for quotation: {$quotation_no}");
                return response()->view('errors.500', ['message' => 'Incomplete quotation data'], 500);
            }
            
            // Add additional data needed for PDF
            $data['formatted_date'] = Carbon::parse($data['datetime'] ?? now())->format('d F, Y');
            $data['quotation_no'] = $quotation_no;
            
            // Load the PDF view
            $pdf = PDF::loadView('quotation', compact('data'));
            
            // Configure PDF options if needed
            $pdf->setPaper('a4');
            $pdf->setOption('isHtml5ParserEnabled', true);
            $pdf->setOption('isRemoteEnabled', true);
            
            // Stream the PDF to the browser
            return $pdf->stream("K-Square_Solar_Quotation_{$quotation_no}.pdf");
            
        } catch (Exception $e) {
            Log::error("PDF generation error for quotation {$quotation_no}: " . $e->getMessage());
            return response()->view('errors.500', [
                'message' => 'Error generating PDF. Please try again or contact support.'
            ], 500);
        }
    }
    
    public function testgeneratepdf()
    {
        
        return view('pdf-form-ouput');
    }
    
    
 
    public function testmail()
    {
      
         $data['thankyou'] = 'Thank you Yamini Patel for reaching out to Ksquare Energy. We have received your inquiry. We will contact you soon for the same.';

            try {
                Mail::send('mail.thankyou', $data, function ($message) {
                    $message->to('webdeveloper3.intelliworkz@gmail.com')
                            ->subject('Thank You');
                });
        
                echo "Email sent successfully!";
            } catch (\Exception $e) {
                \Log::error('Email error: ' . $e->getMessage());
                echo 'Failed to send email. Error: ' . $e->getMessage();
            }
    }

    
     


//   public function inquirySubmit()
//     {
//         // unset($_POST['_token']);
//         $array = $_POST;

//         // echo json_encode($_POST);
//         // exit;

//         $name = $_POST['name'];
//         $email = $_POST['email'];
//         $phone = $_POST['phone'];
//         $city = $_POST['city'];
//         $message = $_POST['message'];
//         // echo json_encode($_POST);
//         // exit;

//         if (Inquiry::create($array)) {
//             $data = "
//             New Inquiry Form Submitted \n
//             Contact Details Are Here,\n
//             Name - $name
//             Email - $email
//             Contact Number - $phone
//             City - $city
//             Message - $message \n
//             From,
//             Team Ksquare Energy
//             ";

//             Mail::raw($data, function ($message) {
//                 $message->to(array("info@ksquareenergy.com"))
//                   ->subject('Inquiry Form Submitted in Ksquare Energy');
//               });

//             return redirect('thank-you');
//         } else {
//             return back()->with("error", "Please try again!");
//         }
//     }


  

    public function crmtestsubmit(Request $request)
    {
        $consumerNo = $request->input('consumer_no');
        
        if (empty($consumerNo)) {
            return response()->json([
                'error' => 'Consumer number is required'
            ], 400);
        }

        // Odoo API Configuration
        $odooUrl = "https://ksquare-energy-pvt-ltd.odoo.com/jsonrpc";
        $db = "ksquare-energy-pvt-ltd";
        $uid = 221;
        $token = "326cf804d9f23d4ce95be052820a7b393179f094";

        $client = new Client();

        // Prepare the request body
        $body = [
            "jsonrpc" => "2.0",
            "method"  => "call",
            "params"  => [
                "service" => "object",
                "method"  => "execute_kw",
                "args"    => [
                    $db, 
                    $uid, 
                    $token,
                    "project.task", 
                    "search_read",
                    [
                        [["x_studio_consumer_no_mis_1", "=", $consumerNo]]
                    ],
                    [
                        "fields" => [
                              "id",
                              "x_studio_consumer_name_mis",
                              "x_studio_consumer_mo_no_mis",
                              "x_studio_pv_capacity_kw",
                              "x_studio_20_mis_stage",
                              "x_studio_entry_date",
                              "x_studio_application_number",
                              "x_studio_file_person_1",
                              "x_studio_file_person_contact_no",
                              "x_studio_related_sales_order",
                              "x_studio_invoice_pdf_url",
                              "x_studio_consumer_r_due",
                              "stage_id"

                        ],
                        "limit" => 1
                    ]
                ]
            ],
            "id" => 2
        ];

        try {
            // Make the API request
            $response = $client->post($odooUrl, [
                'json' => $body,
                'timeout' => 30,
                'verify' => true
            ]);

            $result = json_decode($response->getBody()->getContents(), true);

            // Return the raw Odoo response as JSON
            header('Content-Type: application/json');
            echo json_encode($result);
            exit;

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            \Log::error('Odoo API Request Error: ' . $e->getMessage());
            header('Content-Type: application/json');
            echo json_encode([
                'error' => 'Failed to connect to Odoo API: ' . $e->getMessage()
            ]);
            exit;
        } catch (\Exception $e) {
            \Log::error('General Error: ' . $e->getMessage());
            header('Content-Type: application/json');
            echo json_encode([
                'error' => 'An error occurred: ' . $e->getMessage()
            ]);
            exit;
        }
    }

    
    
    public function crmapi(){
        $meta = "";
        $desc = "";
       return view('crmtest', ['meta' => $meta, 'desc' => $desc]);
    //   return view('crmapi', ['meta' => $meta, 'desc' => $desc]);
    }
    public function eventlist() {
        $meta = "";
        $desc = "";
        $events = Events::whereNull('deleted_at')->get()->groupBy('activity');
        return view('eventlist', [
            'meta' => $meta, 
            'desc' => $desc,
            'events' => $events
        ]);
    }

    
    public function crmapisubmit(Request $request){
        $result = [];
        $meta = "";
        $desc = "";
        $consumerNo = $request->input('consumer_no'); // e.g., 35501077094
        $odooUrl = "https://ksquare-energy-pvt-ltd.odoo.com/jsonrpc";
        $db = "ksquare-energy-pvt-ltd";
        $uid = 221; // Replace with your actual user ID
        $token = "326cf804d9f23d4ce95be052820a7b393179f094"; // Replace with your actual API key/token

        $client = new Client();

        $body = [
            "jsonrpc" => "2.0",
            "method"  => "call",
            "params"  => [
                "service" => "object",
                "method"  => "execute_kw",
                "args"    => [
                    $db,
                    $uid,
                    $token,
                    "project.task",
                    "search_read",
                    [
                        [["x_studio_consumer_no_mis_1", "=", $consumerNo]]
                    ],
                    [
                        "fields" => [
                          "x_studio_consumer_name_mis",
                          "x_studio_consumer_mo_no_mis",
                          "x_studio_pv_capacity_kw",
                          "x_studio_20_mis_stage",
                          "x_studio_entry_date",
                          "x_studio_application_number",
                          "x_studio_file_person_1",
                          "x_studio_file_person_contact_no",
                          "x_studio_related_sales_order",
                          "x_studio_invoice_pdf_url",
                          "stage_id"

                        ],
                        "limit" => 1
                    ]
                ]
            ],
            "id" => 2
        ];

        try {
            $response = $client->post($odooUrl, [
                'json' => $body
            ]);

            $result = json_decode($response->getBody()->getContents(), true);
// dd($result);
           return view('crmapi', ['meta' => $meta, 'desc' => $desc,'result' => $result]);

        } catch (\Exception $e) {
            return response()->json([
                "error" => $e->getMessage()
            ], 500);
        }
        $meta = "";
        $desc = "";
       return view('crmapi', ['meta' => $meta, 'desc' => $desc,'result' => null]);
    }
    
    
    public function pr()
    {
        $meta = "";
        $desc = "";
        $pr = PR::whereNull('deleted_at')->get();
        return view('pr', ['meta' => $meta, 'desc' => $desc, 'pr' => $pr]);
    }
    
    public function thankyou()
    {
        $meta = 'Thank-you';
        $desc = 'Thank-you';
        return view('thankyou', ['meta' => $meta, 'desc' => $desc]);
    }
}
