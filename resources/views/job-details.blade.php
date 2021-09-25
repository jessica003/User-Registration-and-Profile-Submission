@extends('layouts.app')

@section('content')
<div class="container">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif
    <form action="{{route('job-details.store')}}" method="post">
        @csrf
        <div class="row">
            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
            <div class="col-md-4">
                <label for="companyname">Current company name</label>
                <input type="text" name="current_company_name" class="form-control" value="{{isset($details)?$details->current_company_name:''}}" required>
            </div>
            <div class="col-md-4">
                <label for="designation">Designation</label>
                <input type="text" name="designation" class="form-control" value="{{isset($details)?$details->designation:''}}" required>
            </div>
            <div class="col-md-4">                
                <label for="location">Location</label>
                <input type="text" name="location" class="form-control" value="{{isset($details)?$details->location:''}}" required>
            </div>
        </div>
        <div class="row">
            <button type="submit" class="btn btn-sm btn-success">Submit</button>
        </div>
    </form>
</div>
@endsection
