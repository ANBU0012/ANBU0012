@extends('layouts.backend.index')

@section('content')

    {{-- footer --}}
    <table class="table table-bordered table-responsive-md table-striped text-center">
        <thead>
            <tr>
                <th>Mã Bánh</th>
                <th>Tên Bánh</th>
                <th>Mô tả</th>
                <th>Giá</th>


            </tr>
        </thead>
        <tbody>
            @php
                $count = 1;
            @endphp
            @foreach ($products as $item)
                <tr>
                    <td>{{ $count }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price}}</td>

                </tr>
                @php
                    $count++;
                @endphp
            @endforeach

        </tbody>

    </table>

@endsection
