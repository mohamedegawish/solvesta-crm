<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Contact;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts=Account::latest()->paginate(10);
        return view('/admin/accounts.index',["accounts"=>$accounts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Contacts=Contact::all();
        $accounts=Account::all();
            return view('/admin/accounts.create',['contacts'=>$Contacts,'accounts'=>$accounts]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
