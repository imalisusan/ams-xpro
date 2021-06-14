<?php

namespace App\Http\Livewire;

use App\Models\CourseMark;
use App\Actions\DeleteAction;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use LaravelViews\Actions\RedirectAction;
use Illuminate\Database\Eloquent\Builder;

class MyCourseMarksTableView extends TableView
{
    protected $paginate = 20;

    public $searchBy = ['course_module.name', 'user.name', 'score'];
    /**
     * Sets a initial query with the data to fill the table
     *
     * @return Builder Eloquent query
     */
    public function repository(): Builder
    {
        return CourseMark::query()->where('user_id', Auth::user()->id);
    }

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('Course')->sortBy('course.name'),
            Header::title('Module')->sortBy('course_module.name'),
            Header::title('Weight')->sortBy('course_module.weight'),
            Header::title('Score')->sortBy('score'),
            ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row(CourseMark $coursemark): array
    {
        return [
            $coursemark->course->name,
            $coursemark->course_module->name,
            $coursemark->course_module->weight,
            $coursemark->score,
        ];
    }

    protected function actionsByRow()
    {
        return [
            new RedirectAction('coursemarks.show', 'See coursemark', 'maximize-2'),
            new RedirectAction('coursemarks.edit', 'Edit coursemark', 'edit'),
            new DeleteAction(),
        ];
    }
}
