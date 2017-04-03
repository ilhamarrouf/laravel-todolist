<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create()
    {
        $jobs = \App\Job::latest()->get();
        return view('tasks.create', compact('jobs'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255|min:3',
            'body'  => 'required',
        ]);

        \App\Job::create($request->all());

        return redirect()->back();
    }

    public function edit($id)
    {
        $job = \App\Job::whereId($id)->first();

        return view('tasks.edit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:255|min:3',
            'body'  => 'required',
        ]);

        $job = \App\Job::whereId($id)->first();
        $job->update($request->all());

        return redirect()->route('tasks.create');
    }

    public function delete(Request $request, $id)
    {
        $job = \App\Job::whereId($id)->first();
        $job->delete();

        return redirect()->route('tasks.create');
    }
}
