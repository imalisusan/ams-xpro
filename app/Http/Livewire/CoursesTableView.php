<?php

namespace App\Http\Livewire;

use App\Models\Course;
use LaravelViews\Facades\Header;
use LaravelViews\Views\TableView;
use Illuminate\Database\Eloquent\Builder;

class CoursesTableView extends TableView
{
    protected $paginate = 20;

    public $searchBy = ['code', 'name', 'year'];
    /**
     * Sets a initial query with the data to fill the table
     *
     * @return Builder Eloquent query
     */
    public function repository(): Builder
    {
         return Course::query();
    }

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            Header::title('Code')->sortBy('code'),
            Header::title('Name')->sortBy('name'),
            Header::title('Description')->sortBy('description'),
            Header::title('Year')->sortBy('year'),
            Header::title('Credits')->sortBy('credits'),
            ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row(Course $course): array
    {
        return [
            $course->code,
            $course->name,
            $course->description,
            $course->year,
            $course->credits,
        ];
    }

}
