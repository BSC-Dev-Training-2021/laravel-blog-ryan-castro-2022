<div class="modal fade" id="myModalupdate{{$categories[$i]->id}}" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Category "{{$categories[$i]->name}}"</h4>
        </div>
        <div class="modal-body">
          <form action=" {{action('CategoryTypesController@update', $categories[$i]->id) }} " method="POST">
            {{ csrf_field() }}
          <p>Are you sure you want to Update this Category?<br />There will be  <span class="alert-danger">"{{$categorycount[$i]['total']}}"</span>  {{$categories[$i]->name}} Category will affect.</p>
          <input type="text" name="name" placeholder="{{$categories[$i]->name}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <input type="hidden" name="_method" value="PUT">
          <button type="Submit" class="btn btn-danger" >Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    
  
  