<div class="modal fade" id="myModal{{$categories[$i]->id}}" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete Category "{{$categories[$i]->name}}"</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to Delete this Category?</p>
      </div>
      <div class="modal-footer">
        <form action=" {{action('CategoryTypesController@destroy', $categories[$i]->id) }} " method="POST">
          {{ csrf_field() }}
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <input type="hidden" name="_method" value="DELETE">
        <button type="Submit" class="btn btn-danger" >Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
  

