<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogFaq;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogFaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $data = BlogFaq::where('is_delete', 0)->orderBy('created_at', 'desc')->paginate(15);
        return view('admin.blogfaq.blogfaqlisting', compact('data'));
    }

    
    public function addblog()
    {
         $blog = Blog::where('is_delete', 0)->get();
        return view('admin.blogfaq.addblogfaq', compact('blog'));
    }

   
    public function insertblog(Request $request)
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
            'blog_id' => $request->blog_id,
            'maintitle' => $request->maintitle,
            'title_description' => json_encode($title_description),
            'is_delete' => 0
        ];
    
        DB::table('blogfaq')->insert($payload);
        return redirect('blogfaq')->with('success', 'Blog Faq has been added successfully!');
    }



    
    public function deleteblog($id)
    {
        $state = BlogFaq::find($id);
        $state->is_delete = 1;
        $state->update();
        return redirect()->back()->with('success', 'Blog Faq state has been deleted successfully!');
    }

    public function editblog($id)
    {
        $data = BlogFaq::where('id', $id)->where('is_delete', 0)->first();
        $data->title_description = json_decode($data->title_description, true);
        $blog = Blog::where('is_delete', 0)->get();
        return view('admin.blogfaq.editblogfaq', compact('data','blog'));
    }

    
    public function updateblog(Request $request, $id)
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
            'blog_id' => $request->blog_id,
            'maintitle' => $request->maintitle,
            'title_description' => json_encode($title_description),
        ];
    
        DB::table('blogfaq')->where('id', $id)->update($payload);
        return redirect('blogfaq')->with('success', 'blog state has been updated successfully!');
    }

}
