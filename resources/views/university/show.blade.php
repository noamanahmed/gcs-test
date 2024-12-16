@extends('layouts.default')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <h4>Update University</h4>
                </div>
                <div class="card-body">
                    {{-- Success Message --}}
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    {{-- Form Start --}}
                    <form action="{{ route('university.update', $university->id) }}" method="POST">
                        @csrf <!-- CSRF Token -->
                        @method('PUT') <!-- PUT Method for Update -->

                        {{-- Name Field --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">University Name</label>
                            <input type="text"
                                name="name"
                                id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Enter university name"
                                value="{{ old('name', $university->name) }}">

                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        {{-- Submit Button --}}
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </form>
                    {{-- Form End --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
