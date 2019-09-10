@extends('layouts.tema2')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">                
              </div>              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>IMPORT <small>Data by PIB</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      
                    </p>
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                            <th>Aju</th>
                            <th>Supplier</th>
                            <th>Origin</th>
                            <th>BL/AWB</th>
                            <th>Vessel</th>
                            <th>Jm_Kem</th>
                            <th>Ship</th>
                            <th>ETD</th>
                            <th>ETA</th>
                            <th>SPPB</th>            
                        </tr>        
                      </thead>
                      <tbody>
                        @foreach($data as $row)
                        <tr>
                          <td>{{$row->CAR}}</td>
                          <td>{{$row->PasokNama}}</td>
                          <td>{{$row->UrEdi}}</td>
                          <td>{{$row->DokNo}}</td>
                          <td>{{$row->AngkutNama}} V.{{$row->AngkutNo}}</td>
                          <td>{{$row->JmKemas}} {{$row->UREDI}}</td>
                          <td>
                            @if($row->Moda==1)SEA
                            @else
                            AIR
                            @endif
                          </td>
                          <td>{{$row->DokTg->format('d/m/Y')}}</td>
                          <td>{{$row->TgTiba->format('d/m/Y')}}</td>
                          <td>
                            @if($row->PibTg!=null)
                            {{$row->PibTg->format('d/m/Y')}}
                            @else
                            Belum SPPB
                            @endif
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        <!-- /page content -->
@endsection        