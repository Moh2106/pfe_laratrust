<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlainteResource;
use App\Models\Plainte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlainteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PlainteResource::collection(Plainte::latest()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $nombre = DB::table('plaintes')
            ->whereBetween('date_inscription', [$request->depart, $request->arrive] )
            ->count('*');

            return response()->json($nombre);
    }

    public function collect()
    {
            $plainte = DB::table('plaintes')
            ->join('plainte_designations', 'plaintes.id', '=', 'plainte_designations.plainte_id')
            ->join('users', 'users.name', '=', 'plainte_designation.vice_procureur_name')
            ->where('role_user.role_id', '=' , 2)
            ->select('users.*')
            ->get();

            return response()->json($plainte);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Plainte::create([
            'contre_inconnu' => $request->contre_inconnu,
            'source_de_la_plainte' => $request->source_plainte,
            'type_de_la_plainte' => $request->type_plainte,
            'reference' => $request->reference,
            'date_inscription' => $request->date_inscription,
            'date_des_faits' => $request->date_des_faits,
            'lieu_des_faits' => $request->lieu_des_faits,
            'objet' => $request->objet,
            'nom_plaignant1' => $request->nom_plaignant1,
            'prenom_plaignant1' => $request->prenom_plaignant1,
            'genre_plaignant1' => $request->genre_plaignant1,
            'cin_plaignant1' => $request->cin_plaignant1,
            'avocat_plaignant1' => $request->avocat_plaignant1,
            'nom_plaignant2' => $request->nom_plaignant2,
            'prenom_plaignant2' => $request->prenom_plaignant2,
            'genre_plaignant2' => $request->genre_plaignant2,
            'cin_plaignant2' => $request->genre_plaignant2,
            'avocat_plaignant2' => $request->avocat_plaignant2,
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
        $plainte = Plainte::find($id);
        return response()->json($plainte);
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
        $plainte = Plainte::find($id);
        $plainte->update($request->all());

        return response()->json('Plainte modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function destroy($id)
    {
        $plainte = Plainte::find($id);
        $plainte->delete();

        return response()->json('La plainte supprimé avec succè£s');
    }*/

    public function destroy(Plainte $plainte){ 
        $plainte->delete();
        return response()->noContent();
    }
}
