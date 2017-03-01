@extends('layouts.app')

@section('content')
    <div class="container">     
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <!-- Display Validation Errors -->
        @include('common.errors')

        <form class="form-horizontal" role="form" method="POST" action="{{ url('/contact') }}">
            {!! csrf_field() !!}

            <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" 

                value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required=""
                 value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number"
                 value="{{ old('mobile') }}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"
                 value="{{ old('subject') }}">
            </div>
            <div class="form-group">
            <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Message" maxlength="140" rows="7"
             value="{{ old('message') }}"></textarea>
                <span class="help-block"><p id="characterLeft" class="help-block ">140 characters left</p></span>                    
            </div>
                
            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
 
        </form>
    </div>
@stop