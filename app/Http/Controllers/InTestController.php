<?php

/**
 * InTestController
 * @author Ashish Bairagi <https://github.com/abbackend>
 */

namespace App\Http\Controllers;

use App\Models\InTest;
use App\Models\Patient;
use Illuminate\Support\Facades\File;
use App\Http\Requests\InTest as InTestRequest;

class InTestController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::forNonHospitalPatient()->orderBy('id', 'DESC')->get();
        return view('tests.in.create', compact('patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\InTest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InTestRequest $request)
    {
        $oldTest = InTest::forPatient($request->patient_id)->first();
        if (!empty($oldTest)) {
            return redirect()->back()->with(['error' => 'Report already exists for this patient!']);
        }

        $test = new InTest();
        $test->fill($request->validated());
        $images = [];
        if($request->hasFile('inv_image')) {
            $files = $request->file('inv_image');
            foreach ($files as $file) {
                $images[] = $file->store('tests/in');
            }
        }

        $test->setInvImages($images);
        $test->save();

        return redirect()->route('in.create')->with(['success' => 'Record added succesfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $test = InTest::findOrFail($id);
        $patients = [$test->patient];
        return view('tests.in.edit', compact('patients', 'test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\InTest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InTestRequest $request, int $id)
    {
        $test = InTest::findOrFail($id);
        $test->fill($request->validated());
        $images = $test->inv_images;
        if ($request->hasFile('inv_image')) {
            if (!empty($images)) {
                foreach ($images as $image) {
                    $path = storage_path()."/app/{$image}";
                    if(File::exists($path)){
                        unlink($path);
                    }
                }
                $images = [];
            }

            $files = $request->file('inv_image');
            foreach ($files as $file) {
                $images[] = $file->store('tests/in');
            }
        }

        $test->setInvImages($images);
        $test->save();

        return redirect()->back()->with(['success' => 'Record updated succesfully!']);
    }

    /**
     * Retrive the image file from storage folder.
     *
     * @param  int  $id
     * @param  int  $index
     * @return \Illuminate\Http\Response
     */
    public function getImageFile(int $id, int $index)
    {
        $test = InTest::findOrFail($id);
        $path = storage_path()."/app/{$test->getFileByIndex($index)}";

        $file = File::get($path);
        $type = File::mimeType($path);

        return response($file)->header("Content-Type", $type);
    }

    /**
     * Delete the image file from storage folder.
     *
     * @param  int  $id
     * @param  int  $index
     * @return \Illuminate\Http\Response
     */
    public function deleteImageFile(int $id, int $index)
    {
        $test = InTest::findOrFail($id);
        $path = storage_path()."/app/{$test->getFileByIndex($index)}";
        $images = $test->inv_images;
        if(File::exists($path)){
            unlink($path);
            unset($images[$index]);
        }

        $test->setInvImages($images);
        $test->save();

        return response(null);
    }
}
