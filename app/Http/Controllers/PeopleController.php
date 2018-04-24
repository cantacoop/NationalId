<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;
use App\Http\Requests\PeopleRequest;

class PeopleController extends Controller
{
    public function index() {

        $people = People::orderBy('number', 'asc')->get();

        return view('people.index', compact('people'));
    }

    public function create() {
        return view('people.create');
    }

    public function store(PeopleRequest $request) {

        People::create(request()->all());

        return redirect('/people');
    }

    public function show($number) {

        $person = People::where('number', '=', $number)->first();

        return view('people.show', compact('person'));
    }

    public function edit(People $person) {

        return view('people.edit', compact('person'));
    }

    public function update(PeopleRequest $request, People $person) {
        
        $person->update($request->all());

        return redirect("/people/{$person->number}");
    }

    public function destroy($number) {

    }
}
