@extends('regions.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Edit Regions</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('regions.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <form action="{{ route('regions.update',$region->id) }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="inputName" class="form-label"><strong>Name:</strong></label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control @error('name') is-invalid @enderror" 
                    id="inputName" 
                    placeholder="Name" value="{{ $region->name }}">
                @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputcontent" class="form-label"><strong>Code:</strong></label>
                <textarea 
                    class="form-control @error('code') is-invalid @enderror" 
                    style="height:150px" 
                    name="code" 
                    id="inputcontent" 
                    placeholder="Code">{{ $region->code }}</textarea>
                @error('content')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
        </form>

    </div>
</div>
@endsection