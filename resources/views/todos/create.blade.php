@extends('layouts.app')

@section('title')

Create new todo

@endsection

@section('content')

    <h1 class="text-center my-5">Create Todos</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                     todo
                </div>
                <div class="card-body">

                    {{-- ---------- Start of Errors ---------- --}}

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach ($errors->all() as $error)
                            <li class="list-group-item">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {{-- ---------- End of Errors ---------- --}}

                    <form action="{{ url('/todos') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') ?? old('name') }}">
                        </div>
                        <div class="form-group mb-3">
                            <textarea name="description" class="form-control" rows="5" placeholder="Description">{{ old('description') ?? old('description') }}</textarea>
                        </div>
                        <div class="form-group mb-3 text-center">
                            <input type="submit" class="btn btn-success" Value="Create Todo">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
