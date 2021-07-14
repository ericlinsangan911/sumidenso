<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use DataTables;
use App\Models\Animal;
use App\Models\Grade;
use Auth;
use Storage;
use Response;
use Illuminate\Support\Str;
use Session;

class AnimalsController extends Controller
{
    public function manageAnimals(){
        $animals = Animal::get();
        return view('index')->with(['animals' => $animals]);
    }
    public function guessGame(){
        return view('guessing');
    }
    public function grades(){
        $grade = Grade::get();
        return view('grade')->with(['grade' => $grade]);
    }
    public function tri(){
        $iterator = 0;
        return view('triangle')->with(['iterator' => $iterator]);
    }
  
    
  
    public function addAnimals (Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'kind' => 'required',
            'status' => 'required'

        ]);


            $animal = new Animal();
           
            $animal->name = $request->input('name');
            $animal->kind = $request->input('kind');
            $animal->status = $request->input('status');
          

            $animal->save();


        return back()->withInput()->with([
                'success' => 'Animal added succesfully.']);
    }
    public function addGrade (Request $request)
    {

        $validatedData = $request->validate([
            'grade' => 'required',
            'subject' => 'required',

        ]);


            $grade = new Grade();
           
            $grade->grade = $request->input('grade');
            $grade->subject = $request->input('subject');
          

            $grade->save();


        return back()->withInput()->with([
                'success' => 'Grade added succesfully.']);
    }
    public function flyAnimals (Request $request)
    {

        


            $animal =  Animal::get();
            foreach($animal as $x){
                $x->status = 'Flying';
                $x->save();
            }

          


        return back()->withInput()->with([
                'success' => 'Animals commanded succesfully.']);
    }
    public function runAnimals (Request $request)
    {

        


            $animal =  Animal::get();
            foreach($animal as $x){
                $x->status = 'Running';
                $x->save();
            }

          


        return back()->withInput()->with([
                'success' => 'Animals commanded succesfully.']);
    }
    public function gameRandom (Request $request)
    {

        


        $randomnumber= mt_rand(1,1000);
        // dd($randomnumber);
        $i = 1;
        if ($request->number != $randomnumber)
        {
            return back()->withInput()->with([
                'success' => 'Incorrect number']);
                $i++;
            }
            else{
                return back()->withInput()->with([
                    'success' => 'I have guessed your number in '.$i.'times']);
            }


       
    }
    public function triangle (Request $request)
    {

        


        $iterator = $request->number;
        return view('triangle')->with(['iterator' => $iterator]);

       
    }
}
