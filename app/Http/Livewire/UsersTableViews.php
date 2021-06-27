<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Course;
use App\Models\CourseUser;
use App\Actions\DeleteAction;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use Illuminate\Support\Facades\Auth;
use LaravelViews\Actions\RedirectAction;
use Illuminate\Database\Eloquent\Builder;

class UsersTableViews extends TableView
{
    protected $paginate = 20;

    public $searchBy = ['reg_id', 'name'];
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
                Header::title('Student ID')->sortBy('user.reg_id'),
                Header::title('Student Name')->sortBy('user.name'),
                Header::title('Course Code')->sortBy('course.code'),
                Header::title('Course')->sortBy('course.name'),
                Header::title('Group')->sortBy('group'),
                Header::title('Semester')->sortBy('semester'),
            ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row(CourseUser $users): array
    {
        return [
            $users->user->reg_id,
            $users->user->name,
            $users->course->code,
            $users->course->name,
            $users->course->group,
            $users->course->semester,
        ];
    }

    protected function actionsByRow()
    {
        return [
            new RedirectAction('attendance.mark', 'Register attendance', 'clipboard'),
            new RedirectAction('attendance.edit', 'Edit attendance', 'edit'),
        ];
    }

}
