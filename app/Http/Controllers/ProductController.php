<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        // $products = Product::all();
        return "list of products";
    }
    public function create()
    {
        return "create a product";
    }
    public function store(Request $request)
    {
        return "store a product";
    }
    public function show(string $id)
    {
        return "show a product";
    }
    public function edit(string $id)
    {
        return "edit a product";
    }
    public function update(Request $request, string $id)
    {
        return "update a product";
    }
    public function destroy(string $id)
    {
        return "delete a product";
    }
}
