<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\Attendance;
use App\Models\CourseUser;
use App\Actions\DeleteAction;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use Illuminate\Support\Facades\Auth;
use LaravelViews\Actions\RedirectAction;
use Illuminate\Database\Eloquent\Builder;

class AttendanceTableView extends TableView
{
    protected $paginate = 20;

    public $searchBy = ['course.code', 'course.name', 'course.year'];
    /**
     * Sets a initial query with the data to fill the table
     *
     * @return Builder Eloquent query
     */
    public function repository(): Builder
    {
        return CourseUser::query()->where('user_id', Auth::user()->id);
    }

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('Subject Code')->sortBy('course.code'),
            Header::title('Name')->sortBy('course.name'),
            Header::title('Group')->sortBy('group'),
            Header::title('Semester')->sortBy('semester'),
            Header::title('Total Hours')->sortBy('attendances.totalhours'),
            Header::title('Absent Classes')->sortBy('attendances.absentclasses'),
            Header::title('Absent Hours')->sortBy('attendances.absenthours'),
            Header::title('Percent Absent')->sortBy('attendances.percentabsent'),
            ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row(CourseUser $courseuser): array
    {   
        return [
            $courseuser->course->code,
            $courseuser->course->name,
            $courseuser->course->group,
            $courseuser->course->semester,
            $courseuser->totalhours,
            $courseuser->absentclasses,
            $courseuser->absenthours,
            $courseuser->percentabsent,
        ];
    }

    protected function actionsByRow()
    {
        return [
            new RedirectAction('attendance.show', 'Details', 'maximize-2'),
        ];
    }

}