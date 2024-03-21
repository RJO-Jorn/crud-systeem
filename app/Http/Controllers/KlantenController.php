<?php

namespace App\Http\Controllers;

use App\Models\Klant;
use Illuminate\Http\Request;

class KlantenController extends Controller
{
    public function index() {
        $klanten = Klant::all();
        return view('home', ['klanten' => $klanten]);
    }

    public function editData(Request $request) {
        $editKlant = Klant::find($request->id);
        return response()->json($editKlant);
    }

    public function update(Request $request) {
        
        $validate = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'birthDate' => 'required|date',
            'emailAdress' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:255',
            'houseNumber' => 'required|string|max:255',
            'StreetAddress' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
        ]);
    
        $klant = Klant::find($request->id);
        $klant->firstname = $request->firstname;
        $klant->lastname = $request->lastname;
        $klant->birthDate = $request->birthDate;
        $klant->emailAdress = $request->emailAdress;
        $klant->phoneNumber = $request->phoneNumber;
        $klant->houseNumber = $request->houseNumber;
        $klant->StreetAddress = $request->StreetAddress;
        $klant->city = $request->city;
        $klant->country = $request->country;
        $klant->save();

        return redirect()->route('home');
    }

    public function store(Request $request) {
        $klant = new Klant;
        $klant->firstname = $request->firstName;
        $klant->lastname = $request->lastName;
        $klant->birthDate = $request->birthDate;
        $klant->emailAdress = $request->emailAddress;
        $klant->phoneNumber = $request->countryCode + $request->phoneNumber;
        $klant->houseNumber = $request->houseNumber;
        $klant->streetAddress = $request->StreetAddress;
        $klant->city = $request->City;
        $klant->country = $request->Country;

        $klant->save();

        return redirect()->route('home')->with('message', 'Nieuwe klant is opgeslagen!');
    }
   
    public function delete(Request $request) {
        $klant = Klant::find($request->id);

        $klant->delete();

        return redirect()->route('home')->with('success', 'Item deleted successfully.');
    }
}
