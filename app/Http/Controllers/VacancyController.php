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
        return view('jobs',[
            'vacancies' => $vacancies
        ]);

    }

    public function create()
    {
        return view('create');
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

        return redirect('/jobs');

    }

  
    public function show(Vacancy $vacancy)
    {
        return view('job',[
            'vacancy' => $vacancy
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacancy $vacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVacancyRequest $request, Vacancy $vacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacancy $vacancy)
    {
        //
    }
}
