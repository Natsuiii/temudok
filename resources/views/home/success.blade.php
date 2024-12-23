@extends('layouts.home')

@section('content')
<div class="container p-4">
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body text-center d-flex flex-column justify-content-center align-items-center">
                <h1 class="text-success">@lang('message.success')</h1>
                <a href="{{ route('home') }}" class="btn btn-primary mt-3" id="pay-button">@lang('message.back')</a>
            </div>
        </div>
    </div>
</div>
@endsection