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
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
                    <h1>SOLO MIS POSTS</h1>
                    @if($user->id != Auth::id() && Auth::check())
                        @include('partials.seguir')
                    @endif
<<<<<<< Updated upstream



                     <div class="panel-heading"><h1>Bienvenido a la pagina de {{$user->name}}</h1></div>
                    <button class="btn btn-danger btn-sm">Seguir</button>

=======
                    <div class="panel-heading">Pagina de: {{$user->name}}</div>
                     <div class="panel-heading"><h1>Bienvenido a la pagina de {{$user->name}}</h1></div>
                    <button class="btn btn-danger btn-sm">Seguir</button>
>>>>>>> Stashed changes
                    <div class="panel-body">
                        {!! Form::open(array('route' => 'posts.store', 'method'=>'post')) !!}
                        {!! Form::hidden('user_id',  Auth::id()) !!}
                        <div class="form-group">
                            {!! Form::textarea('texto',null, ['class'=>'form-control']) !!}
                        </div>
                        <button type="submit" class="btn btn-success">Postear</button>
                        {!! Form::close() !!}
                        <h2>Posts</h2>
                        @foreach(App\User::find(Auth::id())->first()->posts as $post)
                        <div class="panel panel-success">
                        <div class="panel-heading">{{$post->created_at}}</div>
                            <div class="panel-body">
                            <h3 class="form-control">{{$post->texto}}</h3>
                            <h4>Likes: {{$post->likes->count()}}</h4>
                            </div>
                            <div class="panel-footer">
                                  {!! Form::open(['url'=>'likes']) !!}
                                  {!! Form::hidden('post_id', $post->id) !!}
                                  {!! Form::submit('Me gusta',['class' => 'btn btn-primary active']) !!}
                                  {!! Form::close() !!}
                              </div>
                            </div>     
                            @endforeach
            </div>
        </div>
    </div>

@endsection
