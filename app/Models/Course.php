<?php

namespace App\Models;

use Dom\Attr;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $fillable = ['cu_code', 'name', 'credits', 'passed_at'];

    /**
     * @return HasMany
     */
    public function tests(): HasMany
    {
        return $this->hasMany(Test::class);
    }

    public function finalGrade(): Attribute
    {
        return Attribute::get(function () {
                $grade = 0;
                $completed = true;
            foreach ($this->tests as $test) {
                if ($test->best_grade == null) {
                    $completed = false;
                }
            }
            foreach ($this->tests as $test) {
                if ($completed == true) {
                    $grade += $test->best_grade * $test->weighing_factor;
                } else {
                    return null;
                }
            }
                return $grade;
        });
    }

    public function totalECs(): Attribute
    {
        return Attribute::get(function () {
            $total = 0;
            foreach (Course::all() as $course) {
                $passed = true;

                foreach ($course->tests as $test) {
                    if ($test->best_grade < 5.5) {
                        $passed = false;
                    }
                }
                if ($passed) {
                    $total += $course->credits;
                }
            }
            return $total;
        });
    }
}
