@extends('layouts.hotelapp')

@section('title', 'Guest.index')

@section('menubar')
    @parent
    {{-- other text --}}
@endsection

@section('content')
    <table>
        <tr>
            <th>代表者名</th>
            <th>ご住所</th>
            <th>電話番号</th>
        </tr>
        @foreach ($guests as $guest)
            <tr>
                <td>{{ $guest->guest_name }}</td>
                <td>{{ $guest->address }}</td>
                <td>{{ $guest->tel }}</td>
            </tr>
        @endforeach
    </table>
@endsection
