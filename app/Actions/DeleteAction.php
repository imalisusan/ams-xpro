<?php

namespace App\Actions;

use LaravelViews\Views\View;
use LaravelViews\Actions\Action;
use LaravelViews\Actions\Confirmable;

class DeleteAction extends Action
{
    use Confirmable;

    public $title = 'Delete';

    public $icon = 'trash';

    public function handle($model, View $view)
    {
        $model->delete();
        $this->success('Deleted successfully');
    }}
