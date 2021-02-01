<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del_admin{{$ID}}"><i
            class="fa fa-trash"></i></button>

<!-- Modal -->
<div id="del_admin{{$ID}}" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Delete Guild</h4>
            </div>

            {!! Form::open(['route'=> ['guilds.destroy',$ID],'method'=> 'delete']) !!}
            <div class="modal-body">
                <h5 class="btn btn-danger">Are you sure you want to delete this record ?</h5>
            </div>
            <div class="modal-footer">
                {!! Form::submit('Yes',['class' => 'btn btn-danger']) !!}
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>

            </div>
            {!! Form::close() !!}
        </div>

    </div>
</div>
