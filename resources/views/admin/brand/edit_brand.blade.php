@extends('admin.admin_layouts')
@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
     <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>brand Update</h5>

  


          <div class="table-wrapper">
           
                      <form method="post" action="{{URL::to('update/brand/',$brand->id)}}" enctype="multipart/form-data">
                      @csrf

                        <div class="modal-body pd-20">
                          <div class="form-group">
                          
                          <label for="exampleInputEmail1">brand Name</label>

                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$brand->brand_name}}" name="brand_name">
                         
                            </div>
 

              </div><!-- modal-body -->

                 <div class="modal-body pd-20">
                          <div class="form-group">
                         
      <label for="exampleInputEmail1">brand logo</label>

      <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="brand_logo">
     
        </div>
          <div class="form-group">

             <label for="exampleInputEmail1">old logo</label>

             <img src="{{URL::to($brand->brand_logo)}}" style="height: 70px; width: 90px;">
             <input type="hidden" name="old_logo" value="$brand->brand_logo">

            
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