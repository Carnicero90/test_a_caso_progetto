@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="user-info">
                    @dump(
                        Auth::user()->categories[0]->name
                    )

                    <div class="card-header">username: {{ Auth::user()->name . ' ' . Auth::user()->lastname }} </div>
                    <div class="card-header">email: {{ Auth::user()->email }}</div>
                    <div class="card-header">indirizzo: {{ Auth::user()->address }}</div>

                    {{-- <div class="card-header">curriculum vitae: {{ Auth::user()->userDetails->cv }}</div> --}}
                    {{-- <div class="card-header">media voti: {{ Auth::user()->votes->rating }}</div> --}}

                </div>

                <div class="card-body">
                    @if (session('status'))
                        
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
