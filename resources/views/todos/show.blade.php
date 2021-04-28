@extends('layouts.app')

@section('title')

    Single Todo: {{ $todo->name }}

@endsection

@section('content')
    <h1 class="text-center my-5">{{ $todo->name }}</h1>
            
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    {{ $todo->description }}
                </div>
            </div>
            <a href="{{ url('/todos/' . $todo->id . '/edit') }}" class="btn btn-info mt-2">Edit</a>
            <a href="#" class="btn btn-danger mt-2" onclick="event.preventDefault(); document.getElementById('delete').submit();">Delete</a>

            <form action="{{ url('/todos/' . $todo->id . '/delete') }}" method="POST" id="delete">
                @csrf
                @method('delete')
            </form>

        </div>
    </div>
@endsection
