@extends('app')
@section('content')

<div class="mt-5 mb-5 ml-3 mr-3">
    <form action="">
    <h2>New Team</h2>
        <div class="col-6">
                <label>Team picture *:</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="team-picture">
                <label class="custom-file-label" for="team-picture">Choose team profile pic</label>
            </div>
            <div class="form-group">
                <label for="team-name">Team name *:</label>
                <input type="text" class="form-control" id="team-name" placeholder="Team name" required>
            </div>
            <div class="form-group">
                <label for="team-description">Team description :</label>
                <textarea class="form-control" id="team-description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn">Create</button>
        </div>
    </form>
</div>
@endsection