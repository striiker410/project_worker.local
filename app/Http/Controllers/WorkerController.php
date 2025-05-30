<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    function index() {
        $workers = Worker::all();
        return view('worker.index', compact('workers'));
    }

    function show(Worker $worker) {
        return view('worker.show', compact('worker'));
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
        return 'This is create action';

    }

    function update() {
        $worker = Worker::find(6);
        $worker->update([
            'name'  => 'Justin',
            'surname' => 'Biber',
        ]);
        return 'This is update action';
    }

    function delete() {
        $worker = Worker::find(6);
        $worker->delete();
        return 'This is delete action';
    }
}
