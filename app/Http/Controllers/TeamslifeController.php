<?php

namespace App\Http\Controllers;


use App\Models\Teamslife;
use Illuminate\Http\Request;
use Auth;

class TeamslifeController extends Controller
{
    public function teamslife()
    {
        if (Auth::user()->email == 'shrutilohariwal@gmail.com') {
            return redirect('/dashboard')->with('error', "You don't have permission to access this page.");
        }

        $allTeamslife = Teamslife::where('deleted_at', null)->get();
        
        return view('admin.teamslife', ['allTeamslife' => $allTeamslife]);
    }

    public function addTeamslife(Request $request)
    {
        $id = $request->editId;
    
        $data = $request->except('image', 'front_image', 'editId', '_token');
    
        // Handle front_image upload
        if ($request->hasFile('front_image')) {
            $path = 'images/frontimage_teamslife/';
            $frontImageName = time() . '_' . $request->file('front_image')->getClientOriginalName();
            $request->file('front_image')->move(public_path($path), $frontImageName);
            $data['front_image'] = $frontImageName;
        }
    
        if ($id == '') {
            $newTeamslife = Teamslife::create($data);
            $this->handleImageUpload($request, $newTeamslife->id);
        } else {
            Teamslife::where('id', $id)->update($data);
            $this->handleImageUpload($request, $id);
        }
    
        return redirect('/teamslife');
    }


    private function handleImageUpload(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $path = 'images/teamslife/';
            $imgArray = [];
    
            foreach ($request->file('image') as $p) {
                $imageName = time() . '_' . $p->getClientOriginalName();
                $p->move(public_path($path), $imageName);
                $imgArray[] = $imageName;
            }
    
            Teamslife::where('id', $id)->update(['image' => json_encode($imgArray)]);
        }
    }

    public function editTeamslife($id)
    {
        return response()->json(Teamslife::find($id));
    }

    public function deleteTeamslife($id)
    {
        Teamslife::where('id', $id)->update(['deleted_at' => now()]);
        return response()->json('done');
    }
}


