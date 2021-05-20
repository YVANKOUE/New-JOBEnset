<?php

namespace App\Http\Controllers;

use App\Models\domain;
use App\Models\annonce;
use App\Models\Sousdomain;
use Illuminate\Http\Request;

class AnnonceRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = annonce::all();
   
        return view('Admin.listesAnnonce', compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $domains = domain::all();
        $sous_domains = Sousdomain::all();
        return view('AjouterAnnonce')->with([
            'domains' => $domains,
            'sous_domains' => $sous_domains,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $annonces = annonce::create ([
        //     'title' => $request['title'],
        //     'description' => $request['description'],
        //     'domaine' => $request['domaine'],
        //     'sousDomaine' => $request['sousDomaine'],
        // ]);
       
        // $annonces = annonce::select('id')->where('id', $annonces);
        // dd('title');
        // return redirect()->route('listesAnnonce.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
