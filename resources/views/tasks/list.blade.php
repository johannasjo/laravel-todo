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


<h1 class="d-flex justify-content-center m-4">Tasks</h1>
@if(Session::has('delete-message'))
<div class="alert alert-danger">{{session('delete-message')}}</div>
@elseif(Session::has('create-message'))
<div class="alert alert-success">{{session('create-message')}}</div>
@elseif(Session::has('edit-message'))
<div class="alert alert-success">{{session('edit-message')}}</div>
@endif

    <table class="table-bordered d-flex justify-content-center m-3">
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




            <td><a href="{{route('tasks.edit', $task->id)}}" class="btn btn-success m-2">Edit</a></td>

            </form>
        </tr>
    @endforeach
</table>
<div class="d-flex justify-content-end mr-5 p-3">
    <a href="{{route('tasks.create')}}" class="btn btn-primary lm-10" type="button">Create new task</a>
</div>
</body>
</html>
