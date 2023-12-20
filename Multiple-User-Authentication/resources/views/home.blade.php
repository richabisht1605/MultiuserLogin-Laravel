@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(auth()->user()->is_Admin == 1)
                    <a href="{{url('admin/routes')}}">Admin</a>
                    @else
                    <div class="panel-heading"> Normal User</div>
                    {{ __('You are logged in!') }}
                    @endif
                    {{-- (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
