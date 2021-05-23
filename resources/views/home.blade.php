@extends('layouts.app')
@section('content')

@php
   $order=DB::table('order')->where('user_id',Auth::id())->orderBy('id','DESC')->limit(10)->get();
@endphp
    <div class="contact_form">
        <div class="container">
            <div class="row">
               <div class="col-8 card">
                 <table class="table table-response">
                   <thead>
                     <tr>
                       <th scope="col">PaymentType</th>
                       <th scope="col">Payment ID</th>
                       <th scope="col">Amount</th>
                       <th scope="col">Date</th>
                        <th scope="col">Status Code</th>
                        
                        <th scope="col">Action</th>
                     </tr>
                   </thead>
                   <tbody>
                         @foreach($order as $row)
                    <tr>
                      <th scope="row">{{$row->payment_type}}</th>
                      <td>{{$row->payment_id}}</td>
                      <td>{{$row->paying_amount}}</td>
                      
                       <td>{{$row->date}}</td>
                        <td>{{$row->status_code}}</td>
                        <td>
                          <a href="" class="btn btn-info">View</a>
                        </td>
                        
                    
                    </tr>

                    @endforeach
                   </tbody>
                 </table>
               </div>
               <div class="col-4">
                 <div class="card" style="width: 18rem;">
                  <img src="{{ asset('public/backend/img/img6.jpg') }}" class="card-img-top" style="height: 100px; width: 120px; margin-left: 34%;" >
                  <div class="card-body">
                    <h5 class="card-title text-center">{{ Auth::user()->name }}</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="{{ route('password.change') }}"> Password Change </a></li>
                    <li class="list-group-item"><a href="{{ route('password.change') }}"> Edit Profile </a></li>
                 
                  </ul>
                  <div class="card-body">
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                  </div>
                </div>
               </div>
            </div>
        </div>
    </div>

@endsection
