<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Actions\DeleteAction;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use Illuminate\Support\Facades\Auth;
use LaravelViews\Actions\RedirectAction;
use Illuminate\Database\Eloquent\Builder;

class StudentsTableView extends TableView
{
    protected $paginate = 20;

    public $searchBy = ['name', 'email', 'phone_no', 'created_at'];
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
            Header::title('Name')->sortBy('name'),
            Header::title('Email')->sortBy('email'),
            Header::title('Phone')->sortBy('phone_no'),
            Header::title('Joined')->sortBy('created_at'),
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
            $user->email,
            $user->phone_no,
            $user->created_at,
        ];
    }

    protected function actionsByRow()
    {
        $user = Auth::user();
        if ($user->hasRole(['admin'])) {
            return [
                new RedirectAction('students.mentor', 'Mentor user', 'briefcase'),
            ];
        } else if($user->hasRole(['mentor']))
        {
            return [
                new RedirectAction('students.mentor', 'Mentor user', 'briefcase'),
            ];
        }
        else
        {
            return [
               
            ];
        }

    }
}
