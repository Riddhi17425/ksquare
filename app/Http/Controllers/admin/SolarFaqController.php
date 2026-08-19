<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SolarFaq;
use App\Models\StatesSolar;
use Illuminate\Support\Facades\DB;

class SolarFaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $data = SolarFaq::where('is_delete', 0)->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.solarfaq.solarfaqlisting', compact('data'));
    }

    
    public function addsolar()
    {
          $statesolar = StatesSolar::where('is_delete', 0)->get();
        return view('admin.solarfaq.addsolarfaq', compact('statesolar'));
    }

   
    public function insertsolar(Request $request)
    {
        $request->validate([
            'title.*' => 'required|string|max:255',
            'description.*' => 'required|string',
        ]);
    
        $titles = $request->title;
        $descriptions = $request->description;
        $title_description = [];
    
        foreach ($titles as $key => $title) {
            $title_description[] = [
                'title' => $title,
                'description' => $descriptions[$key],
            ];
        }
    
        $payload = [
            'statessolar_id' => $request->statessolar_id,
            'title_description' => json_encode($title_description),
            'is_delete' => 0
        ];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/Solar_Faqs_Images');
            $file->move($path, $filename);
            $payload['image'] = $filename;
        }
    
        DB::table('solarfaq')->insert($payload);
        return redirect('solarfaq')->with('success', 'Solar Faq has been added successfully!');
    }



    
    public function deletesolar($id)
    {
        $state = SolarFaq::find($id);
        $state->is_delete = 1;
        $state->update();
        return redirect()->back()->with('success', 'Solar Faq state has been deleted successfully!');
    }

    public function editsolar($id)
    {
        $data = SolarFaq::where('id', $id)->where('is_delete', 0)->first();
        $data->title_description = json_decode($data->title_description, true);
        $statesolar = StatesSolar::where('is_delete', 0)->get();
        return view('admin.solarfaq.editsolarfaq', compact('data','statesolar'));
    }

    
    public function updatesolar(Request $request, $id)
    {
        $request->validate([
            'title.*' => 'required|string|max:255',
            'description.*' => 'required|string',
        ]);
    
        $titles = $request->title;
        $descriptions = $request->description;
        $title_description = [];
    
        foreach ($titles as $key => $title) {
            $title_description[] = [
                'title' => $title,
                'description' => $descriptions[$key],
            ];
        }
    
        $payload = [
            'statessolar_id' => $request->statessolar_id,
            'title_description' => json_encode($title_description),
        ];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/Solar_Faqs_Images');
            $file->move($path, $filename);
            $payload['image'] = $filename; 
        }
    
        DB::table('solarfaq')->where('id', $id)->update($payload);
        return redirect('solarfaq')->with('success', 'Solar state has been updated successfully!');
    }

}
