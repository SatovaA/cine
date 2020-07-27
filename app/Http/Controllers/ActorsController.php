<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;

class ActorsController extends Controller
{
    public function list()
    {
        $actors = Actor::all();
        return view('pages.actors.list', compact('actors'));
    }

    public function create()
    {
        return view('pages.actors.create');
    }

    public function store(Request $request)
    {
        try {

            $actor = new Actor;
            $actor->name = $request->name;
            $actor->surname = $request->surname;
            $actor->status = 1;
            $actor->save();

            alert()->success('Exitoso','Se actualizo correctamente');

            return redirect()->route('get_list_actors');

        }catch(\Exception $e) {
            alert()->error('Error','Ocurrio un error');

            return redirect()->route('get_list_actors');
        }
    }

    public function edit($idActor)
    {

        $actor = Actor::find($idActor);
        $actor = Actor::find($idActor);

        return view('pages.actors.edit', compact('actor'));

    }

    public function update(Request $request)
    {
        try {

            $actor = Actor::find($request->idActor);
            $actor->name = $request->name;
            $actor->surname = $request->surname;
            $actor->status = $request->status;
            $actor->save();

            alert()->success('Exitoso','Se ha actualizado correctamente');

            return redirect()->route('get_list_actors');

        }catch(\Exception $e) {
            alert()->error('Error','Ocurrio un error');

            return redirect()->route('get_list_actors');
        }
    }

    public function delete($idActor)
    {
        try {

            $actor = Actor::find($idActor);
            $actor->status = 0;
            $actor->save();

            alert()->success('Exitoso','Se ha eliminado correctamente');

            return redirect()->route('get_list_actors');

        }catch(\Exception $e) {
            alert()->error('Error','Ocurrio un error');

            return redirect()->route('get_list_actors');
        }
    }

}
