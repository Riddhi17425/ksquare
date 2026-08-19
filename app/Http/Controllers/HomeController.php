<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Inquiry;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function adminContact()
    {
        if(Auth::user()->email == 'shrutilohariwal@gmail.com'){
            return redirect('/dashboard')->with('error', "You don't have permission to access this page.");
        }
        $allContacts=Contact::where('deleted_at')->OrderBy('id','DESC')->get();
        // $date=date('d-m-Y',strtotime($allContacts['created_at']));
        
        // echo json_encode($date);exit;
        return view('admin.contact',['allContacts'=>$allContacts]);
    }
    public function adminInquiry()
    {
        if(Auth::user()->email == 'shrutilohariwal@gmail.com'){
            return redirect('/dashboard')->with('error', "You don't have permission to access this page.");
        }
        $allInquiry=Inquiry::where('deleted_at')->OrderBy('id','DESC')->get();
        // $date=date('d-m-Y',strtotime($allContacts['created_at']));
        
        // echo json_encode($date);exit;
        return view('admin.inquiry',['allInquiry'=>$allInquiry]);
    }

    public function viewContact($id)
    {
        $data = Contact::where('id',$id)->first();
        return $data;
    }
    public function viewInquiry($id)
    {
        $data = Inquiry::where('id',$id)->first();
        return $data;
    }
}
