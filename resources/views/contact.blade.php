@extends('app')


{{--@section('content')--}}
{{--<h1>TODOS LOS POSTS</h1>--}}
{{--{!! Form::open(array('route' => 'posts.store', 'method'=>'post')) !!}--}}
{{--@include('movies.partials.form')--}}

{{--{!! Form::hidden('user_id',  Auth::id()) !!}--}}
{{--<div class="form-group">--}}
{{--{!! Form::textarea('texto',null, ['class'=>'form-control']) !!}--}}
{{--</div>--}}

{{--<button type="submit" class="btn btn-info">Postear</button>--}}
{{--{!! Form::close() !!}--}}


{{--<div class="fondoguest">--}}
{{--<p>{{$mensaje}}</p>--}}
{{--</div>--}}
{{--<p>comoe es </p>--}}
{{--@stop--}}

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <h1>TODOS LOS POSTS</h1>

                    <div class="panel-body">


                        {!! Form::open(array('route' => 'posts.store', 'method'=>'post')) !!}
                        {!! Form::hidden('user_id',  Auth::id()) !!}
                        <div class="form-group">
                            {!! Form::textarea('texto',null, ['class'=>'form-control']) !!}
                        </div>
                        <button type="submit" class="btn btn-info">Postear</button>
                        </br> </br>
                        {!! Form::close() !!}
                            @foreach(App\User::find(Auth::id())->first()->posts as $post)
                                <div class="panel panel-warning">
                                <div class="panel-heading">{{$post->user->username}} fecha de creacion: {{$post->created_at}}</div>
                                    <div class="panel-body">
                                    <h3 class="form-control">{{$post->texto}}</h3>
                                    <h4>Likes: {{$post->likes->count()}}</h4>
                                    </div>
                                    <div class="panel-footer">
                                    {!! Form::open(['url'=>'likes']) !!}
                                    {!! Form::hidden('post_id', $post->id) !!}
                                    {!! Form::submit('Me gusta',['class' => 'btn btn-success btn-sm']) !!}
                                    {!! Form::close() !!}
                                    </div>
                                    </div>
                            @endforeach
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
                        <table class="table-striped table-hover">
                            <thead>
                            <tr >
                                <th>Posts de las personas que sigo</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(App\User::find(Auth::id())->idols as $idolo)
                          
                            @endforeach


                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection

    

