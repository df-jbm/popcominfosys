@extends('layouts.coreapp')
@section('css')
<link href="css/buttons.dataTables.min.css" rel="stylesheet">
@stop
@section('breadcrumb')
<!-- Breadcrumb -->
<ol class="breadcrumb">
  <li class="breadcrumb-item">Home</li>
  <li class="breadcrumb-item"><a href="#">Admin</a></li>
  <li class="breadcrumb-item active">Data Entry</li>

  <!-- Breadcrumb Menu-->
  <li class="breadcrumb-menu d-md-down-none">
    <div class="btn-group" role="group" aria-label="Button group">
      <a class="btn" href="#"><i class="icon-speech"></i></a>
      <a class="btn" href="{{ url('data-entry') }}"><i class="icon-graph"></i> &nbsp;Data Entry</a>
      <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
    </div>
  </li>        
</ol>
@stop
@section('sidebar')
@include('layouts.sidebar')
@stop
@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <strong>Data Entry</strong>
        <small>Encoding</small>
      </div>
      <div class="card-body">

        <!--<div class="row">          
          <div class="col-md-12 mb-4">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#hholdinfo" role="tab" aria-controls="hholdinfo">Info</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#hholdhead" role="tab" aria-controls="hholdhead">head</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#MStatus" role="tab" aria-controls="MStatus">Marital Status</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#BirthReg" role="tab" aria-controls="BirthReg">Birth Reg.</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#Educ" role="tab" aria-controls="Educ">Educ. Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#ASchool" role="tab" aria-controls="ASchool">Att. School</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#NASchool" role="tab" aria-controls="NASchool">Not att. School</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#Raff" role="tab" aria-controls="Raff">Rel. Aff.</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#DiffAbled" role="tab" aria-controls="DiffAbled">Disbled Persons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#RegBenefit" role="tab" aria-controls="RegBenefit">Reg. Beneficiaries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#SServices" role="tab" aria-controls="SServices">Social Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#SSkills" role="tab" aria-controls="SSkills">Special Skills</a>
              </li>
            </ul>

            <div class="tab-content bg-dark">
              <div class="tab-pane active" id="hholdinfo" role="tabpanel">
                <div class="col-sm-12 table-resposive bg-white" id="reportcontent">1</div>
              </div>
              <div class="tab-pane" id="hholdhead" role="tabpanel">
                <div class="col-sm-12 table-resposive bg-white" id="householdhead">2</div>
              </div>
              <div class="tab-pane" id="MStatus" role="tabpanel">
                <div class="col-sm-12 table-resposive  bg-white" id="maritalStatus">3</div>
              </div>
              <div class="tab-pane" id="BirthReg" role="tabpanel">
                <div class="col-sm-12 table-resposive  bg-white" id="birthreg">4</div>
              </div>
              <div class="tab-pane" id="Educ" role="tabpanel">
                <div class="col-sm-12 table-resposive  bg-white" id="EducProfile">5</div>
              </div>
              <div class="tab-pane" id="ASchool" role="tabpanel">
                <div class="col-sm-12 table-resposive  bg-white" id="AttendingSchool">6</div>
              </div>
              <div class="tab-pane" id="NASchool" role="tabpanel">
                <div class="col-sm-12 table-resposive  bg-white" id="notattendingschool">7</div>
              </div>
              <div class="tab-pane" id="Raff" role="tabpanel">
                <div class="col-sm-12 table-resposive  bg-white" id="religousaffiliation">8</div>
              </div>
              <div class="tab-pane" id="DiffAbled" role="tabpanel">
                <div class="col-sm-12 table-resposive  bg-white" id="disabledpersons">9</div>
              </div>
              <div class="tab-pane" id="RegBenefit" role="tabpanel">
                <div class="col-sm-12 table-resposive  bg-white" id="regvoters4ps">10</div>
              </div>
              <div class="tab-pane" id="SServices" role="tabpanel">
                <div class="col-sm-12 table-resposive  bg-white" id="socialservices">11</div>
              </div>
              <div class="tab-pane" id="SSkills" role="tabpanel">
                <div class="col-sm-12 table-resposive  bg-white" id="specialskills">12</div>
              </div>
            </div>
          </div>
        </div>-->
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
@stop