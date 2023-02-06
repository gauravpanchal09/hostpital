<?php

/**
 * PatientController
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Requests\Patient as PatientRequest;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::forNonHospitalPatient()->orderBy('id', 'DESC')->get();
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Patient  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        $patient = new Patient();
        $patient->fill($request->validated());
        $patient->generateRegistrationNumber();
        $patient->save();
        if ($patient->tests === 'anc') {
            return redirect('tests/anc');
        } else if ($patient->tests === 'pl') {
            return redirect('tests/pl');
        } else if ($patient->tests === 'in') {
            return redirect('tests/pl');
        }
        //return redirect()->route('patients.index')->with(['success' => 'Record added succesfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Patient  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, Patient $patient)
    {
        $patient->fill($request->validated());
        $patient->save();

        return redirect()->route('patients.index')->with(['success' => 'Record updated succesfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('patients.index')->with(['success' => 'Record deleted succesfully!']);
    }
}
