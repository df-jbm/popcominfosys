@extends('layouts.coreapp')
@section('css')
<link href="css/infosys.css" rel="stylesheet">
<link href="css/buttons.dataTables.min.css" rel="stylesheet">
@stop
@section('breadcrumb')
<!-- Breadcrumb -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">Home</li>
  <li class="breadcrumb-item"><a href="#">Admin</a></li>
  <li class="breadcrumb-item active">Dashboard</li>

  <!-- Breadcrumb Menu-->
  <li class="breadcrumb-menu d-md-down-none">
    <div class="btn-group" role="group" aria-label="Button group">
      <a class="btn" href="#"><i class="icon-speech"></i></a>
      <a class="btn" href="{{ url('reports') }}"><i class="icon-graph"></i> &nbsp;Dashboard</a>
      <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
    </div>
  </li>        
</ol>
@stop
@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <strong>Dashboard</strong>
        <small>Report</small>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="form-group col-sm-10 offset-sm-2">            
            <div class="row form-group">
              <div class="col-sm-2">
                <label for="brgy">Select Barangay</label>
                <div class="form-group">                  
                  <select class="form-control" id="brgy">
                    <option value="-1">Barangay name</option>
                  </select>              
                </div>
              </div>
              <div class="col-sm-2">
                <label for="reportlist">Report Areas</label>
                <div class="form-group">                  
                  <select class="form-control" id="reportlist">
                    <option value="1">Household Information</option>
                    <option value="2">Household Economic Condition</option>
                    <option value="3">Housing Condition</option>
                    <option value="4">Environmental Sanitation and Management</option>
                    <option value="5">Responsible Parenthood</option>
                    <option value="6">Agriculture</option>
                    <option value="7">Distance to nearest public utilities</option>
                  </select>              
                </div>
              </div>
              <div class="col-sm-2">
                <label for="showbrgy">Toogle to show report</label>
                <button class="btn btn-primary btn-md form-control" id="showbrgy">Generate</button>
              </div>
              <div class="col-sm-2">
                <label for="showbrgy">Toogle to print report</label>
                <button class="btn btn-primary btn-md form-control" id="printreport">Print</button>
              </div>
              <div class="col-sm-2">
                <label for="Export">Toogle to Export</label>
                <button class="btn btn-primary btn-md form-control" id="Export">Export</button>
              </div>
            </div>
            <!--/.row-->
          </div>

          <div class="form-group col-sm-12">
            @include('tabreport1')
            @include('tabreport2')
            @include('tabreport3')
            @include('tabreport4')
            @include('tabreport5')
            @include('tabreport6')
            @include('tabreport7')
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@stop
@section('script')
<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="js/jQuery.print.js"></script>
<script type="text/javascript" src="js/reports.js"></script>
@stop
