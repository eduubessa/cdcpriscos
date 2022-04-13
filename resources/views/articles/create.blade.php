<!-- app/views/nerds/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
        </ul>
    </nav>

    <h1>Create a article</h1>

    <!-- if there are creation errors, they will show here -->
    {{ Html::ul($errors->all()) }}

    {!! Form::open(array('url' => 'articles')) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'body') !!}
        {!! Form::textarea('body', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('publish', 'Published') !!}
        {!! Form::select('publish', array(0 => 'No', 1 => 'Yes'), 1) !!}
    </div>

    {!! Form::submit('Create the article!', array('class' => 'btn btn-primary')) !!}

    {!!  Form::close() !!}

</div>
            <li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
</body>
</html>