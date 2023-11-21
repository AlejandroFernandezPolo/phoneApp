@extends('app.base')
@section('title', 'artist List')

@section('content')
<div class="table-responsive small">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>

            </tr>
        </thead>
        <tbody>
            @foreach($artists as $artist)
                <tr>
                    <td>{{ $artist ->id }}</td>
                    <td>{{ $artist ->name }}</td>
                    <td>
                        @foreach($artist->disks as $disk)
                            {{ $disk->title }},
                        @endforeach
                    </td>

                @endforeach
        </tbody>
    </table>
</div>
@endsection

