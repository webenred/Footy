<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pricing;
use App\Models\Service;
use App\Models\Type;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() 
    {   
        $service = Service::all();
       
        return view('service.index', [
            'services' => $service
        ]);
    }

    public function create()
    {
        return view('service.create', [
            'categories' => Category::all(),
            'types' => Type::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required',
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
            'base_formula' => 'required',
            'extra_formula' => 'required'
        ]);
    
        $price = Pricing::create([
            'base_formula' => $request->input('base_formula'),
            'extra_formula' => $request->input('extra_formula'),
        ]);
    
        Service::create([
            'slug' => $request->input('slug'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'type_id' => $request->input('type_id'),
            'pricing_id' => $price->id, 
        ]);
    
        return redirect()->route('index')->with('success', 'Service créé avec succès');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'slug' => 'required',
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
            'pricing_id' => 'required',
        ]);
        
        $service = service::find($id);
        $service->update($request->all());

        return redirect()->rout('index')->with('success, up');
    }

    public function destroy($id)
    {
        $service = service::find($id);
        $service->delete();

        return redirect()->route('index')->with('success, Supprimer avec succes');

    }

    

}
