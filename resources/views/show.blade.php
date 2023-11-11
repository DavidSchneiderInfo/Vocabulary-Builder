@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        Vocables
                    </h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            {{ __('Add new vocable') }}
                        </button>
                    </p>

                    <div class="collapse mb-3" id="collapseExample">
                        <div class="card card-body">

                            <form action="{{ route('vocables.create') }}" method="POST">
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
                                    <button type="submit" class="btn btn-primary">
                                        Add
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>



                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr class="table-dark">
                            <th>
                                Foreign
                            </th>
                            <th>
                                Native
                            </th>
                            <th>
                                Level
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($vocables as $vocable)
                            <tr>
                                <td>
                                    {{ $vocable->foreign_term }}
                                </td>
                                <td>
                                    {{ $vocable->native_term }}
                                </td>
                                <td>
                                    {{ $vocable->level }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {{ $vocables->links() }}
                    </div>
                </div>
            </div>
        </div>
@endsection
