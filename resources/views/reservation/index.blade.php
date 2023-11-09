@extends('layouts.hotelapp')

@section('title', 'reservation.index')

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
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->guest_name }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->tel }}</td>
            </tr>
        @endforeach
    </table>
@endsection