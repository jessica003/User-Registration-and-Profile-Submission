@extends('layouts.app')
   
@section('content')
<div class="container">
    <table class="table table-bordered">
        <thead>
            <th>S. No</th>
            <th>User<br>Type</th>
            <th>Name</th>
            <th>Email ID</th>
            <th>Mobile<br>Number</th>
            <th>College</th>
            <th>Branch</th>
            <th>Company<br>Name</th>
            <th>Designation</th>
        </thead>
        <tbody>
            @if(count($users)>0)
            @php $i=0; @endphp
            @foreach ($users as $user)
            <tr>
                <td>{{++$i}}</td>
                <td>{{(isset($user->user_type) && $user->user_type==0)?'Fresher':'Experienced'}}</td>
                <td>{{isset($user->name)?$user->name:''}}</td>
                <td>{{isset($user->email)?$user->email:''}}</td>
                <td>{{isset($user->contact)?$user->contact:''}}</td>
                <td>{{isset($user->college)?$user->college:''}}</td>
                <td>{{isset($user->branch)?$user->branch:''}}</td>
                <td>{{isset($user->current_company_name)?$user->current_company_name:'NA'}}</td>
                <td>{{isset($user->designation)?$user->designation:'NA'}}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
        
    </table>
</div>
@endsection