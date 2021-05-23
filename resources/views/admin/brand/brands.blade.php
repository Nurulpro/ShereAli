@extends('admin.admin_layouts')
@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
     <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>brand Table</h5>

     


        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">brand List  

          <a href="" class="btn btn-sm btn-warning" style="float: right;"data-toggle="modal" data-target="#modaldemo3">Brands Add</a>
          </h6>
        

          <div class="table-wrapper">
            <table id="datatable2" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">brand Name</th>
                  <th class="wd-15p">brand Logo</th>
                  <th class="wd-20p">Action</th>
                
                </tr>
              </thead>
              </thead>
              <tbody>
               @foreach($brands as $row)
                <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->brand_name }}</td>
                  <td><img src="{{URL::to($row->brand_logo)}}" height=80px; width=90px;></td>
                 
                 <td>

                   <a href="{{URL::to('edit/brands',$row->id)}}" class="btn btn-sm btn-info">Edit</a>
                    <a href="{{URL::to('delete/brands',$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                 </td>
               
                </tr>
          
               @endforeach
              </tbody>
            </table>
             </div>
            </div>
          </div>
          
 <!-- LARGE MODAL -->
        <div id="modaldemo3" class="modal fade">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
               

                      </ul>
                      </div>


                        @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                       @endforeach
                      </ul>
                      </div>
                      @endif
                   
                      <form method="post" action="{{route('store.brands')}}" enctype="multipart/form-data">
                      @csrf

                        <div class="modal-body pd-20">
                          <div class="form-group">
                          <label for="exampleInputEmail1">Brand Name</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="brand" name="brand_name">
                             </div>

                          <div class="modal-body pd-20">
                          <div class="form-group">
                          <label for="exampleInputEmail1">Brand Logo</label>
                          <input type="file" class="form-control" aria-describedby="emailHelp"  name="brand_logo">
                         
                            </div>
 

              </div><!-- modal-body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-info pd-x-20">Submit</button>
                <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
              </div>
              </form>
            </div>
          </div><!-- modal-dialog -->
        </div><!-- modal -->

@endsection