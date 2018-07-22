<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function criarProduto(Request $request) {

        $novoProduto = new Product;

        $novoProduto->id = $request->id;
        $novoProduto->Nome = $request->Nome;
        $novoProduto->Preco = $request->Preco;
        $novoProduto->Categoria = $request->Categoria;

        $novoProduto = save();
    }

    public function lerProduto($id) {

        $Product = Product::findorfail($id);

        return response()->json([$Product]);
    }

    public function atualizarProduto(Request $request, $id) {

        $Product = Product::findorfail($id);

        if($request->Nome){
            $Product->Nome = $request->Nome;
        }

        if($request->Preco){
            $Product->Preco = $request->Preco;
        }

        if($request->Categoria){
            $Product->Categoria = $request->Categoria;
        }

        $Product->save();
    }

    public function deletarProduto($id) {

        Product::destroy($id);
    }
}
