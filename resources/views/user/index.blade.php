@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('System User') }}</div>

                <div class="card-body">
                    <div>

                    <div>
                        <a href="{{ route('register') }}">Register</a>
                    </div>
                    <div>
                        <a href="/home/">HOME</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
