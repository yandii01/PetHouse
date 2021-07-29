@extends('layouts/main')

@section('title', "About ANY's Pet House")

@section('mainpage2')

<div class="card w-50">
  <div class="card-body">
    <!-- <h5 class="card-title">Card title</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a> -->
  </div>
</div>

        <div class="card">
            <div class="card-header">{{ auth()->user()->name }} </div>
            <h5 class="card-text">{{ auth()->user()->email }} </h5>

            <a href="profile/{{ auth()->user()->id }}/editprofile" class="btn btn-primary">edit</a>
            <a href="{{ url('/')}}" class="active" data-hover="Home">kembali</a>
        </div>

@endsection
