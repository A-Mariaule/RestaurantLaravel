<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Http\Requests\CreatePostRequest;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('restaurants.index',['restaurants' => Restaurant::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("restaurants.create",["restaurant" => new Restaurant()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostRequest $request)
    {
        Restaurant::create($request->all());
        return redirect()->route('restaurants.index')->with('success','Restaurant created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('restaurants.show', ['restaurant' => Restaurant::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('restaurants.edit',['restaurant' => Restaurant::findOrFail($id)]);

    }   

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatePostRequest $request, string $id)
    {
        Restaurant::findOrFail($id)->update($request->all());
        return redirect()->route('restaurants.index')->with('success','Restaurant updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Restaurant::findOrFail($id)->delete();
        return redirect()->route('restaurants.index')->with('success','Restaurant deleted successfully.');
    }
}
