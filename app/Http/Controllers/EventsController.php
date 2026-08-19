<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Auth;

class EventsController extends Controller
{
    public function events()
    {
        if (Auth::user()->email == 'shrutilohariwal@gmail.com') {
            return redirect('/dashboard')->with('error', "You don't have permission to access this page.");
        }

        $allevents = Events::where('deleted_at', null)->get();
        return view('admin.events', ['allevents' => $allevents]);
    }

    public function addevents(Request $request)
    {
        $id = $request->editId;

        // Remove fields not needed
        $data = $request->except('front_image', 'editId', '_token');

        if ($id == '') {

            // Create new event
            $event = Events::create($data);

            // Upload multiple front images
            $this->storeFrontImages($request, $event->id);

        } else {

            // Update existing event
            Events::where('id', $id)->update($data);

            // Upload multiple front images
            $this->storeFrontImages($request, $id);
        }

        return redirect('/events');
    }

    private function storeFrontImages(Request $request, $id)
    {
        if ($request->hasFile('front_image')) {

            $path = public_path('images/events_images/');
            $imgArray = [];

            foreach ($request->file('front_image') as $file) {

                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move($path, $imageName);

                $imgArray[] = $imageName;
            }

            // Always store JSON array (required format)
            Events::where('id', $id)->update([
                'front_image' => json_encode($imgArray)
            ]);
        }
    }

    public function editevents($id)
    {
        return response()->json(Events::find($id));
    }

    public function deleteevents($id)
    {
        Events::where('id', $id)->update(['deleted_at' => now()]);
        return response()->json('done');
    }
}
