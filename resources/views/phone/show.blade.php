@extends('app.base')
@section('title', 'Phone Show')

@section('content')

<div class="table-responsive small">
    <table class="table table-striped table-sm">
        <tbody>
            <tr>
                <td>#</td>
                <td>{{ $phone ->id }}</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ $phone ->name }}</td>
            </tr>
            <tr>
                <td>Brand</td>
                <td>{{ $phone ->brand }}</td>
            </tr>
            <tr>
                <td>Storage</td>
                <td>{{ $phone ->storage }}</td>
            </tr>
            <tr>
                <td>Weight</td>
                <td>{{ $phone ->weight }}</td>
            </tr>
            <tr>
                <td>Camera</td>
                <td>{{ $phone ->camera }}</td>
            </tr>
            <tr>
                <td>Batery</td>
                <td>{{ $phone ->batery }}</td>
            </tr>
            <tr>
                <td>Screen</td>
                <td>{{ $phone ->screen }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection