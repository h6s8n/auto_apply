<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
        $professors = Professor::where('user_id',intval($user_id))->get();
//        dd($professors);
        return view('professors.index', compact('professors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
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
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect()->route('professors.index')
            ->with('success','Professor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professor  $professors
     * @return \Illuminate\Http\Response
     */
    public function show(Professor $professor)
    {
        return view('professors.show',compact('professor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professor  $professors
     * @return \Illuminate\Http\Response
     */
    public function edit(Professor $professor)
    {
        return view('professors.edit',compact('professor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professor  $professors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professor $professor)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $professor->update($request->all());
        return redirect()->route('professors.index')
            ->with('success','Professor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professor  $professors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professor $professor)
    {
        $professor->delete();
        return redirect()->route('professors.index')
            ->with('success','Professor deleted successfully');
    }
}
