@extends('layouts.default')

@section('content')
<!-- University CRUD -->
<section class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <span class="section-title">University <span class="text-white">Crud</span></span>
        <div class="search-add-icons">
            <i class="bi bi-search text-white me-2" title="Search"></i>
            <a href="{{ route('university.create') }}"><i class="bi bi-plus-circle-fill text-warning" title="Add"></i></a>
        </div>
    </div>
    <table class="table table-bordered text-center">
        <thead>
            <tr class="table-header">
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody class="table-dark">
            @foreach($universities as $university)
            <tr>

                <td>{{ $university->id}}</td>
                <td><a class="text-white" href="{{ route('university.show',$university) }}">{{ $university->name}}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

<!-- Program CRUD -->
<section class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <span class="section-title">Program <span class="text-white">Crud</span></span>
        <div class="search-add-icons">
            <i class="bi bi-search text-white me-2" title="Search"></i>
            <a href="{{ route('program.create') }}"><i class="bi bi-plus-circle-fill text-warning" title="Add"></i></a>
        </div>
    </div>
    <table class="table table-bordered text-center">
        <thead>
            <tr class="table-header">
                <th>ID</th>
                <th>Name</th>
                <th>University</th>
            </tr>
        </thead>
        <tbody class="table-dark">
            @foreach($programs as $program)
            <tr>
                <td>{{ $program->id}}</td>
                <td>{{ $program->name}}</td>
                <td>{{ $program->university->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection