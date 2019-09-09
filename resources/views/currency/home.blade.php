@extends('layouts.app')

@section('content')
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create Currency</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form" method="POST" action="{{asset('currency')}}">
            @csrf
            <label>Currency</label>
            <input type="text" class="form-control" name="currency" placeholder="Currency">        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>

<!-- The Modal -->
@foreach($data as $row)
<div class="modal fade" id="edit{{$row->id}}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Currency</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->              
        <div class="modal-body">
        <form class="form" method="POST" action="{{ asset('currency/'.$row->id) }}">
            @method('PUT')
            @csrf
            <label>Currency</label>
            <input type="text" class="form-control" value="{{$row->currency}}" name="currency" placeholder="Currency">        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" class="btn btn-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </form>      
    </div>
  </div>
</div>
</div>
@endforeach
<!-- Modal Dialog -->
<div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Confirmation Delete</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>This action can't be undone</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="confirm">Delete</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <script type="text/javascript">
                $(document).ready(function(){
                    $('.alert-success').fadeIn().delay(10000).fadeOut();
                });
                // Dialog show event handler
                  $('#confirmDelete').on('show.bs.modal', function (e) {
                      $message = $(e.relatedTarget).attr('data-message');
                      $(this).find('.modal-body p').text($message);
                      $title = $(e.relatedTarget).attr('data-title');
                      $(this).find('.modal-title').text($title);
                 
                      // Pass form reference to modal for submission on yes/ok
                      var form = $(e.relatedTarget).closest('form');
                      $(this).find('.modal-footer #confirm').data('form', form);
                  });
                 
                  // Form confirm (yes/ok) handler, submits form -->
                  $('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
                      $(this).data('form').submit();
                  });
                </script>
                @if(Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
                <div class="card-header">Dashboard
                    <button type="button" class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#myModal">
                      <i class="fa fa-plus-circle"></i>
                    </button>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="import" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                        <thead>                            
                            <tr>
                                <th width="10%">No</th>
                                <th>Currency</th>
                                <th width="10%">Aksi</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->currency}}</td>
                                <td>
                                    <form id="myform" method="POST" action="{{ asset('currency/'.$row->id) }}">
                                        @method('DELETE')
                                        @csrf
                                      <input type="hidden" name="name" value="value" /> 
                                      <button class="btn btn-sm btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete"><i class="fa fa-trash"></i></button>
                                      <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit{{$row->id}}"><i class="fa fa-pencil"></i></button>                                                                            
                                    </form>                                    
                                </td>                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
