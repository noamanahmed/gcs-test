@extends('layouts.default')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <h4>Create Program</h4>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    {{-- Form Start --}}
                    <form action="{{ route('program.store') }}" method="POST">
                        @csrf <!-- CSRF Token -->

                        {{-- Name Field --}}
                        <div class="mb-3">
                            <label for="name" class="form-label">Program Name</label>
                            <input type="text"
                                name="name"
                                id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Enter program name"
                                value="{{ old('name') }}">

                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        {{-- University Dropdown --}}
                        <div class="mb-3">
                            <label for="university_id" class="form-label">Select University</label>
                            <select name="university_id" id="university_id" class="form-select @error('university_id') is-invalid @enderror">
                                <option value="">Choose a University</option>
                                @foreach ($universities as $university)
                                    <option value="{{ $university->id }}" {{ old('university_id') == $university->id ? 'selected' : '' }}>
                                        {{ $university->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('university_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        {{-- Submit Button --}}
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-warning">Create</button>
                        </div>
                    </form>
                    {{-- Form End --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
