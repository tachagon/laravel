@extends('layouts.main')

@section('page_title', 'Hello Page')

@section('content')
  <h1>{{ $title }}</h1>
  <p>{{ $subtitle }}</p>
  <div class="row">
    <div class="col-md-4">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam fuga ipsam, quasi corporis deleniti dignissimos eligendi, magnam possimus nostrum obcaecati vero culpa voluptatum facere consectetur numquam quos iste saepe illo!
    </div>
    <div class="col-md-4">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur voluptatem sit, asperiores nobis possimus dicta sint dolore corporis, dignissimos eius repudiandae, eum explicabo expedita impedit debitis magnam beatae amet necessitatibus.
    </div>
    <div class="col-md-4">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam quia blanditiis ab eligendi maxime beatae porro doloribus, ea, error vero dolores expedita odit tenetur odio itaque a sint rem aliquid.
    </div>
  </div>
@stop
