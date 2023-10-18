@extends('layouts.app')
@section('content')


<div class="text-center about">
    <h1>About US</h1>
    <div class="about-container">
        <div class="about-item">
          <span class="fa fa-group"></span>
          <h2>Section 1</h2>
          <p class="about-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
        </div>
        <div class="about-item " >
          <span class="fa fa-info"></span>
          <h2>Section 2 </h2>
          <p class="about-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum </p>
        </div>
        <div class="about-item">
          <span class="fa fa-file"></span>
          <h2>Section 3</h2>
          <p class="about-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
        </div>

    </div>

</div>

@include('footer');
@endsection
