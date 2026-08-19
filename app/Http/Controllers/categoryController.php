<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

class categoryController extends Controller
{
    public function category()
    {
        if(Auth::user()->email == 'shrutilohariwal@gmail.com'){
            return redirect('/dashboard')->with('error', "You don't have permission to access this page.");
        }
        $allProducts = Category::where('deleted_at',NULL)->get();    
        // echo json_encode($allcarSubModel);exit;
        return view('admin.category',['allProducts'=>$allProducts]);
    }

    public function addCategory(Request $request)
    {
        $id = $_POST['editId'];
        $data = $_POST;

        // echo json_encode($data);exit;
        if ($id == '')
        {
            if($last = Category::create($data))
            {
                $lastId = $last->id;
                $allProducts = Category::where('deleted_at',NULL)->get();

                if($request->file('image')!=null)
                {
                    $path = 'public/images/categories/';
                    $imgArray = array();
                    foreach($request->file('image') as $p)
                    {
                        // $size = getimagesize($p);
                        // print_r($size[3]);exit;
                        $image_name = $path.$_POST['name'].".".$p->extension();
                        $p->move($path,$image_name);
                        array_push($imgArray, $image_name);

                        // $temp = imagecreatefromjpeg($image_name); 
                        // $scaled_image= imagescale ( $temp, 308 , 308);
                        
                    }
                    
                    
                    $imgParr["image"] = end($imgArray);

                    Category::where('id',$lastId)->update($imgParr);
                }

                return redirect('/category')->with('allProducts', $allProducts);
            }
        }
        else
        {
            unset($data['editId']);
            unset($data['_token']);
            if(Category::where('id',$id)->update($data))
            {
                $allProducts = Category::where('deleted_at',NULL)->get();

                if($request->file('image')!=null)
                {
                    $path = 'public/images/categories/';
                    $imgArray = array();
                    foreach($request->file('image') as $p)
                    {
                        $image_name = $path.$_POST['name'].".".$p->extension();
                        $p->move($path,$image_name);
                        array_push($imgArray, $image_name);

                        $imgArr = array(
                            'image' => $image_name
                        );
                        
                    }
                    
                    $imgParr["image"] = end($imgArray);
                    Category::where('id',$id)->update($imgParr);
                }
                
                return redirect('/category')->with('allProducts', $allProducts);
            }
        }
        
    }

    public function editCategory($id)
    {
        $data = Category::where('id',$id)->first();
        return $data;
    }

    public function deleteCategory($id)
    {
        $data = array(
            'deleted_at' => date('Y-m-d H:i:s')
        );
        if(Category::where('id',$id)->update($data))
        {
            echo "done";
        }
    }
}
