<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <title>Todo</title>
     <!-- Scripts -->
    <script src="{{asset('js/app.js')}}" defer></script>

 <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body>


<h1 class="d-flex justify-content-center">Tasks</h1>
@if(Session::has('delete-message'))
<div class="alert alert-danger">{{session('delete-message')}}</div>
@elseif(Session::has('create-message'))
<div class="alert alert-success">{{session('create-message')}}</div>
@endif

    <table class="table-bordered d-flex justify-content-center">
        <tr>
            <th>Title</th>
            <th>Task</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        @foreach ($tasks as $task)

        <tr>
            <td>{{$task->title}}</td>
            <td>{{$task->task}}</td>
            <td>{{$task->created_at}}</td>
            <td>{{$task->updated_at}}</td>
            <form method="post" action="{{route('tasks.delete', $task->id)}}" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <td><button class="btn btn-danger m-2" type="submit">Delete</button></td>
            </form>
        </tr>
    @endforeach
</table>
    <a href="{{route('tasks.create')}}" class="btn btn-primary lm-10" type="button">Create new task</a>
</body>
</html>
