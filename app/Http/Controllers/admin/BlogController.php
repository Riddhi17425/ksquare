<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data =  Blog::orderBy('created_at','desc')->where('is_delete','0')->paginate(15);
        return view('admin.blog.bloglisting',compact('data'));
    }
  

    public function addblog()
    {
        return view('admin.blog.addblog');
    }


public function insertblog(Request $request)
{
    $imageName = null;
    $ogImageName = null;
    $ctaImageName = null;

    $request->validate([
        'status' => 'required|in:Active,InActive',
    ], [
        'status.required' => 'Please select a status.',
        'status.in' => 'Status must be Active or InActive.',
    ]);
 
    // Handle the blog image upload
    if ($request->hasFile('blogimage')) {
        $imageName = time() . '_' . $request->blogimage->getClientOriginalName();
        $request->blogimage->move(public_path('images'), $imageName);
    }

    // Handle the OG image upload
    if ($request->hasFile('og_image')) {
        $ogImageName = time() . '_' . $request->og_image->getClientOriginalName();
        $request->og_image->move(public_path('images'), $ogImageName);
    }

    if ($request->hasFile('cta_image')) {
        $ctaFile = $request->file('cta_image');
        $ctaImageName = time() . '_' . $ctaFile->getClientOriginalName();
        $ctaFile->move(public_path('Blog_CTA_Images'), $ctaImageName);
    }

    $payload = [
        'title' => $request->title,
        'description' => $request->description,
        'publish_date' => $request->publish_date ? date('Y-m-d', strtotime($request->publish_date)) : null,
        'is_publish' => $request->has('is_publish') ? 1 : 0,
        'is_delete' => 0,
        'image' => $imageName,
        'url' => $request->url,
        'short_description' => $request->short_description,
        'meta_title' => $request->meta_title,
        'meta_description' => $request->meta_description,
        'og_title' => $request->og_title,
        'og_description' => $request->og_description,
        'og_image' => $ogImageName,
        'cta_link' => $request->cta_link ?? null,
        'status' => $request->status,
        'cta_image' => $ctaImageName,
        'conclusion' => $request->conclusion,
    ];

    Blog::create($payload);

    return redirect('blog')->with('success', 'Your Blog has been added successfully!');
}

//     public function insertblog(Request $request){

//         $validatedData = $request->validate(
//             [
//                 'title' => 'required',
//                 'description' => 'required',
//                 'publish_date' => 'required',
//             ],
//             [
//                 'title.required' => 'Please enter a title.',
//                 'description.required' => 'Please enter Description.',
//                 'publish_date.required' => 'Please select Date.',
//             ]
//         );

// if (isset($request->blogimage) && !empty($request->blogimage)) {
//     $imageName = time().'.'.$request->blogimage->extension();
//     $request->blogimage->move(public_path('images'), $imageName);
//         if ($request->hasFile('og_image')) {
//             $file = $request->file('og_image');
//             $filename = $file->getClientOriginalName();
//             $newname = time() . $filename;
//             $path = public_path('images');
//             $file->move($path, $newname);
//         }
//     $payload = [
//         'title' => $request->title,
//         'description' => $request->description,
//         'publish_date' => date('Y-m-d', strtotime($request->publish_date)),
//         'is_publish' => ($request->is_publish == 'on') ? 0 : 1,
//         'is_delete' => 0,
//         'image' => $imageName,
//         'url' => $request->url,
//         'short_description' => $request->short_description,
//         'meta_title' => $request->meta_title,
//         'og_title' => $request->og_title,
//         'og_description' => $request->og_description,
//         'og_image' => $newname
//     ];
// } else {
//         if ($request->hasFile('og_image')) {
//             $file = $request->file('og_image');
//             $filename = $file->getClientOriginalName();
//             $newname = time() . $filename;
//             $path = public_path('images');
//             $file->move($path, $newname);
//         }
//     $payload = [
//         'title' => $request->title,
//         'description' => $request->description,
//         'publish_date' => date('Y-m-d', strtotime($request->publish_date)),
//         'is_publish' => ($request->is_publish == 'on') ? 0 : 1,
//         'is_delete' => 0,
//         'url' => $request->url,
//         'short_description' => $request->short_description,
//         'meta_title' => $request->meta_title,
//         'meta_description' => $request->meta_description,
//         'og_title' => $request->og_title,
//         'og_description' => $request->og_description,
//         'og_image' => $newname
//     ];
// }
//         DB::table('blog')->insert($payload);
//         return redirect('blog')->with('success', 'Your Blog has been added successfully!');
//     }


    public function deleteblog($id){
        $post = Blog::find($id);
        $post->is_delete = '1';
        $post->update();
        return redirect()->back()->with('success', 'Your Blog has been Deleted successfully!');
    }

    public function editblog($id){
        $data =  Blog::where('id',$id)->where('is_delete','0')->first();
        return view('admin.blog.editblog',compact('data'));
    }
    
    public function updateblog(Request $request)
    {
        // Validate request
        $request->validate([
            'blogimage' => 'nullable|image|max:2048',
            'og_image' => 'nullable|image|max:2048',
            'cta_image' => 'nullable|image|max:2048',
            'status' => 'required|in:Active,InActive',
        ]);
    
        // Fetch blog post
        $blog = Blog::findOrFail($request->id);
        $ogImageName = $blog->og_image; 
        // Process the blog image
        if ($request->hasFile('blogimage')) {
            $file = $request->file('blogimage');
            $blogImageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $blogImageName);
            $blog->image = $blogImageName;
        }
    
        if ($request->hasFile('og_image')) {
            $ogFile = $request->file('og_image');
            $ogImageName = time() . '_' . $ogFile->getClientOriginalName();
            $ogFile->move(public_path('images'), $ogImageName);
            $blog->og_image = $ogImageName;
        }

        if ($request->hasFile('cta_image')) {
            $ctaFile = $request->file('cta_image');
            $ctaImageName = time() . '_' . $ctaFile->getClientOriginalName();
            $ctaFile->move(public_path('Blog_CTA_Images'), $ctaImageName);
            $blog->cta_image = $ctaImageName;
        }
    
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->publish_date = $request->publish_date;
        $blog->url = $request->url;
        $blog->short_description = $request->short_description;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->og_title = $request->og_title;
        $blog->og_description = $request->og_description;
        $blog->is_publish = $request->is_publish ? 1 : 0; 
        $blog->og_image = $ogImageName;
        $blog->cta_link = $request->cta_link ?? null;
        $blog->status = $request->status;
        $blog->conclusion = $request->conclusion;
        $blog->save();
    
        return redirect()->route('blog')->with('success', 'Blog updated successfully!');
    }

//     public function updateblog(Request $request){
// if (isset($request->blogimage) && !empty($request->blogimage)) {
//     $imageName = time().'.'.$request->blogimage->extension();
//     $request->blogimage->move(public_path('images'), $imageName);
//     if ($request->hasFile('og_image')) {
//             $file = $request->file('og_image');
//             $filename = $file->getClientOriginalName();
//             $newname = time() . $filename;
//             $path = public_path('images');
//             $file->move($path, $newname);
//         }
//     $payload = [
//         'title' => $request->title,
//         'description' => $request->description,
//         'publish_date' => date('Y-m-d', strtotime($request->publish_date)),
//         'is_publish' => ($request->is_publish == 'on') ? 0 : 1,
//         'is_delete' => 0,
//         'image' => $imageName,
//         'url' => $request->url,
//         'short_description' => $request->short_description,
//         'meta_title' => $request->meta_title,
//         'meta_description' => $request->meta_description,
//         'og_title' => $request->og_title,
//         'og_description' => $request->og_description,
//         'og_image' => $newname
//     ];
// } else {
//     if ($request->hasFile('og_image')) {
//             $file = $request->file('og_image');
//             $filename = $file->getClientOriginalName();
//             $newname = time() . $filename;
//             $path = public_path('images');
//             $file->move($path, $newname);
//         }
//     $payload = [
//         'title' => $request->title,
//         'description' => $request->description,
//         'publish_date' => date('Y-m-d', strtotime($request->publish_date)),
//         'is_publish' => ($request->is_publish == 'on') ? 0 : 1,
//         'is_delete' => 0,
//         'url' => $request->url,
//         'short_description' => $request->short_description,
//         'meta_title' => $request->meta_title,
//         'meta_description' => $request->meta_description,
//         'og_title' => $request->og_title,
//         'og_description' => $request->og_description,
//         'og_image' => $newname
//     ];
// }
//         DB::table('blog')->where('id',$request->id)->update($payload);
        
//         return redirect('blog')->with('success', 'Your Blog has been Updated successfully!');
//     }
}
