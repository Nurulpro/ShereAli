@extends('admin.admin_layouts')
@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
     <div class="sl-pagebody">
      <div class="sl-page-title">
        <h5>Subcategor Update</h5>

  


          <div class="table-wrapper">
           
                      <form method="post" action="{{URL::to('update/subcategor/',$subcategor->id)}}">
                      @csrf

                        <div class="modal-body pd-20">
                          <div class="form-group">
                            <input type="hidden" name="id" value="{{$category_id}}">
                          <label for="exampleInputEmail1">Subcategory Name</label>

                          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$category->category_name}}" placeholder="Category" name="category_name">
                         
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