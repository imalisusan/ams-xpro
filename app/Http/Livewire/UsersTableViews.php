<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\CourseUser;
use App\Actions\DeleteAction;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use LaravelViews\Actions\RedirectAction;
use Illuminate\Database\Eloquent\Builder;

class UsersTableViews extends TableView
{
    protected $paginate = 20;

    public $searchBy = ['name'];
    /**
     * Sets a initial query with the data to fill the table
     *
     * @return Builder Eloquent query
     */
    public function repository(): Builder
    {
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
            Header::title('Student Name')->sortBy('name'),
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

        ];
    }

    protected function actionsByRow()
    {
        return [
            new RedirectAction('attendance.register', 'Register attendance', 'clipboard'),
            new RedirectAction('attendance.edit', 'Edit attendance', 'edit'),
        ];
    }

}

