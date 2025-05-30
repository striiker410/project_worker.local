<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\StoreRequest;
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
        return view('worker.create');
    }

    function store(StoreRequest $request) {
        $data = $request->validated();

        $data['is_married'] = isset($data['is_married']);

        Worker::create($data);

        return redirect()->route('worker.index');
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
