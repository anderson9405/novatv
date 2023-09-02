<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     * GET
     */
    public function index()
    {
        $categories = Category::all();
        dd($categories);
    }

    /**
     * Show the form for creating a new resource.
     * Retornar la vista con el formulario para la creación del elemento con los registros que requiera. // alimentar la vista
     * GET
     */
    public function create()
    {
        //no se trae porque 
    }

    /**
     * Store a newly created resource in storage.
     * Recibir solicitud del formulario de creación del elemento y creación del registro
     * POST
     */
    public function store(Request $request)
    {
        $category = new Category;

        $category->name = $request->name;
        $category->description = $request->description;

        if($category->save()){
            //redireccionar a la vista index
        }
    }

    /**
     * Display the specified resource.
     * GET
     */
    public function show(string $id)
    {
        $category = Category::find($id);
        dd($category);
    }

    /**
     * Show the form for editing the specified resource.
     * GET
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        dd($category);
    }

    /**
     * Update the specified resource in storage.
     * PUT
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;

        if($category->save()){
            //redireccionar a la vista index
        }
    }

    /**
     * Remove the specified resource from storage.
     * DELETE
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
    }
}
