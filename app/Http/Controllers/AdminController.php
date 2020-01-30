<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use App\Recipe;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producten = Product::all();
        $recepten = Recipe::all();
        $categorie = ProductCategory::all();
        return view('admin', ['producten' => $producten, 'recepten' => $recepten, 'category' => $categorie]);
    }

    public function aanpassen()
    {
        $producten = Product::all();
        $recepten = Recipe::all();
        $categorie = ProductCategory::all();
        return view('aanpassen', ['producten' => $producten, 'recepten' => $recepten, 'category' => $categorie]);
    }

    public function verwijderen()
    {
        $producten = Product::all();
        $recepten = Recipe::all();
        $categorie = ProductCategory::all();
        return view('verwijderen', ['producten' => $producten, 'recepten' => $recepten, 'category' => $categorie]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $product = Product::find($request->Productid);
        $recept = Recipe::find($request->Receptid);
        $aanbieding = Product::find($request->Aanbiedingid);

        if ($request->input('class') == 'producten'){

            $request->validate([
                'Productnaam' => 'required|string',
                'Productomschrijving' => 'required|string',
                'Productprijs' => 'required|string',
                'Productcategorie' => 'required|string',
                'Productbtw' => 'required|int',
                'Productafbeelding' => 'required|string'
            ]);

            $product->naam = $request->Productnaam;
            $product->omschrijving = $request->Productomschrijving;
            $product->prijs = $request->Productprijs;
            $product->categorie = $request->Productcategorie;
            $product->btw = $request->Productbtw;
            $product->afbeelding = $request->Productafbeelding;

            $product->save();
        }
        else if($request->input('class') == 'recepten'){

            $request->validate([
               'Receptnaam' => 'required|string',
               'Receptomschrijving' => 'required|longtext',
               'Receptshortspec' => 'required|longtext',
               'Receptingredienten' => 'required|longtext'
            ]);

            $recept->naam = $request->Receptnaam;
            $recept->beschrijving = $request->Receptomschrijving;
            $recept->ingredienten = $request->Receptingredienten;
            $recept->shortspec = $request->Receptshortspec;

            $recept->save();
        }
        else if($request->input('class') == 'producten'){
            $request->validate([
                'Aanbiedingid' => 'required|int',
                'AanbiedingPrijs' => 'required|double',
                'Aanbiedingstatus' => 'required|boolean'
            ]);

            $aanbieding->prijs = $request->AanbiedingPrijs;
            $aanbieding->aanbieding = $request->Aanbiedingstatus;

            $aanbieding->save();
        }



        return redirect()->route('aanpassen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
