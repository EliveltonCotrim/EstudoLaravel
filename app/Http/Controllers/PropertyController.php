<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    public function index(){

        // $propriedades = DB::select("select * from properties");

        $propriedades = Property::all();
        return view('Property.index')->with('propriedades', $propriedades);
    }

    // Mostrar todos imoveis
    public function show($name){

        // $property = DB::select("select * from properties where name = ?",[$name]);

        $property = Property::where('name', $name)->get();
        if(!empty($property)){
            return view('Property.show')->with('property', $property);
        }else{
            return redirect()->route('imoveis.show');
        }

    }

    public function create(){
        return view('Property.create');

    }

    // Cadastrar um novo imovel
    public function store(Request $request){

        $propertySlug = $this->setName($request->title);

        // $property = [
        //     $request->title,
        //     $propertySlug,
        //     $request->description,
        //     $request->rental_price,
        //     $request->sale_price
        // ];

        // DB::insert("insert into properties(title, name, description, rental_price, sale_price)
        //         values(?, ?, ?, ?, ?)", $property);

        $property = [

            'title' => $request->title,
            'name' =>$propertySlug,
            'description' =>$request->description,
            'rental_price' =>$request->rental_price,
            'sale_price' =>$request->sale_price
        ];

        Property::create($property);

        return redirect()->route('imoveis');
    }

    // Editar um imovel
    public function editar($name){
        // $property = DB::select("select * from properties where name = ?",[$name]);
        $property = Property::where('name', $name)->get();

        if(!empty($property)){
            return view('Property.edit')->with('property', $property);
        }else{
            return redirect()->route('imoveis.show');
        }
    }

    // Atualizar um imovel
    public function update(Request $request, $id){

        $propertySlug = $this->setName($request->title);
        // $property = [
        //     $request->title,
        //     $propertySlug,
        //     $request->description,
        //     $request->rental_price,
        //     $request->sale_price,
        //     $id
        // ];

        // DB::update("update properties set title = ?, name = ?, description = ?, rental_price = ?, sale_price = ? where id = ?", $property);

        $property = Property::find($id);
        $property->title = $request->title;
        $property->name = $propertySlug;
        $property->description = $request->description;
        $property->rental_price = $request->rental_price;
        $property->sale_price = $request->sale_price;
        $property->save();

        return redirect()->route('imoveis');
    }

    // Deletar um imovel
    public function destroy($name){
        // $property = DB::select("select * from properties where name = ?",[$name]);

        $property = Property::where('name', $name)->get();

        if(!empty($property)){
            DB::delete("DELETE FROM properties where name = ?", [$name]);
        }

        return redirect()->route('imoveis');
    }

    public function setName($title){
        $propertySlug = str::slug($title);
        // $properties = DB::select("select * from properties");
        $properties = Property::all();
        $t = 0;
        foreach($properties as $property){
            if(str::slug($property->title) === $propertySlug){
                $t++;
            }
        }

        if($t > 0){
            $propertySlug = $propertySlug.'-'.$t;
        }

        return $propertySlug;
    }



}
