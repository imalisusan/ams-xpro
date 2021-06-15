<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Course;
use App\Models\CourseUser;
use App\Actions\DeleteAction;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use LaravelViews\Actions\RedirectAction;
use Illuminate\Database\Eloquent\Builder;

class CourseStudentsTableView extends TableView
{
    protected $paginate = 20;

    //public $searchBy = ['course.name', 'name', 'weight'];
    /**
     * Sets a initial query with the data to fill the table
     *
     * @return Builder Eloquent query
     */
    public function repository(): Builder
    {
        $users = User::all();

         return User::query();
    }

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('Student Name'),
            Header::title('Module 1'),
            Header::title('Module 2'),
            Header::title('Actions'),
            ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row(User $user): array
    {
        return [
            $user->name,
            $user->cour,
            $user->name,
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
