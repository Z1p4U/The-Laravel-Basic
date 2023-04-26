<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Models\Item;

use function PHPUnit\Framework\isNull;

class ItemController extends Controller
{
    public function create()
    {
        return view("inventory.create");
    }
    public function index()
    {

        // $items = new Item();
        // $all  = $items->all();
        // return $all;

        return view('inventory.index', [
            "items" => Item::all()
        ]);
    }

    public function show($id)
    {
        //SELECT * FROM item WHERE $id = id;
        // $item = Item::findOrFail($id);
        // if (isNull($item)) {
        //     return abort(404);
        // }


        // return $item;
        // return view('inventory.show', compact('item'));
        return view('inventory.show', [
            "item" => Item::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        return view("inventory.edit", [
            "item" => Item::findOrFail($id)
        ]);
    }

    public function update($id, Request $request)
    {
        $item = Item::findOrFail($id);
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;

        $item->update();

        return redirect()->route('item.index');
    }

    public function store(Request $request)
    {
        // dd($request);


        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;

        $item->save();


        // $item = Item::create([
        //     "name" => $request->name,
        //     "price" => $request->price,
        //     "stock" => $request->stock,
        // ]);

        // $item = Item::create($request->all());



        // $item = new Item::insert([
        //     "name" => $request->name,
        //     "price" => $request->price,
        //     "stock" => $request->stock,
        // ]);

        return redirect()->route('item.index');
    }


    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->back();
    }
}
