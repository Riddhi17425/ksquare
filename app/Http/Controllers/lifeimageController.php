<?php

namespace App\Http\Controllers;


use App\Models\LifeImage;
use Illuminate\Http\Request;
use Auth;

class lifeimageController extends Controller
{
    public function Lifeimage()
    {
        if (Auth::user()->email == 'shrutilohariwal@gmail.com') {
            return redirect('/dashboard')->with('error', "You don't have permission to access this page.");
        }

        $alllifeimage = LifeImage::where('deleted_at', null)->get();
        
        return view('admin.lifeimage', ['alllifeimage' => $alllifeimage]);
    }

    public function addLifeimage(Request $request)
    {
        $id = $request->editId;
        $data = $request->except('image','editId', '_token');
        
        if ($id == '') {
            $newLifeimage = LifeImage::create($data);
            $this->handleImageUpload($request, $newLifeimage->id);
        } else {
            LifeImage::where('id', $id)->update($data);
            $this->handleImageUpload($request, $id);
        }

        return redirect('/lifeimage');
    }

    private function handleImageUpload(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $path = 'images/lifeimage/';
            $imgArray = [];
    
            foreach ($request->file('image') as $p) {
                $imageName = time() . '_' . $p->getClientOriginalName();
                $p->move(public_path($path), $imageName);
                $imgArray[] = $imageName;
            }
    
            LifeImage::where('id', $id)->update(['image' => json_encode($imgArray)]);
        }
    }

    public function editLifeimage($id)
    {
        return response()->json(LifeImage::find($id));
    }

    public function deleteLifeimage($id)
    {
        LifeImage::where('id', $id)->update(['deleted_at' => now()]);
        return response()->json('done');
    }
}


