<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

class productsController extends Controller
{
    public function products()
    {
        if(Auth::user()->email == 'shrutilohariwal@gmail.com'){
            return redirect('/dashboard')->with('error', "You don't have permission to access this page.");
        }
        $category = Category::where('deleted_at',null)->get();
        $allProducts = Products::where('deleted_at',NULL)->get();    
        // echo json_encode($allcarSubModel);exit;
        return view('admin.products',['allProducts'=>$allProducts,'category'=>$category]);
    }

    public function addProducts(Request $request)
    {
        $id = $_POST['editId'];
        $data = $_POST;

        // echo json_encode($data);exit;
        if ($id == '')
        {
            if($last = products::create($data))
            {
                $lastId = $last->id;
                $allProducts = products::where('deleted_at',NULL)->get();

                if($request->file('image')!=null)
                {
                    $path = 'public/images/products/';
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
                        // echo json_encode();exit;

                        $imgArr = array(
                            'image' => $image_name
                        );
                        
                    }
                    
                    $imgParr["image"] = end($imgArray);
                    products::where('id',$lastId)->update($imgParr);
                }

                return redirect('/products')->with('allProducts', $allProducts);
            }
        }
        else
        {
            unset($data['editId']);
            unset($data['_token']);
            if(products::where('id',$id)->update($data))
            {
                $allProducts = products::where('deleted_at',NULL)->get();

                if($request->file('image')!=null)
                {
                    $path = 'public/images/products/';
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
                    products::where('id',$id)->update($imgParr);
                }

                return redirect('/products')->with('allProducts', $allProducts);
            }
        }
        
    }

    public function editProducts($id)
    {
        $data = Products::where('id',$id)->first();
        return $data;
    }

    public function deleteProducts($id)
    {
        $data = array(
            'deleted_at' => date('Y-m-d H:i:s')
        );
        if(Products::where('id',$id)->update($data))
        {
            echo "done";
        }
    }
}
