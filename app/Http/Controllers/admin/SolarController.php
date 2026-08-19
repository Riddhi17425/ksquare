<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Solar;
use App\Models\StatesSolar;
use Illuminate\Support\Facades\DB;

class SolarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $data = Solar::where('is_delete', 0)->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.solar.solarlisting', compact('data'));
    }

    
    public function addsolar()
    {
          $statesolar = StatesSolar::where('is_delete', 0)->get();
        return view('admin.solar.addsolar', compact('statesolar'));
    }

   
    // public function insertsolar(Request $request)
    // {   
    //     // dd($request->all());
    //     $validatedData = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'url' => 'required|string|max:255',
    //     ], [
    //         'title.required' => 'Please enter the state name.',
    //         'url.required' => 'Please enter a valid URL.',
          
    //     ]);
    //     $titles = $request->productname;
    //     $descriptions = $request->product_desc;
    //     $proname_description = [];
        
    //     foreach ($titles as $key => $title) {
    //         $proname_description[] = [
    //             'productname' => $title,
    //             'product_desc' => $descriptions[$key],
    //         ];
    //     }
        
    //     $payload = [
    //         'statessolar_id' => $request->statessolar_id,
    //         'title' => $request->title,
    //         'url' => $request->url,
    //         'description' => $request->description,
    //         'proname_description' => json_encode($proname_description),
    //         'is_delete' => 0
    //     ];
    //     // dd($payload);
    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         $filename = $file->getClientOriginalName();
    //         $path = public_path('/Solar_Images');
    //         $file->move($path, $filename);
    //         $payload['image'] = $filename;
    //     }
    
    //     DB::table('solar')->insert($payload);
    //     return redirect('solar')->with('success', 'Solar state has been added successfully!');
    // }
    
    public function insertsolar(Request $request)
    {   
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|string|max:255',
        ], [
            'title.required' => 'Please enter the state name.',
            'url.required' => 'Please enter a valid URL.',
        ]);
    
        $titles = $request->productname;
        $descriptions = $request->product_desc;
        $images = $request->file('product_image');
        $proname_description = [];
        
        foreach ($titles as $key => $title) {
            $imagePath = null;
    
            if (isset($images[$key])) {
                $file = $images[$key];
                $imageName = time() . '-' . $file->getClientOriginalName();
                $path = public_path('/Solar_Images');
                $file->move($path, $imageName);
                $imagePath = $imageName;
            }
    
            $proname_description[] = [
                'productname' => $title,
                'product_desc' => $descriptions[$key],
                'product_image' => $imagePath, 
            ];
        }
    
        $payload = [
            'statessolar_id' => $request->statessolar_id,
            'title' => $request->title,
            'url' => $request->url,
            'description' => $request->description,
            'proname_description' => json_encode($proname_description),
            'is_delete' => 0
        ];
    
        DB::table('solar')->insert($payload);
        return redirect('solar')->with('success', 'Solar state has been added successfully!');
    }



    
    public function deletesolar($id)
    {
        $state = Solar::find($id);
        $state->is_delete = 1;
        $state->update();
        return redirect()->back()->with('success', 'Solar state has been deleted successfully!');
    }

    public function editsolar($id)
    {
        $data = Solar::where('id', $id)->where('is_delete', 0)->first();
        $statesolar = StatesSolar::where('is_delete', 0)->get();
        $data->proname_description = json_decode($data->proname_description, true);
        // dd($data);
        return view('admin.solar.editsolar', compact('data','statesolar'));
    }

    
    // public function updatesolar(Request $request, $id)
    // {   
    //     // dd($request->all());
    //     $validatedData = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'url' => 'required|string|max:255',
      
    //     ], [
    //         'title.required' => 'Please enter the state name.',
    //         'url.required' => 'Please enter a valid URL.',
    //     ]);
        
    //     $titles = $request->productname;
    //     $descriptions = $request->product_desc;
    //     $proname_description = [];
        
    //     foreach ($titles as $key => $title) {
    //         $proname_description[] = [
    //             'productname' => $title,
    //             'product_desc' => $descriptions[$key],
    //         ];
    //     }
        
    //     $payload = [
    //         'statessolar_id' => $request->statessolar_id,
    //         'title' => $request->title,
    //         'url' => $request->url,
    //         'description' => $request->description,
    //         'proname_description' => json_encode($proname_description),
    //     ];
    
    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         $filename = $file->getClientOriginalName();
    //         $path = public_path('/Solar_Images');
    //         $file->move($path, $filename);
    //         $payload['image'] = $filename; 
    //     }
    
    //     DB::table('solar')->where('id', $id)->update($payload);
    //     return redirect('solar')->with('success', 'Solar state has been updated successfully!');
    // }
    
    public function updatesolar(Request $request, $id)
    {   
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|string|max:255',
        ], [
            'title.required' => 'Please enter the state name.',
            'url.required' => 'Please enter a valid URL.',
        ]);
        
        // Fetch existing data from the database
        $solar = DB::table('solar')->where('id', $id)->first();
        $existingData = json_decode($solar->proname_description, true) ?? [];
    
        $titles = $request->productname;
        $descriptions = $request->product_desc;
        $images = $request->file('product_image'); 
        $proname_description = [];
    
        foreach ($titles as $key => $title) {
            $imagePath = null;
    
            // Check if new image is uploaded
            if (isset($images[$key])) {
                $file = $images[$key];
                $imageName = time() . '-' . $file->getClientOriginalName();
                $path = public_path('/Solar_Product_Images');
                $file->move($path, $imageName);
                $imagePath = $imageName;
            } else {
                $imagePath = $existingData[$key]['product_image'] ?? null;
            }
    
            $proname_description[] = [
                'productname' => $title,
                'product_desc' => $descriptions[$key] ?? '',
                'product_image' => $imagePath,
            ];
        }
    
        $payload = [
            'statessolar_id' => $request->statessolar_id,
            'title' => $request->title,
            'url' => $request->url,
            'description' => $request->description,
            'proname_description' => json_encode($proname_description),
        ];
    
        // Update main image if new one is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = public_path('/Solar_Images');
            $file->move($path, $filename);
            $payload['image'] = $filename; 
        }
        // dd($payload);
    
        DB::table('solar')->where('id', $id)->update($payload);
        return redirect('solar')->with('success', 'Solar state has been updated successfully!');
    }


}
