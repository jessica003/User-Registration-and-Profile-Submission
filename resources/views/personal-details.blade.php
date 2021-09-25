@extends('layouts.app')

@section('content')
<div class="container">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif
    <form action="{{route('personal-details.store')}}" method="post">
        @csrf
        <div class="row">
            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
            <div class="col-md-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" value="{{auth()->user()->name}}" disabled>
            </div>
            <div class="col-md-4">
                <label for="Email">Email</label>
                <input type="email" class="form-control" value="{{auth()->user()->email}}" disabled>
            </div>
            <div class="col-md-4">                
                <label for="contact">Contact</label>
                <input type="text" name="contact" class="form-control" value="{{isset($details)?$details->contact:''}}" required>
            </div>
        </div>
        <div class="row">
            <button type="submit" class="btn btn-sm btn-success">Submit</button>
        </div>
    </form>
</div>
@endsection
