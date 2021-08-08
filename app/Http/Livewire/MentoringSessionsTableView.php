<?php

namespace App\Http\Livewire;


use App\Models\MentoringSession;

use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use LaravelViews\Actions\RedirectAction;
use Illuminate\Database\Eloquent\Builder;

class MentoringSessionsTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = MentoringSession::class;

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('Id')->sortBy('id'),
            Header::title('Mentor Name')->sortBy('mentor.name'),
            Header::title('Student Name')->sortBy('user.name'),
            Header::title('Date and Time')->sortBy('date_time'),
            Header::title('Total Hours')->sortBy('total_hours'),
            ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row($model): array
    {
        return [
            $model->id,
            $model->mentor->name,
            $model->user->name,
            $model->date_time,
            $model->total_hours,
        ];
    }
}
