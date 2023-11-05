@extends('template')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        Train
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <form action="{{ route('train.submit') }}" method="POST">
                        @csrf
                        <input type="hidden" name="vocable_id" value="{{ $vocable->id }}">
                        <div>
                            <h3 class="mb-3">
                                {{ $vocable->foreign_term }}
                            </h3>
                            <div class="mb-3">
                                <label for="native_term" class="form-label">Native Term</label>
                                <input type="text" class="form-control" id="native_term" name="native_term" placeholder="Native Term">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit">
                                Add
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
@endsection
