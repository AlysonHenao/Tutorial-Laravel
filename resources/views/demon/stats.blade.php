@extends('layouts.demon')
@section('title', $viewData['title'])
@section('content')
<div>
    <p>Maximum blood amount: {{ $viewData['maxBlood'] }}</p>

    <table>
        <thead>
            <tr>
                <th>Hierarchy</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($viewData['stats'] as $stat)
            <tr>
                <td>{{ $stat->hierarchy }}</td>
                <td>{{ $stat->total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection