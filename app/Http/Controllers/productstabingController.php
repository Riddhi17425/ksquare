<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\ProductsTabing;
use Illuminate\Http\Request;
use Auth;

class productstabingController extends Controller
{
    public function productstabing()
    {
        if (Auth::user()->email == 'shrutilohariwal@gmail.com') {
            return redirect('/dashboard')->with('error', "You don't have permission to access this page.");
        }

        $products = Products::where('deleted_at', null)->get(); // Fetch products for the dropdown
        $allProductsTabing = ProductsTabing::where('deleted_at', null)->get(); // Fetch ProductsTabing records
        
        return view('admin.products_tabing', ['allProductsTabing' => $allProductsTabing, 'products' => $products]);
    }

    public function addProductstabing(Request $request)
    {
        $id = $request->editId;

        $data = $request->except('image', 'editId', '_token');
        
        if ($id == '') {
            $newProductTabing = ProductsTabing::create($data);
            $this->handleImageUpload($request, $newProductTabing->id);
        } else {
            ProductsTabing::where('id', $id)->update($data);
            $this->handleImageUpload($request, $id);
        }

        return redirect('/productstabing');
    }

    private function handleImageUpload(Request $request, $id)
    {
        if ($request->file('image')) {
            $path = 'public/images/products_tabing/';
            $imgArray = [];

            foreach ($request->file('image') as $p) {
                $image_name = $path . time() . '.' . $p->extension();
                $p->move($path, $image_name);
                array_push($imgArray, $image_name);
            }

            ProductsTabing::where('id', $id)->update(['image' => end($imgArray)]);
        }
    }

    public function editProductstabing($id)
    {
        return response()->json(ProductsTabing::find($id));
    }

    public function deleteProductstabing($id)
    {
        ProductsTabing::where('id', $id)->update(['deleted_at' => now()]);
        return response()->json('done');
    }
}


