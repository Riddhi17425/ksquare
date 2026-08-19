<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Support\Facades\DB;

class CertificateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $data = Certificate::where('is_delete', 0)->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.certificate.certificatelisting', compact('data'));
    }

    
    public function addcertificate()
    {
        return view('admin.certificate.addcertificate');
    }

   
    public function insertcertificate(Request $request)
    {
        $validatedData = $request->validate([
            'certificate_name' => 'required|string|max:255',
            
        ], [
            'certificate_name.required' => 'Please enter the state name.',
            
        ]);
    
        $payload = [
            'certificate_cat' => $request->certificate_cat,
            'certificate_name' => $request->certificate_name,
            'is_delete' => 0
        ];
    
        if ($request->hasFile('certificate_file')) {
            $file = $request->file('certificate_file');
            $filename = $file->getClientOriginalName();
            $path = public_path('/Certificate_Files');
            $file->move($path, $filename);
            $payload['certificate_file'] = $filename;
        }
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName();
            $path = public_path('/Thumbnail_Certificate_Files');
            $file->move($path, $filename);
            $payload['thumbnail'] = $filename;
        }
    
        DB::table('certificate')->insert($payload);
        return redirect('certificate')->with('success', 'Certificate has been added successfully!');
    }


    
    public function deletecertificate($id)
    {
        $state = Certificate::find($id);
        $state->is_delete = 1;
        $state->update();
        return redirect()->back()->with('success', 'Certificate has been deleted successfully!');
    }

    public function editcertificate($id)
    {
        $data = Certificate::where('id', $id)->where('is_delete', 0)->first();
        return view('admin.certificate.editcertificate', compact('data'));
    }

    
    public function updatecertificate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'certificate_name' => 'required|string|max:255',
        ], [
            'certificate_name.required' => 'Please enter the state name.',
        ]);
    
        $payload = [
            'certificate_cat' => $request->certificate_cat,
            'certificate_name' => $request->certificate_name,
        ];
    
        if ($request->hasFile('certificate_file')) {
            $file = $request->file('certificate_file');
            $filename = $file->getClientOriginalName();
            $path = public_path('/Certificate_Files');
            $file->move($path, $filename);
            $payload['certificate_file'] = $filename;
        }
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName();
            $path = public_path('/Thumbnail_Certificate_Files');
            $file->move($path, $filename);
            $payload['thumbnail'] = $filename;
        }
    
        DB::table('certificate')->where('id', $id)->update($payload);
        return redirect('certificate')->with('success', 'Certificate has been updated successfully!');
    }
}
