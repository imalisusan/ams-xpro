<?php

namespace App\Http\Livewire;

use App\Models\CourseModule;
use App\Actions\DeleteAction;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use LaravelViews\Actions\RedirectAction;
use Illuminate\Database\Eloquent\Builder;

class CourseModulesTableView extends TableView
{
    protected $paginate = 20;

    public $searchBy = ['course.name', 'name', 'weight'];
    /**
     * Sets a initial query with the data to fill the table
     *
     * @return Builder Eloquent query
     */
    public function repository(): Builder
    {
         return CourseModule::query();
    }

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('Course Name')->sortBy('course.name'),
            Header::title('Name')->sortBy('name'),
            Header::title('Weight')->sortBy('weight'),
            Header::title('Maximum Score')->sortBy('maximum_score'),
            ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row(CourseModule $coursemodule): array
    {
        return [
            $coursemodule->course->name,
            $coursemodule->name,
            $coursemodule->weight,
            $coursemodule->maximum_score,
        ];
    }

    protected function actionsByRow()
    {
        return [
            new RedirectAction('coursemodules.show', 'See coursemodule', 'maximize-2'),
            new RedirectAction('coursemodules.edit', 'Edit course', 'edit'),
            new DeleteAction(),
        ];
    }
}
