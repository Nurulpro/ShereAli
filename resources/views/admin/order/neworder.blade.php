@extends('admin.admin_layouts')
@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
     <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Coupon Table</h5>

     


        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Coupon List  

          <a href="" class="btn btn-sm btn-warning" style="float: right;"data-toggle="modal" data-target="#modaldemo3">Coupon Add</a>
          </h6>
        

          <div class="table-wrapper">
            <table id="datatable2" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-10p">Payment type</th>
                  <th class="wd-20p">Transection ID</th>
                   <th class="wd-15p">Sub Total</th>
                  <th class="wd-10p">Shipping</th>
                    <th class="wd-10p">Total</th>
                      <th class="wd-10p">Date</th>
                        <th class="wd-10p">Status</th>
                         <th class="wd-10p">Action</th>

                        

                
                </tr>
              </thead>
              <tbody>
               @foreach($order as $row)
                <tr>
                  <td>{{ $row->payment_type }}</td>
                  <td>{{ $row->blnc_transection }}</td>
                   <td>{{ $row->subtotal}}</td>
                   <td>{{ $row->shipping}}</td>
                   <td>{{ $row->total}}</td>
                   <td>{{ $row->date}}</td>

                   <td><span class="badge badge-info">
                     @if($row->status_code == 0)
                           <span class="badge badge-warning">Pending</span>
                          @elseif($row->status_code == 1)
                          <span class="badge badge-info">Payment Accepted</span>
                           @elseif($row->status_code == 2)
                          <span class="badge badge-info">Cancle Order</span>
                          @elseif($row->status_code == 3) 
                           <span class="badge badge-info">Progress Order</span>
                           @elseif($row->status_code == 4)  
                           <span class="badge badge-success">Delevered Order</span>
                            @elseif($row->status_code == 5)  
                           <span class="badge badge-success">Hand over</span>
                          
                           @endif
                   </span></td>
                   
                   <td>
                   <a href="{{URL::to('admin/view/order/'.$row->id)}}" class="btn btn-sm btn-info">View</a>
                   </td>
               
                </tr>
          
               @endforeach
              </tbody>
            </table>
             </div>
            </div>
          </div>
          
 

@endsection