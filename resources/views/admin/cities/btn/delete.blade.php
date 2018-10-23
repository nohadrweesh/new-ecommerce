<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del_city{{$id}}"><i class="fa fa-trash"></i></button>

<!-- Modal -->
<div id="del_city{{$id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Warning</h4>
      </div>

      {!! Form::open(['id'=>'delete_user','url'=>admin_url('cities/'.$id),'method'=>'delete'])!!}
      <div class="modal-body">
        <div class="alert alert-danger">
            <p>Are you sure you want to delete the Country {{(lang()=='en')? $city_name_en:$city_name_ar
              }}?</p>
        </div>
       
      </div>
      <div class="modal-footer">
       {!!Form::submit('Yes',['class'=>'btn btn-danger'])!!}
        
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
      
      {!!Form::close()!!}
    </div>

  </div>
</div>