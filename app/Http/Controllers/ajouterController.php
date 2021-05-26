<?php

namespace App\Http\Controllers;

use App\Models\domain;
use App\Models\annonce;
use App\Models\Sousdomain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ajouterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domains = domain::all();
        $sous_domains = Sousdomain::all();
        return view('admin.postJob')->with([
            'domains' => $domains,
            'sous_domains' => $sous_domains,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;
        $annonces = DB::table('annonces')->where('client_id' , $id)->get();
        return view('admin.listJob')->with('annonces' , $annonces);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request)
    {
    
      $domain = DB::table('domains')->where('id',$request->domain)->pluck('name')->first();
      $sous_domain = DB::table('sousdomains')->where('id',$request->sous_domain)->pluck('name')->first();
      $id = Auth::user()->id;
      annonce::create([
            'title' => $request->titre,
            'description' => $request->description,
            'domaine' => $domain,
            'sous_domaine' => $sous_domain,
            'client_id' => $id,
        ]);
        $annonces = DB::table('annonces')->where('client_id' , $id)->get();
        return view('admin.listJob')->with('annonces' , $annonces);
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
       $annonce = annonce::where('id',$id)->first();
       $annonce->delete();
       return redirect()->route('ajouter.create');
    }
}
