@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        Result
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    @if($result)
                    <div class="alert alert-success" role="alert">
                        <strong>RIGHT!</strong>
                        <p>
                            {{ $vocable->native_term }}
                        </p>
                    </div>
                    @else
                    <div class="alert alert-danger" role="alert">
                        <strong>WRONG!</strong>
                        <p>
                            {{ $vocable->native_term }}
                        </p>
                    </div>
                    @endif

                    <a href="{{ route('train') }}">
                        Do another round
                    </a>

                </div>
            </div>
        </div>
@endsection
