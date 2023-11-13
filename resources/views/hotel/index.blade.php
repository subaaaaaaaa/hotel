@extends('layouts.hotelapp')

@section('title', 'Guest.index')

@section('menubar')
    @parent
    {{-- other text --}}
@endsection

@section('content')
    <table>
        <tr>
            <th>id</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->getData() }}</td>
            </tr>
        @endforeach
    </table>
@endsection