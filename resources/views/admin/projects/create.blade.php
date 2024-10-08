@extends('layouts.dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Aggiungi un nuovo progetto</h2>
        </div>
        <div class="col-12">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <label for="" class="control-label">Nome progetto</label>
                        <input type="text" name="name" id=""
                            class="form-control form-control-sm @error('name') is-invalid @enderror"
                            placeholder="Nome pogetto" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label">Sommario progetto</label>
                        <textarea name="summary" id="" cols="30" rows="10" class="form-control form-control-sm"
                            placeholder="Nome pogetto">{{ old('summary') }}</textarea>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Inserisci immagine</label>
                        <input class="form-control form-control-sm" type="file" id="cover_image" name="cover_image">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-sm btn-success">Salva</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection