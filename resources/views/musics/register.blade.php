@extends('layouts.app')
@section('content')
<div>
    <form action="{{route('musics.getBeatmap')}}" method="get">
        <input type="text" name="beatmap_id">
        <button type="submit">Sync</button>
    </form>
</div>
@endsection