<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\People;

class PeopleController extends Controller
{
    public function index() {

        $people = People::orderBy('number', 'asc')->get();

        return view('people.index', compact('people'));
    }

    public function create() {
        return view('people.create');
    }

    public function store() {

        $this->validate(request(), [
            'number'    => 'required',
            'firstname' => 'required',
            'lastname'  => 'required'
        ]);

        People::create(request()->all());

        return redirect('/people');
    }

    public function show($number) {

        $person = People::where('number', '=', $number)->first();

        return view('people.show', compact('person'));
    }
}
