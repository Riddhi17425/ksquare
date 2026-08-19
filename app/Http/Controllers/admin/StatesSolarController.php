<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StatesSolar;
use Illuminate\Support\Facades\DB;

class StatesSolarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $data = StatesSolar::where('is_delete', 0)->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.statessolar.statessolarlisting', compact('data'));
    }

    
    public function addstatessolar()
    {
        return view('admin.statessolar.addstatessolar');
    }

   
    public function insertstatessolar(Request $request)
    {
        $validatedData = $request->validate([
            'solar_state_name' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'header_title' => 'required|string|max:255',
            'header_description' => 'required|string',
           
        ], [
            'solar_state_name.required' => 'Please enter the state name.',
            'url.required' => 'Please enter a valid URL.',
            'header_title.required' => 'Please enter a header title.',
            'header_description.required' => 'Please enter a header description.',
           
        ]);
    
        $payload = [
            'solar_state_name' => $request->solar_state_name,
            'url' => $request->url,
            'header_title' => $request->header_title,
            'header_description' => $request->header_description,
            'trusted_title' => $request->trusted_title,
            'trusted_disc' => $request->trusted_disc,
            'inverter_title' => $request->inverter_title,
            'inverter_disc' => $request->inverter_disc,
            'lt_title' => $request->lt_title,
            'lt_disc' => $request->lt_disc,
            'cable_title' => $request->cable_title,
            'cable_disc' => $request->cable_disc,
            'dcdb_title' => $request->dcdb_title,
            'dcdb_disc' => $request->dcdb_disc,
            'acdb_title' => $request->acdb_title,
            'acdb_disc' => $request->acdb_disc,
            'kit_title' => $request->kit_title,
            'kit_disc' => $request->kit_disc,
            'meta_description' => $request->meta_description,
            'meta_title' => $request->meta_title,
            'og_title' => $request->og_title,
            'og_description' => $request->og_description,
            'map_title' => $request->map_title,
            'map_description' => $request->map_description,
            'is_delete' => 0
        ];
        if ($request->hasFile('map_image')) {
            $file = $request->file('map_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/Solar_Sates_MapImages');
            $file->move($path, $filename);
            $payload['map_image'] = $filename; 
        }
 
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/Solar_Sates_Images');
            $file->move($path, $filename);
            $payload['image'] = $filename; // Store the filename in the payload
        }
        
        
        DB::table('statessolar')->insert($payload);
        return redirect('statessolar')->with('success', 'Solar state has been added successfully!');
    }


    
    public function deletestatessolar($id)
    {
        $state = StatesSolar::find($id);
        $state->is_delete = 1;
        $state->update();
        return redirect()->back()->with('success', 'Solar state has been deleted successfully!');
    }

    public function editstatessolar($id)
    {
        $data = StatesSolar::where('id', $id)->where('is_delete', 0)->first();
        return view('admin.statessolar.editstatessolar', compact('data'));
    }

    
    public function updatestatessolar(Request $request, $id)
    {
        $validatedData = $request->validate([
            'solar_state_name' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'header_title' => 'required|string|max:255',
            'header_description' => 'required|string',

        ], [
            'solar_state_name.required' => 'Please enter the state name.',
            'url.required' => 'Please enter a valid URL.',
            'header_title.required' => 'Please enter a header title.',
            'header_description.required' => 'Please enter a header description.',
          
        ]);
    
        $payload = [
            'solar_state_name' => $request->solar_state_name,
            'url' => $request->url,
            'header_title' => $request->header_title,
            'header_description' => $request->header_description,
            'trusted_title' => $request->trusted_title,
            'trusted_disc' => $request->trusted_disc,
            'inverter_title' => $request->inverter_title,
            'inverter_disc' => $request->inverter_disc,
            'lt_title' => $request->lt_title,
            'lt_disc' => $request->lt_disc,
            'cable_title' => $request->cable_title,
            'cable_disc' => $request->cable_disc,
            'dcdb_title' => $request->dcdb_title,
            'dcdb_disc' => $request->dcdb_disc,
            'acdb_title' => $request->acdb_title,
            'acdb_disc' => $request->acdb_disc,
            'kit_title' => $request->kit_title,
            'kit_disc' => $request->kit_disc,
            'meta_description' => $request->meta_description,
            'meta_title' => $request->meta_title,
            'og_title' => $request->og_title,
            'og_description' => $request->og_description,
            'map_title' => $request->map_title,
            'map_description' => $request->map_description,
        ];
        
        if ($request->hasFile('map_image')) {
            $file = $request->file('map_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/Solar_Sates_MapImages');
            $file->move($path, $filename);
            $payload['map_image'] = $filename; 
        }
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/Solar_Sates_Images');
            $file->move($path, $filename);
            $payload['image'] = $filename; // Update the filename in the payload
        }
    
        DB::table('statessolar')->where('id', $id)->update($payload);
        return redirect('statessolar')->with('success', 'Solar state has been updated successfully!');
    }
}
