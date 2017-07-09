@extends('layouts.app')

@section('header')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="POST" action="/letters/{{ $letter->id }}">
                {{  method_field('PATCH') }}
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                     <input type="text" name="body" >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
