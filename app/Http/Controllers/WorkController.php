<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkRequest;
use App\Http\Requests\UpdateWorkRequest;
use App\Models\Work;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::get();
        return view("works.index", ["works" => $works]);
    }

    public function create()
    {
        return view("works.add");
    }

    public function store(Request $request)
    {
        $works = new Work();
        $works->fill($request->except('_token'));
        $works->save();
        return redirect()->route("works.index");
    }

    public function show($id, Work $work)
    {
        $data = $work->find($id);
        return view("works.show", ["work" => $data]);
    }

    public function edit($id, Work $work, Request $request)
    {
        $work = $work->find($id);
        $name = $request->get("name");
        $work->name = $name;
        $work->save();
        return redirect()->route("works.index");
    }

    public function update(UpdateWorkRequest $request, Work $work)
    {
        //
    }

    public function softDestroy($id, Work $work)
    {
        $data = $work->find($id);
        $data->isDeleted = true;
        $data->save();
        return redirect()->route("works.index");
    }

    public function trash()
    {
        $works = Work::get();
        return view("works/trash", [
            "works" => $works,
        ]);
    }

    public function delete($id, Work $works)
    {
        $data = $works->find($id);
        $data->delete();
        return redirect()->route("works.trash");
    }

    public function restore($id, Work $works)
    {
        $data = $works->find($id);
        $data->isDeleted = false;
        $data->save();
        return redirect()->route("works.trash");
    }
}
