<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        $animals = Animal::all();
        return view('animals/animals', ['animals' => $animals]);
    }

    public function create(){
        return view('animals/animals_create');
    }

    public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'name' => 'required|string|max:255',
        'type' => 'required|string',
        'breed' => 'required|string',
        'age' => 'required|integer',
        'location' => 'required|string',
        'contact' => 'required|string',
        'status' => 'required|boolean',
        'description' => 'required|string',
    ]);

    // Lidar com o upload da imagem
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'.'.$image->extension(); // Gera um nome único para a imagem
        $image->move(public_path('assets/images/animals'), $imageName); // Move para o diretório de destino
    }

    // Criação do registro no banco
    $animal = Animal::create([
        'name' => $request->name,
        'type' => $request->type,
        'breed' => $request->breed,
        'age' => $request->age,
        'location' => $request->location,
        'contact' => $request->contact,
        'status' => $request->status,
        'description' => $request->description,
        'image' => $imageName ?? null, // Salva o nome da imagem no banco
    ]);

    return redirect()->route('animals.index')->with('success', 'Animal cadastrado com sucesso!');
}


    public function show(Animal $animal){
        return view('animals/animals_show', ['animal' => $animal]);
    }

    public function edit(Animal $animal){
        return view('animals/animals_edit', ['animal' => $animal]);
    }

    public function update(Request $request, Animal $animal){
        $animal->name = $request->name;
        $animal->save();
        return redirect()->route('animals.index');
    }

    public function destroy(Animal $animal){
        $animal->delete();
        return redirect()->route('animals.index');
    }
}
