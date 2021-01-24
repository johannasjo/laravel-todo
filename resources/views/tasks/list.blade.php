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
</body>
</html>
