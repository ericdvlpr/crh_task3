@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table tabl-striped">
                        <tr>
                            <td>Name</td>
                            <td>Username</td>
                            <td>Phone</td>
                            <td>Company Name</td>
                        </tr>
                     
                    @foreach($userList as $key => $users)
                    <tr>
                        <td>{{$users['name']}}</td>
                        <td>{{$users['username']}}</td>
                        <td>{{$users['phone']}}</td>
                        <td>{{$users['company']['name']}}</td>
                    </tr>
                    @endforeach
                </table>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
