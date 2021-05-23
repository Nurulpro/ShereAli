@extends('admin.admin_layouts')
@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
     <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Subscriber Table</h5>

     


        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Subscriber List  

    <a href="" class="btn btn-sm btn-danger" style="float: right";id="delete" >All Delete</a>
          </h6>
        

          <div class="table-wrapper">
            <table id="datatable2" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-5p">ID</th>
                  <th class="wd-10p">Email</th>
                   <th class="wd-10p">Created at</th>
                   <th class="wd-10p">Action</th>
                                
                </tr>
              </thead>
              <tbody>
     @foreach($sub as $row)
      <tr>
        <td><input type="checkbox">{{ $row->id }}</td>
        <td>{{ $row->email}}</td>
         <td>{{ Carbon\Carbon::parse($row->created_at)->diffForHumans() }}</td>
       
       <td>
          <a href="{{URL::to('delete/coupon',$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
       </td>
     
      </tr>

     @endforeach
              </tbody>
            </table>
             </div>
            </div>
          </div>
          
 

@endsection