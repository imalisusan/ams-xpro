<?php

namespace App\Http\Livewire;

use App\Models\CourseMark;
use App\Actions\DeleteAction;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use LaravelViews\Actions\RedirectAction;
use Illuminate\Database\Eloquent\Builder;

class CourseMarksTableView extends TableView
{
    protected $paginate = 20;

    //public $searchBy = ['code', 'name', 'year'];
    /**
     * Sets a initial query with the data to fill the table
     *
     * @return Builder Eloquent query
     */
    public function repository(): Builder
    {
         return CourseMark::query();
    }

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('Module')->sortBy('course_module.name'),
            Header::title('Student Name')->sortBy('user.name'),
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
            $coursemark->course_module->name,
            $coursemark->user->name,
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
