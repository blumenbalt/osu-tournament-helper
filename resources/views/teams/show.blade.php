@extends('layouts.app')
@section('content')

<div class="mt-5 mb-5 ml-3 mr-3">
    <div class="col-6 offset-3">
        <h2>{{$team->name}} Team</h2>
        <label>Team picture *:</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="picture">
            <label class="custom-file-label" for="picture">Choose team profile pic</label>
        </div>
        <div class="form-group">
            <label for="name">Team Leader *:</label>
            <input type="text" class="form-control" id="name" placeholder="Team Leader Name" name="leader" value="{{$team->leader}}" disabled>
        </div>
        <div class="form-group">
            <label for="description">Team description :</label>
            <textarea class="form-control" id="description" rows="3" name="description" value="{{$team->description}}" disabled></textarea>
        </div>
        <button type="submit" class="btn">Create</button>
    </div>
</div>
@endsection