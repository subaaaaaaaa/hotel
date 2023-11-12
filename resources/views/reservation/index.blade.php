@extends('layouts.hotelapp')

@section('title', 'reservation.index')

@section('menubar')
    @parent
    {{-- other text --}}
@endsection

@section('content')
    <table>
        <tr>
            <th>チェックイン日</th>
            <th>チェックアウト日</th>
            <th>大人</th>
            <th>子ども</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item-> }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->tel }}</td>
            </tr>
        @endforeach
    </table>
@endsection