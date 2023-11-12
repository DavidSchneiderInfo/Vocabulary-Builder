@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You have :total vocables. :remaining vocables are waiting for your training.', ['total' => $total, 'remaining' => $remaining]) }}

                    <a href="{{ route('train') }}">{{ __('Start now') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
