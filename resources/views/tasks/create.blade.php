<html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <title>Todo</title>
     <!-- Scripts -->
    <script src="{{asset('js/app.js')}}" defer></script>

 <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>

<h1 class="d-flex justify-content-center">Create task</h1>

<form action="{{route('store')}}" method="POST" enctype="multipart/form-data" {{-- class="d-flex justify-content-center" --}}>
    @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="task">Task</label>
            <input type="text" id="task" name="task">
        </div>
    <button type="submit" class="btn btn-primary">Create task</button>
</form>





</html>
