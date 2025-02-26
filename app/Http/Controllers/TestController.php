<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TestController extends Controller
{
    public function edit()
    {
        return view('tests.edit', ['courses' => Course::all()]);
    }

    public function update(Request $request)
    {
        $bestGrades = $request->input('best_grade');

        foreach ($bestGrades as $testId => $grade) {
            $test = Test::find($testId);
            if ($test) {
                $test->update(['best_grade' => $grade]);
            }
        }

        return redirect()->route('dashboard');
    }
}
