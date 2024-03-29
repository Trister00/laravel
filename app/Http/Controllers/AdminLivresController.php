<?php

namespace App\Http\Controllers;
use App\Livre;
use Illuminate\Http\Request;

class AdminLivresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return '1';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Back/livre');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $livre = new Livre();
        $livre->Titre = $request->Titre;
        //PDF Upload
        if($request->hasFile('document'))
        {
            $fileNameWithExt = $request->file('document')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension= $request->file('document')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'_.'.$extension;
            $path = $request->file('document')->storeAs('public/livres',$fileNameToStore);
            //
            $livre->document = $fileNameToStore;
        }
        $livre->save();
        return view('Back/livre');
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
        $livre = Livre::find($id);
        return view('Back/livreEdit')->with('livre',$livre);
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
        $livre = Livre::find($id);
        $livre->delete();
        $livres = Livre::all();
        return view('Back/livres')->with('livres',$livres);
    }
    public function editer()
    {
        $livres = Livre::all();
        return view('Back/livres')->with('livres',$livres);
    }
}
