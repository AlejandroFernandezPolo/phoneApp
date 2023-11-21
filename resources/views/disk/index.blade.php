@extends('app.base')
@section('title', 'disk List')

@section('content')
<div class="table-responsive small">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">idartist</th>
                <th scope="col">year</th>
            </tr>
        </thead>
        <tbody>
            @foreach($disks as $disk)
                <tr>
                    <td>{{ $disk ->id }}</td>
                    <td>{{ $disk ->title }}</td>
                    <td>{{ $disk ->idartist }} {{ $disk->artist->name }}</td>
                    <td>{{ $disk ->year }}</td>

                @endforeach
        </tbody>
    </table>
</div>
@endsection

