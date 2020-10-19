@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">

@section('content')

<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="font-weight-bold">Contact Form</h2>
            </div>
        </div>
        <form method="post" action="{{ route('contact.submit') }}" role="form">
            {{ csrf_field() }}
            <div class="controls">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Name *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Captcha</label>
                            <div class="col-md-6 pull-center">
                                {!! app('captcha')->display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-success btn-send" value="Send message">
                    </div>
                </div>
            </div>
        </form>
    </div>
    {!! NoCaptcha::renderJs() !!}

@endsection
