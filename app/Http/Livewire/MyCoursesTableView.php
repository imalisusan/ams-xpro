<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\CourseUser;
use App\Actions\DeleteAction;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use Illuminate\Support\Facades\Auth;
use LaravelViews\Actions\RedirectAction;
use Illuminate\Database\Eloquent\Builder;

class MyCoursesTableView extends TableView
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
        $id = Auth::user()->id;
        return CourseUser::query()->where('user_id', Auth::user()->id);
        //Course::query()->where('user_id', Auth::user()->id);
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
            Header::title('Description')->sortBy('course.description'),
            Header::title('Year')->sortBy('course.year'),
            Header::title('Credits')->sortBy('course.credits'),
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
            $courseuser->course->description,
            $courseuser->course->year,
            $courseuser->course->credits,
        ];
    }

    protected function actionsByRow()
    {
        return [
            new RedirectAction('courses.show', 'See course', 'maximize-2'),
        ];
    }

}
