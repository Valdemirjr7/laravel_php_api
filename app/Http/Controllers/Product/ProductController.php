<?php
/**************************************************/
/*ProductController.php                           */
/*================================================*/
/*   BACK-END API IN PHP WITH LARAVEL FRAMEWORK   */
/*================================================*/
/*                   Credits                      */
/*              Valdemir Valance Jr               */
/*================================================*/
/*                Social Linktree                 */
/*         linktr.ee/valdemirvalencajr            */
/**************************************************/
namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Product\Product;

class ProductController extends Controller
{
    public function index()
    {
        /*
        *Here will return all product in database
        */
        return Product::all();
    }

    public function store(Request $request)
    {
        /*
        **Here will do verify requirements for register a new product in database
        **Later verify, it will get only product_name and product_desc and put in
        **a array, the newpath will get onlye product_img together a new path directory
        **later get, the data will put in $data['product_img'] a new path directory
        **later this, it will register the new product in database
        */
        $check = $request->validate([
            'product_name' => 'required|min:6|max:60' , 
            'product_desc' => 'required|min:6|max:1000', 
            'product_img' => 'required|image',
        ]);

        if($check)
        {
            $data = $request->only(['product_name', 'product_desc']);
            $newpath = $request->product_img->store('products');

            $data['product_img'] = $newpath;

            Product::create($data);

            $success = [
                'success' => 'New product registed with success.'
            ];

            return response()->json($success, 200);
        }else
        {
            $error = [
                'error' => 'Have some error to register the new product',
            ];
    
            return response()->json($error, 402);
        }
    }

    public function show($id)
    {   
        /*
        **Here will return the product by id 
        */
        return Product::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        /*
        **Here will do verify requirements for edit a product in database
        **later it verify and check, it will find a path directory already existing
        **and delete, for upload a new image edited and later it will edit the other colum
        */
        $check = $request->validate([
            'product_name' => 'required|min:6|max:60',
            'product_desc' => 'required|min:6|max:1000',
            'product_img' => 'required|image'
        ]);

        if($check)
        {
            $dataimg = Product::findOrFail($id);
            unlink(storage_path('app/public/'.$dataimg['product_img']));

            $data = $request->only(['product_name', 'product_desc']);
            $newpath = $request->product_img->store('products');

            $data['product_img'] = $newpath;

            Product::findOrFail($id)->update($data);

            $success = [
                'success' => 'Product edited with success'
            ];

            return response()->json($success, 200);
        }else
        {
            $error = [
                'error' => 'Have some error for edit the product'
            ];

            return response()->json($error, 402);
        }
    }

    public function destroy($id)
    {
        /*
        **Here will delete the product by id and the path directory of image
        */
        $dataimg = Product::findOrFail($id);
        unlink(storage_path('app/public/'.$dataimg['product_img']));
        $dataimg->delete();

        $success = [
            'success' => 'Product deleted with success'
        ];

        return response()->json($success, 200);
    }
}
