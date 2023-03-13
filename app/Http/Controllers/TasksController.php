<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\TasksResource;
use App\Traits\MyHttpResponses;

class TasksController extends Controller
{

    use MyHttpResponses;

    public function index()
    {
        return TasksResource::collection(
            Task::where('user_id',Auth::user()->id)->get()
        );
    }

    public function store(StoreTaskRequest $request)
    {
        $request->validated($request->all());

        $task = Task::create([
            "user_id"   =>  Auth::user()->id,
            "name"      =>  $request->name,
            "description"      =>  $request->description,
            "priority"      =>  $request->priority
        ]);

        return new TasksResource($task);
    }

    public function show(Task $task)
    {
        return $this->isNotAuthorised($task) ? $this->isNotAuthorised($task) : new TasksResource($task);
    }

    public function update(Request $request,Task $task){
        if (Auth::user()->id !== $task->user_id) {
            return $this->error("","You are not Authorized to make this request.",403);
        }
        $task->update($request->all());
        return new TasksResource($task);
    }

    public function destroy(Task $task){
        return $this->isNotAuthorised($task) ? $this->isNotAuthorised($task) : $task->delete();
    }

    private function isNotAuthorised($task){
        if (Auth::user()->id !== $task->user_id) {
            return $this->error("","You are not Authorized to make this request.",403);
        }
    }
}
