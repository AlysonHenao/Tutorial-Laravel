@extends('layouts.demon')
@section('title', $viewData['title'])
@section('content')

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('demon.save') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" />
    <input type="number" name="blood_amount" placeholder="Blood amount" value="{{ old('blood_amount') }}" />
    <select name="hierarchy">
        <option value="">Select hierarchy</option>
        <option value="king" {{ old('hierarchy') == 'king' ? 'selected' : '' }}>king</option>
        <option value="moon" {{ old('hierarchy') == 'moon' ? 'selected' : '' }}>moon</option>
        <option value="common" {{ old('hierarchy') == 'common' ? 'selected' : '' }}>common</option>
    </select>
    <input type="submit" value="Save" />
</form>

@endsection