@extends('template')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>

                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Need training: {{ $remaining }}
                    Total: {{ $total }}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>
                        Add Vocable
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('add') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="foreign_term" class="form-label">Foreign Term</label>
                            <input type="text" class="form-control" id="foreign_term" name="foreign_term" placeholder="Foreign Term">
                        </div>
                        <div class="mb-3">
                            <label for="native_term" class="form-label">Native Term</label>
                            <input type="text" class="form-control" id="native_term" name="native_term" placeholder="Native Term">
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
