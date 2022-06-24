<div class="modal-header">
  <h4 class="modal-title" id="exampleModalLongTitle">Download Media | Order#: {{sprintf("%04d", $data->id)}}</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <table class="table table-striped">
      @foreach($data->detail as $key => $val)
        <tr>
          <td>{{++$key}}</td>
          <td class="text-right"><a href="{{URL::to($val->video_link)}}" download="Order_{{$data->id}}-Media({{++$key}})" class="btn btn-sm btn-primary">Download <i class="fa fa-download"></i></a>
        </tr>
      @endforeach
      @if(count($data->detail) == 0)
        <tr>
          <td>No media available.</td>
        </tr>
      @endif
  </table>
</div>