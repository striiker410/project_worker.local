<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    function index() {
        return 'This is index action';
    }

    function show() {
        return 'This is show action';
    }

    function create() {
        $worker = [
            'name'  => 'Ivan',
            'surname' => 'Ivanov',
            'email' => 'ivanov@mail.ru',
            'age' => '20',
            'description' => 'im Ivan',
            'is_married' => 'false',
        ];

        Worker::create($worker);

    }

    function update() {
        return 'Ivan was created';
    }

    function delete() {
        return 'This is show action';
    }
}
