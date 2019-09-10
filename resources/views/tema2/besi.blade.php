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
                    <h2>PI BESI BAJA  <small>Data by PIB</small></h2>
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
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                          <tr>
                            <th>No</th>
                            <th>Uraian Barang</th>
                            <th>Pos Tarif/HS 10 Digit</th>
                            <th>Volume</th>
                            <th>Satuan</th>                            
                            <th>Hrg. Satuan</th>
                            <th>Kurs</th>
                            <th>Nilai CIF</th>
                            <th>Nilai FOB</th>
                            <th>Negara Asal</th>   
                            <th>Pelabuhan Tujuan</th>  
                            <th>PIB No</th>
                            <th>PIB Tg</th>                       
                        </tr>        
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        @foreach($data as $row)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$row->BrgUrai}}</td>
                          <td>{{$row->NoHs}}</td>
                          <td>{{number_format($row->JmlSat)}}</td>
                          <td>{{$row->KdSat}}</td>
                          <td>{{number_format($row->DNilInv/$row->JmlSat)}}</td>
                          <td>{{$row->KdVal}}</td>
                          <td>
                            @if($row->PelBkr==='IDTPP')                            
                            {{number_format($row->DCif)}}
                            @else                            
                            @endif
                          </td>
                          <td>
                            @if($row->PelBkr==='IDCGK')                            
                            {{number_format($row->DCif)}}
                            @else                            
                            @endif
                          </td>
                          <td>{{$row->BrgAsal}}</td>
                          <td>{{$row->PelBkr}}</td>                          
                          <td>{{$row->PibNo}}</td>
                          <td>{{\Carbon\Carbon::parse($row->PibTg)->format('d/m/Y')}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        <!-- /page content -->
@endsection        