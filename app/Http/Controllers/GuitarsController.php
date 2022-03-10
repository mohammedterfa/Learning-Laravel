<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;
use App\Http\Requests\GuitarFormRequest;

class GuitarsController extends Controller
{
    private static function getData(){
    return[['id'=>1, 'name'=>'Mohammed terfa', 'brand'=>'Fender'],
    ['id'=>2, 'name'=>'Mohammed Mubarak', 'brand'=>'Rayan'],
    ['id'=>3, 'name'=>'Rayan terfa', 'brand'=>'Terfa'],
];

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET

        return view('guitars.index',[
            'guitars' => Guitar::all(),
            'userInput' => '<script>alert("Hallo")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //GET
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuitarFormRequest $request)
    {
        $data = $request->validated();
        //POST
        $guitar = new Guitar();

        $guitar->name = $data['name'];
        $guitar->brand = $data['brand'];
        $guitar->year_made = $data['year_made'];

        $guitar->save();

        return redirect()->route('guitars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guitar $guitar)
    {
        //GET
        return view('guitars.show', [
            'guitar' => $guitar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guitar $guitar)
    {
        //GET
        return view('guitars.edit', [
            'guitar' => $guitar
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GuitarFormRequest $request, Guitar $guitar)
    {
        //POST , PUT M PATCH
        $data = $request->validated();
        //POST


        $guitar->name = $data['name'];
        $guitar->brand = $data['brand'];
        $guitar->year_made = $data['year_made'];

        $guitar->save();

        return redirect()->route('guitars.show', $guitar->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DELETE
    }
}
