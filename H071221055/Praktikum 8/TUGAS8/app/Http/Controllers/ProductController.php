<?php

namespace App\Http\Controllers;

use App\Models\Products;


class ProductController extends Controller
{
    function products(){
        $produk = Products::all();
        return view('products', compact('produk'));
    }

    function Motorcycles(){
    $motorcycles = Products::where('productLine', 'Motorcycles')->get();
        return view('motorcycles', compact('motorcycles'));
    }

    function Planes(){
        $planes = Products::where('productLine', 'Planes')->get();
        return view('planes', compact('planes'));
    }

    function ClassicCars(){
        $classiccars = Products::where('productLine', 'Classic Cars')->get();
        return view('classiccars', compact('classiccars'));
    }

    function TrucksandBuses(){
        $trucksandbuses = Products::where('productLine', 'Trucks and Buses')->get();
        return view('trucksandbuses', compact('trucksandbuses'));
    }

    function VintageCars(){
        $vintagecars = Products::where('productLine', 'Vintage Cars')->get();
        return view('vintagecars', compact('vintagecars'));
    }

    function Trains(){
        $trains = Products::where('productLine', 'Trains')->get();
        return view('trains', compact('trains'));
    }

    function Ships(){
        $ships = Products::where('productLine', 'Ships')->get();
        return view('ships', compact('ships'));
    }

    function get_product_details($id){
        $productDetails = Products::all()->where('productCode', $id);
        return view('detailProduct', compact('productDetails'));
        // return view('test');
    }




    // function detailproducts()
    // {
    //     $detailproduk = DetailProducts::all();
    //     return view('products', compact('produk'));
    // }

    

}
