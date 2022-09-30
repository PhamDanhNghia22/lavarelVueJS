<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Http\Resources\product as ProductResource;

use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    public function index(){
        $data = product::all();
        return response()->json(['data'=>ProductResource::collection($data)], 200);
    }

    public function store(Request $requset){
        $product = new product([
            'name' => $requset->input('name'),
            'detail'=> $requset->input('detail')
        ]);
        $product->save();
        return response()->json('Create successful');
    }
    public function show($id){
        $product = product::find($id);
        return response()->json($product);
    }

    public function update(Request $request, product $product ){
        $input= $request->all();
        $product->name = $input['name'];
        $product->detail =$input['detail'];
        $product->save();
        return response()->json(['message'=>'update successfull','data'=>$product]);
    }
    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();
        return response()->json(['message'=>'Xóa thành công']);
    }
}
