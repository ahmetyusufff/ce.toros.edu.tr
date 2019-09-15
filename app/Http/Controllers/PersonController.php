<?php

namespace App\Http\Controllers;

use App\Http\Resources\PersonResourceCollection;
use App\Http\Resources\PersonResource;
use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
	/**
	 * @param Person $person
	 * @return PersonResource
	 */
    public function show(Person $person) : PersonResource
    {
    	return new PersonResource($person);
    }
    public function index() : PersonResourceCollection
    {
    	return new PersonResourceCollection(Person::paginate(20));
    }
    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required',
    		'lastname' => 'required',
    		'email' => 'required',
    		'phone' => 'required',
    		'password' => 'required',
    	]);
    	$person = Person::create($request->all());
    	return new PersonResource($person);
    }
}
