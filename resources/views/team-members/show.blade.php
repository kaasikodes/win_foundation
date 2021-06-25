@extends('layouts.app1')
@section('content')
  <main class="my-5 ">
      <div class="container">
          @if ('$member')
          <div class="card p-5">
              <a href="/team-members/{{$member->id}}/edit" class="btn btn-success">Edit</a>
              <h4>{{$member->name}}</h4>
              <p>{{$member->phone}}</p>
              <p>{{$member->email}}</p>
              <p>{{$member->whatsapp}}</p>
          </div>
              
          @endif
      </div>
  </main>
    
@endsection