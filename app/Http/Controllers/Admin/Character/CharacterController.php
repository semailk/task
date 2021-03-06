<?php

namespace App\Http\Controllers\Admin\Character;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

class CharacterController extends CrudController
{
    use ListOperation;
    use ShowOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;

    public function setup(): void
    {
        $this->crud->setModel('App\Models\Character');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/characters');
        $this->crud->setEntityNameStrings('Character', 'Characters');
    }

    protected function setupListOperation(): void
    {
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation(): void
    {
        $this->crud->setFromDb();
    }

    protected function setupUpdateOperation(): void
    {
        $this->crud->setFromDb();
    }

    public function setupShowOperation(): void
    {
        $this->crud->setFromDb();
    }
}
