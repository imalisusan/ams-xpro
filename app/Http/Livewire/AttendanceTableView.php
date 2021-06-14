<?php

namespace App\Http\Livewire;

use App\Models\Attendance;
use App\Models\User;
use App\Models\CourseUser;
use App\Models\Course;
use App\Actions\DeleteAction;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use LaravelViews\Actions\RedirectAction;
use Illuminate\Database\Eloquent\Builder;

class AttendanceTableView extends TableView
{
    protected $paginate = 20;
    /**
     * Sets a initial query with the data to fill the table
     *
     * @return Builder Eloquent query
     */
    public function repository(): Builder
    {
        return Attendance::query();
    }

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('Student ID')->sortBy('user_id'),
            Header::title('Total Hours')->sortBy('totalhours'),
            Header::title('Absent Classes')->sortBy('name'),
            Header::title('Absent Hours')->sortBy('absenthours'),
            Header::title('Percent Absent')->sortBy('percentabsent'),
            ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row(Attendance $attendance): array
    {
        return [
            $attendance->user_id,
            $attendance->totalhours,
            $attendance->absentclasses,
            $attendance->absenthours,
            $attendance->percentabsent,
        ];
    }

    protected function actionsByRow()
    {
        return [
            new RedirectAction('attendance.show', 'Details', 'maximize-2'),
        ];
    }

}
