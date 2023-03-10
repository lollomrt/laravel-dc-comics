<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $this->validation($request->all());

        // $form_data = $request->all();

        $newComic = new Comic();
        $newComic->fill($form_data);
        // $newComic -> title = $form_data['title'];
        // $newComic -> thumb = $form_data['thumb'];
        // $newComic -> series = $form_data['series'];
        // $newComic -> type = $form_data['type'];
        // $newComic -> sale_date = $form_data['sale_date'];
        // $newComic -> price = $form_data['price'];
        // $newComic -> description = $form_data['description'];

        $newComic -> save();

        return redirect()->route('comics.show' , $newComic['id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single = Comic::findOrFail($id);
        // $single = Comic::where('slug', $slug)->get();
        // $single = $single[0];
        // // dd($single);
        return view('comics.show', compact('single'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $single = Comic::findOrFail($id);
        return view('comics.edit', compact('single'));
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
        
        $single = Comic::findOrFail($id);
        // $request->validate([
        //     'title' => 'required|max:100',
        //     'thumb' => 'nullable',
        //     'series' => 'required|max:50',
        //     'type' => 'required|max:30',
        //     'sale_date' => 'required',
        //     'price' => 'required',
        //     'description' => 'nullable'
        // ]);
        // $form_data = $request->all();
        $form_data = $this->validation($request->all());
        $single->update($form_data);
        return redirect()->route('comics.show' , ['comic' => $single->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $single = Comic::findOrFail($id);
        $single->delete();
        return redirect()->route('comics.index');
    }

    private function validation($data){
        $validator = Validator::make($data, [
            'title' => 'required|max:100',
            'thumb' => 'nullable',
            'series' => 'required|max:50',
            'type' => 'required|max:30',
            'sale_date' => 'required',
            'price' => 'required',
            'description' => 'nullable'
        ],
        [
            'title.required' => 'Il titolo ?? obbligatorio',
            'title.max' => 'Il titolo non pi?? superare :max parole',
            'series.required' => 'La serie ?? obbligatoria',
            'series.max' => 'La serie non pu?? superare :max parole',
            'type.required' => 'Il tipo ?? obbligatorio',
            'type.max' => 'Il tipo non pu?? superare :max parole',
            'sale_date.required' => 'La data di uscita ?? obbligatoria',
            'price.required' => 'Il prezzo ?? obbligatorio'

        ])->validate();

        return $validator;
    }
}
