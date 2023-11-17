<?php

namespace App\Http\Controllers;

use App\Models\VinylProduct;
use Illuminate\Http\Request;

class VinylProductController extends Controller
{

    public function index(){
        $vinylProducts = VinylProduct::all();
        return view('index', compact('vinylProducts'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $data = $this->validateProductData($request); 
        VinylProduct::create($data); 
        return redirect()->route('vinyl-products.index')->with('success', 'Product added successfully.');
    }

    public function show(VinylProduct $vinylProduct){
        return view('show', compact('vinylProduct'));
    }

    public function edit(VinylProduct $vinylProduct){
        return view('edit', compact('vinylProduct'));
    }

    public function update(Request $request, VinylProduct $vinylProduct){
        $data = $this->validateProductData($request);
        $vinylProduct->update($data);
        return redirect()->route('vinyl-products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(VinylProduct $vinylProduct){
        $vinylProduct->delete();
        return redirect()->route('vinyl-products.index')->with('success', 'The product has been successfully deleted.');
    }

    private function validateProductData(Request $request){
        return $request->validate([
            'name' => 'required',
            'description' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);
    }
}
