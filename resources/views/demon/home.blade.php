@extends('layouts.demon')
@section('title', $viewData['title'])
@section('content')
<div class="d-flex gap-2 justify-content-center mt-3">
    <a href="{{ route('demon.create') }}" class="btn btn-danger">Register Demon</a>
    <a href="{{ route('demon.index') }}" class="btn btn-danger">List Demons</a>
    <a href="{{ route('demon.stats') }}" class="btn btn-danger">Demon Statistics</a>
</div>
@endsection