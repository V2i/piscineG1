@extends('layouts.searchbar')

@section('title', 'Page Title')

@section('searchbar')
    @parent

    <p>This is appended to the master searchbar.</p>
@stop

@section('content')
    <p>This is my body content.</p>
@stop
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
