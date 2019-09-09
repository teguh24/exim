@extends('layouts.app')

@section('content')
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Create Import</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form class="form" method="POST" action="{{asset('ppjk')}}">
            @csrf
            <label>shipment</label>
            <input type="text" class="form-control" name="shipment" placeholder="shipment">
            <label>comodity</label>
            <input type="text" class="form-control" name="comodity" placeholder="comodity">
            <label>no_invoice</label>
            <input type="text" class="form-control" name="no_invoice" placeholder="no_invoice">
            <label>amount_inv</label>
            <input type="number" class="form-control" name="amount_inv" placeholder="amount_inv">        
            <label>currency</label>
            <select name="currency_id" class="select2" style="width: 100%">
              @foreach($currency as $row)
              <option value="{{$row->id}}">{{$row->currency}}</option>
              @endforeach
            </select>       
            <label>supplier</label>
            <select name="supplier_id" class="select2" style="width: 100%">
              @foreach($supplier as $row)
              <option value="{{$row->id}}">{{$row->supplier}}</option>
              @endforeach
            </select>  
            <label>origin</label>
            <select name="origin_id" class="select2" style="width: 100%">
              @foreach($origin as $row)
              <option value="{{$row->id}}">{{$row->origin}}</option>
              @endforeach
            </select>  
            <label>hbl_awb</label>
            <input type="text" class="form-control" name="hbl_awb" placeholder="hbl_awb">
            <label>ppjk</label>
            <select name="ppjk_id" class="select2" style="width: 100%">
              @foreach($ppjk as $row)
              <option value="{{$row->id}}">{{$row->nama}}</option>
              @endforeach
            </select>  
            <label>vessel</label>
            <input type="text" class="form-control" name="vessel" placeholder="vessel">
            <label>jumlah_kem</label>
            <input type="text" class="form-control" name="jumlah_kem" placeholder="jumlah_kem">
            <label>ship_by</label>
            <select name="ship_by" class="select2" style="width: 100%">
              <option value="SEA">SEA</option>
              <option value="AIR">AIR</option>              
            </select> 
            <label>etd</label>
            <input type="date" class="form-control" name="etd" placeholder="etd">
            <label>eta</label>
            <input type="date" class="form-control" name="eta" placeholder="eta">
            <label>eta_aiia</label>
            <input type="date" class="form-control" name="eta_aiia" placeholder="eta_aiia"> 
            <label>pib</label>
            <input type="date" class="form-control" name="pib" placeholder="pib">
            <label>cc</label>
            <input type="date" class="form-control" name="cc" placeholder="cc">
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
        <h4 class="modal-title">Edit import</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->              
        <div class="modal-body">
        <form class="form" method="POST" action="{{ asset('ppjk/'.$row->id) }}">
            @method('PUT')
            @csrf
            <label>shipment</label>
            <input type="text" class="form-control" name="shipment" value="{{$row->shipment}}" placeholder="shipment">
            <label>comodity</label>
            <input type="text" class="form-control" name="comodity" value="{{$row->comodity}}" placeholder="comodity">
            <label>no_invoice</label>
            <input type="text" class="form-control" name="no_invoice" value="{{$row->no_invoice}}" placeholder="no_invoice">
            <label>amount_inv</label>
            <input type="text" class="form-control" name="amount_inv" value="{{$row->amount_inv}}" placeholder="amount_inv">        
            <label>currency_id</label>
            <input type="text" class="form-control" name="currency_id" value="{{$row->currency_id}}" placeholder="currency_id">
            <label>supplier_id</label>
            <input type="text" class="form-control" name="supplier_id" value="{{$row->supplier_id}}" placeholder="supplier_id">
            <label>origin_id</label>
            <input type="text" class="form-control" name="origin_id" value="{{$row->origin_id}}" placeholder="origin_id">
            <label>hbl_awb</label>
            <input type="text" class="form-control" name="hbl_awb" value="{{$row->hbl_awb}}" placeholder="hbl_awb">
            <label>ppjk_id</label>
            <input type="text" class="form-control" name="ppjk_id" value="{{$row->ppjk_id}}" placeholder="ppjk_id">
            <label>vessel</label>
            <input type="text" class="form-control" name="vessel" value="{{$row->vessel}}" placeholder="vessel">
            <label>jumlah_kem</label>
            <input type="text" class="form-control" name="jumlah_kem" value="{{$row->jumlah_kem}}" placeholder="jumlah_kem">
            <label>ship_by</label>
            <input type="text" class="form-control" name="ship_by" value="{{$row->ship_by}}" placeholder="ship_by">
            <label>etd</label>
            <input type="text" class="form-control" name="etd" value="{{$row->etd}}" placeholder="etd">
            <label>eta</label>
            <input type="text" class="form-control" name="eta" value="{{$row->eta}}" placeholder="eta">
            <label>eta_aiia</label>
            <input type="text" class="form-control" name="eta_aiia" value="{{$row->eta_aiia}}" placeholder="eta_aiia"> 
            <label>pib</label>
            <input type="text" class="form-control" name="pib" value="{{$row->pib}}" placeholder="pib">
            <label>cc</label>
            <input type="text" class="form-control" name="cc" value="{{$row->cc}}" placeholder="cc">      
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
        <div class="col-md-12">
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
                                <th>shipment</th>
                                <th>comodity</th>
                                <th>no_invoice</th>
                                <th>amount_inv</th>
                                <th>currency</th>
                                <th>supplier</th>
                                <th>origin</th>
                                <th>hbl_awb</th>
                                <th>ppjk</th>
                                <th>vessel</th>
                                <th>jumlah_kem</th>
                                <th>ship_by</th>
                                <th>etd</th>
                                <th>eta</th>
                                <th>eta_aiia</th>
                                <th>pib</th>
                                <th>cc</th>                                
                                <th width="10%">Aksi</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr>
                                <td>{{$row->shipment}}</td>
                                <td>{{$row->comodity}}</td>
                                <td>{{$row->no_invoice}}</td>
                                <td>{{number_format($row->amount_inv)}}</td>
                                <td>{{$row->currencys[0]->currency}}</td>
                                <td>{{$row->suppliers[0]->supplier}}</td>
                                <td>{{$row->origins[0]->origin}}</td>
                                <td>{{$row->hbl_awb}}</td>
                                <td>{{$row->ppjks[0]->nama}}</td>
                                <td>{{$row->vessel}}</td>
                                <td>{{$row->jumlah_kem}}</td>
                                <td>{{$row->ship_by}}</td>
                                <td>{{$row->etd}}</td>
                                <td>{{$row->eta}}</td>
                                <td>{{$row->eta_aiia}}</td>
                                <td>{{$row->pib}}</td>
                                <td>{{$row->cc}}</td>
                                <td>
                                    <form id="myform" method="POST" action="{{ asset('ppjk/'.$row->id) }}">
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
