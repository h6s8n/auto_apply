<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Professor;
use App\Models\ProfessorTitle;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfessorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    protected $user_id;

    public function __construct(Request $request)
    {
        if ($request->phone) {
            $request['phone'] = numberFarsiToEnlish($request->phone);
        }
    }

    public function index()
    {
        $user_id = Auth()->user()->id;
        $professors = Professor::where('user_id', intval($user_id))->get();
//        dd($professors);
        return view('professors.index', compact('professors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $professorTitles = ProfessorTitle::all();
        $continents = Continent::all();
        return view('professors.create', compact('professorTitles', 'continents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {

        $user_id = Auth()->user()->id;
        $request->validate([
            'name' => 'required',
            'email' => 'unique:professors,email',
        ]);

        Professor::create([
            'user_id' => $user_id,
            "continent_id" => $request->continent_id,
            "professor_title_id" => $request->professor_title_id,
            "name" => $request->name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "university_name" => $request->university_name,
            "field_of_study" => $request->field_of_study,
            "research_interest" => $request->research_interest,
            "state_name" => $request->state_name,
            "city_name" => $request->city_name,
            "country_name" => $request->country_name,
        ]);

        return redirect()->route('professors.index')
            ->with('success', 'Professor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Professor $professors
     * @return Response
     */
    public function show(Professor $professor)
    {
        return view('professors.show', compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Professor $professors
     * @return Response
     */
    public function edit(Professor $professor)
    {
        $professorTitles = ProfessorTitle::all();
        $continents = Continent::all();
        return view('professors.edit', compact('professor', 'professorTitles', 'continents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Professor $professors
     * @return RedirectResponse
     */
    public function update(Request $request, Professor $professor)
    {



        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:professors,email',
            "continent_id" => 'required',
            "professor_title_id" => 'required',
            "name" => 'required',
            "last_name" => 'required',
            "email" => 'required',
            "university_name" => 'required',
            "field_of_study" => 'required',
            "research_interest" => 'required',
            "state_name" => 'required',
            "city_name" => 'required',
            "country_name" => 'required',

        ]);

        $professor->update($request->all());

        return redirect()->route('professors.index')
            ->with('success', 'Professor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Professor $professors
     * @return RedirectResponse
     */
    public function destroy(Professor $professor)
    {
        $professor->delete();
        return redirect()->route('professors.index')
            ->with('success', 'Professor deleted successfully');
    }
}
