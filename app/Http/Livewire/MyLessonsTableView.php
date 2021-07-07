<?php

namespace App\Http\Livewire;

use App\Models\Lecturer;
use App\Models\CourseUser;
use App\Models\CourseLecturer;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use Illuminate\Support\Facades\Auth;
use LaravelViews\Actions\RedirectAction;
use Illuminate\Database\Eloquent\Builder;

class MyLessonsTableView extends TableView
{
    /**
     * Sets a initial query with the data to fill the table
     *
     * @return Builder Eloquent query
     */
    public function repository(): Builder
    {
        $user_id = Auth::user()->id;
        $lecturer = Lecturer::where('user_id', $user_id)->first();
        $course_lecturers = CourseLecturer::query()->where('lecturer_id', $lecturer->id);
        return $course_lecturers;
    }

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('Code')->sortBy('course.code'),
            Header::title('Name')->sortBy('course.name'),
            Header::title('Year')->sortBy('year'),
            Header::title('Credits')->sortBy('credits'),
            Header::title('Group')->sortBy('group'),
            Header::title('Semester')->sortBy('semester'),
            ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row(CourseLecturer $courselecturer): array
    {
        return [
            $courselecturer->course->code,
            $courselecturer->course->name,
            $courselecturer->course->year,
            $courselecturer->course->credits,
            $courselecturer->course->group,
            $courselecturer->course->semester,
        ];
    }
    protected function actionsByRow()
    {
        return [
            new RedirectAction('courses.show', 'See course', 'maximize-2'),
        ];
    }
}
