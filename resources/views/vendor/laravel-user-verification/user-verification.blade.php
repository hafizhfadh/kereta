@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="column">
    <div class="columns">
        <div class="column is-10 is-offset-1">
            <div class="card">
                <div class="card-header">
                  <div class="card-header-title">
                    {!! trans('laravel-user-verification::user-verification.verification_error_header') !!}
                  </div>
                </div>
                <div class="card-content">
                    <span class="help-block">
                        <strong>{!! trans('laravel-user-verification::user-verification.verification_error_message') !!}</strong>
                    </span>
                    <div class="field is-grouped">
                        <div class="control">
                            <a href="{{url('/')}}" class="button is-primary">
                                {!! trans('laravel-user-verification::user-verification.verification_error_back_button') !!}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
