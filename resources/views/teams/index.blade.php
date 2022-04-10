@extends('app')
@section('content')

<div class="mt-5 mb-5 ml-3 mr-3">
    <div class="col-md-10 offset-md-2 col-12">
        <div class="row col-12">
            @foreach($teams as $team)
            <div class="card m-md-4 mb-2 col-md-4">
                <img class="card-img-top" src="img/teste.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$team->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$team->leader}}</h6>
                    <a href="{{ route('teams.update', ['id' => $team->id]) }}" class="btn btn-primary">see details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection