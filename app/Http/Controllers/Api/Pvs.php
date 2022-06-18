<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PvResource;
use Illuminate\Http\Request;
use App\Models\Pv;
use Illuminate\Support\Facades\DB;

class Pvs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PvResource::collection(Pv::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $nombre = DB::table('pvs')
            ->whereBetween('date_inscription', [$request->depart, $request->arrive] )
            ->count('*');

        /*$ens = DB::table('plaintes')
            ->whereBetween('date_inscription', [$request->depart, $request->arrive] )
            ->select('plaintes.*');*/

            return response()->json($nombre);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pv::create([
            'police_judiciaire' => $request->police_judiciaire,
            'classe_de_la_police' => $request->classe_de_la_police,
            'source_pv' => $request->source_pv,
            'date_enregistrement' => $request->date_enregistrement,
            'numero_envoi' => $request->numero_envoi,
            'date_inscription' => $request->date_inscription,
            'type_enregistrement' => $request->type_enregistrement,
            'sujet_pv' => $request->sujet_pv,
            'contre_inconnu' => $request->contre_inconnu,
            'nom_personne_pv1' => $request->nom_personne_pv1,
            'prenom_personne_pv1' => $request->prenom_personne_pv1,
            'genre_personne_pv1' => $request->genre_personne_pv1,
            'cin_personne_pv1' => $request->cin_personne_pv1,
            'avocat_personne_pv1' => $request->avocat_personne_pv1,
            'nom_personne_pv2' => $request->nom_personne_pv2,
            'prenom_personne_pv2' => $request->prenom_personne_pv2,
            'genre_personne_pv2' => $request->genre_personne_pv2,
            'cin_personne_pv2' => $request->cin_personne_pv2,
            'avocat_personne_pv2' => $request->avocat_personne_pv2,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pv = Pv::find($id);
        return response()->json($pv);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {

        $user = Pv::find($id);
        $user->update($request->all());

        return response()->json('Utilisateur modifié');
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
