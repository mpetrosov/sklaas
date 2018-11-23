<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $items = Item::where('user_id', auth()->id())->paginate(2);
        return view('wishlist', compact('items'));
        // $items = Item::all();
        // return view('wishlist', compact('/'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wishlist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $validated = request()->validate([
            'name' => 'required', 
            'desc' => 'required',
            'link' => 'nullable',
            'user_id' => 'exists:users,id'
        ]);
    
        Item::create($validated);

        return redirect('/wishlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $id)
    {
        // $items = Item::where('user_id', auth()->id())->get();
        // // dd($items);
        // return view('wishlist', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Item::find($id);
        $items->delete();
        return redirect('/wishlist')->with('success', 'Stock has been deleted Successfully');
    }
}
