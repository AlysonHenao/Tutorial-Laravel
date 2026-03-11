@extends('layouts.demon')
@section('title', $viewData['title'])
@section('content')
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Blood Amount</th>
            <th>Hierarchy</th>
        </tr>
    </thead>
    <tbody>
        @foreach($viewData['demons'] as $demon)
        <tr>
            <td>{{ $demon->getId() }}</td>
            <td>
                {{ $demon->getName() }}
                @if($demon->getHierarchy() === 'moon')
                    (Focus on your breathing)
                @endif
            </td>
            <td>
                @if($demon->getHierarchy() === 'king')
                    {{ $demon->getBloodAmount() * 2 }}
                @else
                    {{ $demon->getBloodAmount() }}
                @endif
            </td>
            <td>{{ $demon->getHierarchy() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection