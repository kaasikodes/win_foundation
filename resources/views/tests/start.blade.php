@extends('layouts.app1')

@section('content')
@include('inc.messages')
@if (!Auth::guest())
    @if (Auth::user()->id == 1)
     <a href="/units/1/section" target="_blank" rel="noopener noreferrer" class="btn btn-secondary"> Continue</a>
        
    @else
    <hr>
    <div class="title py-1">Put in password</div>
    <form action="{{route('activity.start')}}" method="post">
        <div class="form-group">
            <input type="text" name="pwd" id="" class="form-control">
            @csrf
            <button class="btn btn-primary my-2">Submit</button>
        </div>
    
    </form>

    @endif
@endif

    
@endsection