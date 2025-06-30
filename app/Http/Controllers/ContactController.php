<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   
    public function index()
    {
        return view('admin/contacts.index');
    }

   
    public function create()
    {
        return view('admin/contacts.create');
        
    }

    
    public function store(Request $request)
    {
        return response()->json([
            'message' => 'Contact created successfully',
            'data' => $request->all()
        ]);
        
    }

    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
        
    }

    
    public function update(Request $request, string $id)
    {
       
    }

    public function destroy(string $id)
    {
        
    }
}
