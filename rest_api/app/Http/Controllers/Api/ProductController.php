<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Product;
use Symfony\Component\HttpFoundation\Request;
use App\Api\ApiError;

class ProductController extends Controller
{
    public function __construct(Product $product) 
    {
        $this->product = $product;
    }
    public function index() {
        $data = ['data' => $this->product->paginate(10)];
        return response()->json($data);
        
    }

    public function show(Product $id) {
        $data = ['data' => $id];

        return response()->json($data);
    }

    public function store(Request $request) 
    {
        try {
        $productData = $request->all();
        $this->product->create($productData);
        return response()->json(['msg' => 'Produto criado com sucesso.'], 201);
        } catch (\Exception $e) {
            if(config('app.debug')) {
                return response()->json(ApiError::errorMessage($e->getMessage(), 1010));
            } else {
                return response()->json(ApiError::errorMessage(
                    ('Houve um erro ao realizar a operação'), 1010 ));
            }
        }
    }

    public function update(Request $request, $id) 
    {
        try {
        $productData = $request->all();
        $product = $this->product->find($id);
        $product->update($productData);
        $return = ['data' => ['msg' => 'Produto atualizado com sucesso.']];
        return response()->json($return, 201);
        } catch (\Exception $e) {
            if(config('app.debug')) {
                return response()->json(ApiError::errorMessage($e->getMessage(), 1010));
            } else {
                return response()->json(ApiError::errorMessage(
                    ('Houve um erro ao realizar a operação'), 1010 ));
            }
        }
    }

}
