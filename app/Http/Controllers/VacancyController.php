<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVacancyRequest;
use App\Http\Requests\UpdateVacancyRequest;
use App\Models\Vacancy;

class VacancyController extends Controller
{
  
    public function index()
    {

        $vacancies = Vacancy::all()->sortByDesc('id');
        return view('jobs.index',[
            'vacancies' => $vacancies
        ]);

    }

    public function create()
    {
        return view('jobs.create');
    }

  
    public function store(StoreVacancyRequest $request)
    {

        $vacancy = Vacancy::create(
            [
                'title' => $request->title,
                'salary' => $request->salary,
                'company' => $request->company,
                'location' => $request->location,
                'description' => $request->description,
                'expiry_date' => $request->expiry_date,
            ]
        );

        $vacancy->save();

        return redirect('jobs/')->with([ 'id' => $request->id, 'title' => $request->title, 'flash' => 'create' , 'color' => 'bg-blue-500' , 'flash-message' => "$vacancy->title job added" ]);;

    }
  
    
    public function show(Vacancy $vacancy)
    {
        return view('jobs.show',[
            'vacancy' => $vacancy
        ]);
    }

   
    public function edit(Vacancy $vacancy)
    {
        
    }


    public function update(UpdateVacancyRequest $request, Vacancy $vacancy)
    {
        
    }

    
    public function destroy(Vacancy $vacancy)
    {
        $vacancy = Vacancy::find($vacancy->id);
 
        $vacancy->delete();

        return redirect('/jobs')->with([ 'id' => $vacancy->id, 'title' => $vacancy->title, 'flash' => 'delete' , 'color' => 'bg-red-500' , 'flash-message' => "$vacancy->title job removed" ]);

     }

}
