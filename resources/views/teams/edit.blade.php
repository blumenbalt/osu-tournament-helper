@extends('app')
@section('content')

<div class="mt-5 mb-5 ml-3 mr-3">
    <form action="{{ route('teams.update', ['id' => $team->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>Edit Team</h2>
        <div class="col-6">
            <label>Team picture *:</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="picture">
                <label class="custom-file-label" for="picture">Choose team profile pic</label>
            </div>
            <div class="form-group">
                <label for="name">Team name *:</label>
                <input type="text" class="form-control" id="name" placeholder="Team name" name="name" value="{{$team->name}}" required>
            </div>
            <div class="form-group">
                <label for="name">Team Leader *:</label>
                <input type="text" class="form-control" id="name" placeholder="Team Leader Name" name="leader" value="{{$team->leader}}" required>
            </div>
            <div class="form-group">
                <label for="description">Team description :</label>
                <textarea class="form-control" id="description" rows="3" name="description" value="{{$team->description}}"></textarea>
            </div>
            <button type="submit" class="btn">edit</button>
        </div>
    </form>
</div>
@endsection