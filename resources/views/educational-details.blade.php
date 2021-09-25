@extends('layouts.app')

@section('content')
<div class="container">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif
    <form action="{{route('educational-details.store')}}" method="post">
        @csrf
        <div class="row">
            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
            <div class="col-md-4">
                <label for="passed_out_year">Passed Out Year</label>
                <input type="text" name="passed_out_year" class="form-control" value="{{isset($details)?$details->passed_out_year:''}}" required>
            </div>
            <div class="col-md-4">
                <label for="branch">Branch</label>
                <input type="text" name="branch" class="form-control" value="{{isset($details)?$details->branch:''}}" required>
            </div>
            <div class="col-md-4">                
                <label for="college">College</label>
                <input type="text" name="college" class="form-control" value="{{isset($details)?$details->college:''}}" required>
            </div>
        </div>
        <div class="row">
            <button type="submit" class="btn btn-sm btn-success">Submit</button>
        </div>
    </form>
</div>
@endsection
