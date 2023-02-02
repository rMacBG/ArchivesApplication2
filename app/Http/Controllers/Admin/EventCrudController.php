<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EventRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class EventCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EventCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getFieldsData($show = FALSE){
        return [
            [
          'name'=>'name',
          'label' => 'Event Name',
          'type' => 'text'
        ],
        [
            'name'=> 'archives',
            'label' => "Archive Type",
            'type'=> ($show ? "select": 'select_multiple'),
            'entity' => 'archives',
            'model' => "App\Models\Archive",
            'attribute'=> 'Archive',
            'pivot' => true,

        ],
            [
                'label' => "Document Image",
                'name' => "image",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'Partials/image',
                'upload' => true,
            ]
        ];
    }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Event::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/event');
        CRUD::setEntityNameStrings('event', 'events');
        $this->crud->addFields($this->getFieldsData());
    }


    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
//        CRUD::column('name');
//        CRUD::column('description');
//        CRUD::column('created_at');
//        CRUD::column('updated_at');
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(EventRequest::class);

        CRUD::field('name');
        CRUD::field('description');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    protected function setupShowOperation()
    {
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));
    }
}
