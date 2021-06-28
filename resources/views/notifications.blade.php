@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Mensaje</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notifications as $item)
                <tr>
                    <th>{{$item->data['time']}}</th>
                    <th>{{$item->data['message']}}</th>
                </tr>
                @php
                    $item->markAsRead();
                @endphp
            @endforeach
        </tbody>
    </table>
@endsection