<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProductController extends Controller
{
    public function index() {
        $user = auth()->user();
        $produtos = Produto::all();

        return view('welcome', ['produtos' => $produtos, 'user' => $user]);
    }

    public function show($id) {
        $user = auth()->user();
        $product = Produto::findOrFail($id);

        return view('product.show', ['product' => $product, 'user' => $user]);
    }

    public function create() {
        $user = auth()->user();

        return view('product.create', ['user' => $user]);
    }
    public function store(Request $request) {
        $product = new Produto;

        $product->nome = $request->nome;
        $product->categoria = $request->categoria;
        $product->descricao = $request->descricao;
        $product->preco = $request->preco;

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $request->image->move(public_path('img/products'), $imageName);

            $product->image = $imageName;
        }

        $product->save();

        return redirect('dashboard');
    }

    public function update(Request $request) {
        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;

            $request->image->move(public_path('img/products'), $imageName);

            $data['image'] = $imageName;
        }

        Produto::findOrFail($request->id)->update($data);

        return redirect('dashboard');
    }

    public function destroy($id) {
        Produto::findOrFail($id)->delete();

        return redirect('dashboard');
    }

    public function edit($id) {
        $user = auth()->user();
        $product = Produto::findOrFail($id);

        return view('product.edit', ['product' => $product, 'user' => $user]);
    }
}
