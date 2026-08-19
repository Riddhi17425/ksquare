<?php

namespace App\Http\Controllers;

use App\Models\LifeVideo;
use Illuminate\Http\Request;
use Auth;

class LifeVideoController extends Controller
{
    public function Lifevideos()
    {
        if (Auth::user()->email == 'shrutilohariwal@gmail.com') {
            return redirect('/dashboard')->with('error', "You don't have permission to access this page.");
        }

        $alllifevideo = LifeVideo::where('deleted_at', null)->get();
        return view('admin.lifevideo', ['alllifevideo' => $alllifevideo]);
    }

    public function addLifeVideos(Request $request)
    {
        $id = $request->editId;
        $data = $request->only(['title', 'videolink']);

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $videoName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('videos/lifevideo/'), $videoName);
            $data['video'] = $videoName;
        }

        if (empty($id)) {
            LifeVideo::create($data);
        } else {
            LifeVideo::where('id', $id)->update($data);
        }

        return redirect('/lifevideos');
    }

    public function editLifeVideos($id)
    {
        return response()->json(LifeVideo::find($id));
    }

    public function deleteLifeVideos($id)
    {
        LifeVideo::where('id', $id)->update(['deleted_at' => now()]);
        return response()->json('done');
    }
}
