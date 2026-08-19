<?php

namespace App\Http\Controllers;

use App\Models\PR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PRController extends Controller
{
    public function listPr()
    {
        if (Auth::check() && Auth::user()->email == 'shrutilohariwal@gmail.com') {
            return redirect('/dashboard')->with('error', "You don't have permission to access this page.");
        }

        $allPr = PR::whereNull('deleted_at')->get();
        return view('admin.pr', compact('allPr'));
    }

    public function addPr(Request $request)
    {
        $id = $request->editId;

        $data = $request->only(['name', 'description', 'url']);

        // Handle front image upload
        if ($request->hasFile('front_image')) {
            $file = $request->file('front_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/frontimage_Pr/'), $filename);
            $data['front_image'] = $filename;
        }

        if (empty($id)) {
            PR::create($data);
        } else {
            PR::where('id', $id)->update($data);
        }

        return redirect()->route('listPr');
    }

    public function editPr($id)
    {
        $pr = PR::findOrFail($id);
        return response()->json($pr);
    }

    public function deletePr($id)
    {
        PR::where('id', $id)->update(['deleted_at' => now()]);
        return response()->json('deleted');
    }
}
