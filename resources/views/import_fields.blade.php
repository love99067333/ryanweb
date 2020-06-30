@extends('layouts.app')

@section('content')
<table class="table">
    @foreach ($csv_data as $row)
    <tr>
        @foreach ($row as $key => $value)
        <td>{{ $value }}</td>
        @endforeach
    </tr>
    @endforeach
    <tr>
        @foreach ($csv_data[0] as $key => $value)
        <td>

        </td>
        @endforeach
    </tr>
</table>
@endsection