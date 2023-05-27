<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'All Posts';
    }

    public function create()
    {
        return 'Create Post';
    }

    public function store(Request $request)
    {
        return 'Store Post';
    }

    public function show(string $id)
    {
        return 'Show Post';
    }

    public function edit(string $id)
    {
        return 'Edit Post';
    }

    public function update(Request $request, string $id)
    {
        return 'Update Post';
    }

    public function destroy(string $id)
    {
        return 'Destroy Post';
    }
}
