<?php

namespace App\Http\Livewire;

use App\Models\Mentor;
use App\Models\MentorUser;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use Illuminate\Support\Facades\Auth;
use LaravelViews\Actions\RedirectAction;
use Illuminate\Database\Eloquent\Builder;

class MenteesTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $paginate = 20;

    public $searchBy = ['user.reg_id', 'user.name', 'user.email', 'user.phone_no'];

    public function repository(): Builder
    {
        $user_id = Auth::user()->id;
        $mentor = Mentor::where('user_id', $user_id)->first();
        $mentees = MentorUser::query()->where('mentor_id', $mentor->id);
        return $mentees;
    }

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('Admission No')->sortBy('user.reg_id'),
            Header::title('Name')->sortBy('user.name'),
            Header::title('Email')->sortBy('user.email'),
            Header::title('Phone Number')->sortBy('user.phone_no'),
            ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row(MentorUser $mentoruser): array
    {
        return [
            $mentoruser->user->reg_id,
            $mentoruser->user->name,
            $mentoruser->user->email,
            $mentoruser->user->phone_no,
        ];
    }
    protected function actionsByRow()
    {
        return [
            new RedirectAction('student.profile', 'See student', 'maximize-2'),
        ];
    }
}
