@extends('app.base')

@section('title', 'Phone Create')

@section('content')

<form action="{{ url('phone/' . $phone->id) }}" method="post">

    <!-- Solución de error por CSRF -->
    <!--<input type="hidden" name="_method" value="post">-->
    <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
    @method('put')
    @csrf

    <!-- Inputs del formulario -->

    <div class="mb-3">
        <label for="name" class="form-label">Phone name</label>
        <input type="text" class="form-control" id="name" name="name" maxlength="120" required value="{{ old('name', $phone->name) }}">
    </div>

    <div class="mb-3">
        <label for="brand" class="form-label">Phone brand</label>
        <input type="text" class="form-control" id="brand" name="brand" maxlength="30" required value="{{ old('brand', $phone->brand) }}">
    </div>

    <div class="mb-3">
        <label for="storage" class="form-label">Phone storage</label>
        <input type="number" class="form-control" id="storage" name="storage" step="1" min="1" max="9999" required value="{{ old('storage', $phone->storage) }}">
    </div>

    <div class="mb-3">
        <label for="weight" class="form-label">Phone weight</label>
        <input type="text" class="form-control" id="weight" name="weight" step="1" min="1" max="9999" value="{{ old('weight', $phone->weight) }}">
    </div>
    
    <div class="mb-3">
        <label for="camera" class="form-label">Phone camera</label>
        <input type="text" class="form-control" id="camera" name="camera" maxlength="5" value="{{ old('camera', $phone->camera)}}">
    </div>
    
    <div class="mb-3">
        <label for="batery" class="form-label">Phone batery</label>
        <input type="text" class="form-control" id="batery" name="batery" maxlength="9" value="{{ old('batery', $phone->batery) }}">
    </div>
    
    <div class="mb-3">
        <label for="screen" class="form-label">Phone screen</label>
        <input type="text" class="form-control" id="screen" name="screen"  maxlength="4" value="{{ old('screen', $phone->screen) }}">
    </div>

    <button type="submit" class="btn btn-success">Update</button>

</form>

@endsection