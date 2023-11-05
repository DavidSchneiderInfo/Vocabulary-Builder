@extends('template')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        Vocables
                    </h1>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
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
