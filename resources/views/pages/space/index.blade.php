@extends('layouts.app')

@section('content')
<div class="container">
    <x-space></x-space>
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @forelse ($spaces as $space)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $space->title }}
                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger float-right">Delete</button>
                            <a href="#" class="btn btn-sm btn-info float-right text-white">Edit</a>
                        </form>
                    </h5>
                    <h6 class="card-subtitle">{{ $space->address }}</h6>
                    <p class="card-text">{{ $space->decription }}</p>
                    <a href="#" class="card-link">Direction</a>
                </div>
            </div>
            @empty
                {{ __('This is space list page.') }}
            @endforelse
        </div>
        
    </div>
    <div class="row justify-content-center">
        {{ $spaces->links() }}
    </div>
</div>
@endsection
