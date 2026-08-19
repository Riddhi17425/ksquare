<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CitySolar;
use Illuminate\Support\Facades\DB;

class CitySolarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $data = CitySolar::where('is_delete', 0)->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.citysolar.citysolarlisting', compact('data'));
    }

    
    public function addcitysolar()
    {
        return view('admin.citysolar.addcitysolar');
    }

   
    public function insertcitysolar(Request $request)
    {
        $validatedData = $request->validate([
            'city_name' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            
           
        ], [
            'city_name.required' => 'Please enter the city name.',
            'url.required' => 'Please enter a valid URL.',
           
        ]);
    
        $payload = [
            'city_name' => $request->city_name,
            'state_name' => $request->state_name,
            'url' => $request->url,
            'meta_description' => $request->meta_description,
            'meta_title' => $request->meta_title,
            'is_delete' => 0
        ];

        DB::table('citysolar')->insert($payload);
        return redirect('citysolar')->with('success', 'City Solar has been added successfully!');
    }


    
    public function deletecitysolar($id)
    {
        $state = CitySolar::find($id);
        $state->is_delete = 1;
        $state->update();
        return redirect()->back()->with('success', 'City Solar has been deleted successfully!');
    }

    public function editcitysolar($id)
    {
        $data = CitySolar::where('id', $id)->where('is_delete', 0)->first();
        return view('admin.citysolar.editcitysolar', compact('data'));
    }

    
    public function updatecitysolar(Request $request, $id)
    {
        $validatedData = $request->validate([
            'city_name' => 'required|string|max:255',
            'url' => 'required|string|max:255',
           
        ], [
            'city_name.required' => 'Please enter the city name.',
            'url.required' => 'Please enter a valid URL.',
           
        ]);
    
        $payload = [
            'city_name' => $request->city_name,
            'state_name' => $request->state_name,
            'url' => $request->url,
            'meta_description' => $request->meta_description,
            'meta_title' => $request->meta_title,
            'is_delete' => 0
        ];
    
        DB::table('citysolar')->where('id', $id)->update($payload);
        return redirect('citysolar')->with('success', 'City Solar has been updated successfully!');
    }
}
