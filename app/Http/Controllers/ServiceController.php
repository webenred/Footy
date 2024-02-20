<?php

namespace App\Http\Controllers;

use App\Models\Service;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() 
    {   
        $services = Service::all();
       
        return $services;
    }

    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required',
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
            'pricing_id' => 'required',
        ]);
        Service::create($request->all());
        return redirect()->root('index')->with('success, cree avec succes');
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

        return redirect()->root('index')->with('success, MAJ avec succes');
    }

    public function destroy($id)
    {
        $service = service::find($id);
        $service->delete();

        return redirect()->root('index')->with('success, Supprimer avec succes');

    }

    public function create()
    {

    }

}
