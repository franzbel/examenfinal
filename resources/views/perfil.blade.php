@extends('app')

<div class="fondoguest">
</div>
@foreach ($users as $user)
    {{--{{$user->username}}--}}
@endforeach
{{--@stop--}}
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <h1>SOLO MIS POSTS</h1>
                    <button class="btn btn-info btn-sm">Seguir</button>
                    <div class="panel-heading">Bienvenido {{$user->name}}</div>
                    <div class="panel-body">


                        {!! Form::open(array('route' => 'posts.store', 'method'=>'post')) !!}
                        {!! Form::hidden('user_id',  Auth::id()) !!}
                        <div class="form-group">
                            {!! Form::textarea('texto',null, ['class'=>'form-control']) !!}
                        </div>
                        <button type="submit" class="btn btn-info">Postear</button>
                        {!! Form::close() !!}

                        <table class="table-striped table-hover">
                            <thead>
                            <tr >
                                <th>Posts</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(App\User::find(Auth::id())->first()->posts as $post)
                                <tr>
                                    <td>{{$post->texto}}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><button class="btn btn-info btn-sm">Repostear</button></td>
                                    <td><button class="btn btn-info btn-sm">Me gusta</button></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
