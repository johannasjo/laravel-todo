<html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <title>Edit</title>
     <!-- Scripts -->
    <script src="{{asset('js/app.js')}}" defer></script>

 <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>

<h1 class="d-flex justify-content-center m-4">Edit task</h1>

<form action="{{route('tasks.update', $task->id)}}" method="POST" enctype="multipart/form-data" class="m-3 p-3">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{$task->title}}">
        </div>
        <div class="form-group">
            <label for="task">Task</label>
            <textarea rows="3" id="task" name="task" class="form-control">{{$task->task}}</textarea>
        </div>
        <div class="d-flex rm-3 justify-content-end">
            <button type="submit" class="btn btn-primary p-3">Update task</button>
        </div>
</form>





</html>
