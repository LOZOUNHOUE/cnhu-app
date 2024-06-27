<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function createadminAccount(Request $request)
    {
        $admin = User::where('role', 'Administrateur')->first();

        if($admin)
        {
            return response()->json("L'administrateur avait déjà été enregistré");
        }

        $admin = User::create([
            'nom' => 'LOZOUNHOUE',
            'prenom' => 'Rock Parfait',
            'sexe' => 'Masculin',
            'telephone' => '61664172',
            'email' => 'lozounhouerockparfait@gmail.com',
            'role' => 'Administrateur',
            'password' => 'parfait22',
        ]);

        return response()->json('L"administrateur a été enregistré avec succès');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
