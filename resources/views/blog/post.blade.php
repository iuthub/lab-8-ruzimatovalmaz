@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quote">Learning Laravel</p>
        </div>
    </div>
    <div class="row"> 
        <div class="col-md-12">
            <p>{{ $post['content'] }}</p>    
        </div>
    </div>
    
@endsection