@extends('layouts.dashboard');

@section('main-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <h2>Elenco progetti</h2>
                <a href="" class="btn btn-sm btn-primary">Aggiungi progetto</a>
            </div>
        </div>
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Slug</th>
                        <th>Strumenti</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->id }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="" class="btn btn-sm btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection