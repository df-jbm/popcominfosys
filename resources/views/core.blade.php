@extends('layouts.coreapp')
@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
@stop
@section('content')
<div class="row">
 <div class="col-sm-6">
  <div class="card">
    <div class="card-header bg-default">
      <strong>Fuzzy Search</strong>
      <small>Sample</small>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label for="name">Search</label>
            <input type="text" class="form-control" id="name" placeholder="Filter text">
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>
@stop
@section('script')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
  var availableTags = [
    "ActionScriptc",
    "AppleScriptc",
    "Aspc",
    "BASIC",
    "C",
    "C++",
    "Clojure",
    "COBOL",
    "ColdFusion",
    "Erlangc",
    "Fortranc",
    "Groovyc",
    "Haskellc",
    "Javac",
    "JavaScriptc",
    "Lispc",
    "Perlc",
    "PHPc",
    "Pythonc",
    "Rubyc",
    "Scalac",
    "Schemec"
  ];
  $( "#name" ).autocomplete({
    source: availableTags
  });
} );
</script>
@stop
