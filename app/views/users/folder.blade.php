@extends('main')

@section('underheader')
  <link rel="stylesheet" href="/js/jqfu9.5.7/css/jquery.fileupload.css">
  <link rel="stylesheet" href="/js/jqfu9.5.7/css/jquery.fileupload-ui.css">
@stop

@section('underbody')
  <script src="/js/jqfu9.5.7/js/vendor/jquery.ui.widget.js"></script>
  <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
  <script src="/js/jqfu9.5.7/js/jquery.iframe-transport.js"></script>
  <!-- The basic File Upload plugin -->
  <script src="/js/jqfu9.5.7/js/jquery.fileupload.js"></script>
  <script>
   /*jslint unparam: true */
   /*global window, $ */
   $(function () {
     'use strict';
     // Change this to the location of your server-side upload handler:
     var url = '/upload/{{ $folder->id }}';
     $('#fileupload').fileupload({
       url: url,
       dataType: 'json',
       acceptFileTypes: /(\.|\/)(gif|jpe?g|png|bmp)$/i,
       done: function (e, data) {
         $.each(data.result.files, function (index, file) {
           //$('<p/>').text(file.name).appendTo('#files');
	   $("<img />").attr("src", file.name).appendTo("#files");
         });
       },
       progressall: function (e, data) {
         var progress = parseInt(data.loaded / data.total * 100, 10);
         $('#progress .progress-bar').css(
           'width',
           progress + '%'
         );
       }
     }).prop('disabled', !$.support.fileInput)
				   .parent().addClass($.support.fileInput ? undefined : 'disabled');
   });
  </script>
@stop

@section('content')

  <?php
  /*
  use Aws\S3\S3Client;

  $client = S3Client::factory(array(
  'key'    => Config::get('globals.aws_access_key_id'),
  'secret' => Config::get('globals.aws_secret_access_key')
  ));


  $result = $client->listBuckets();

  echo $result;

  $bucket = "12000photos";

  $key = '/devlabtech/hello_worldlala.txt';
  echo "Creating a new object with key {$key}\n";
  $result = $client->putObject(array(
  'Bucket' => $bucket,
  'Key'    => $key,
  'Body'   => "Hello World!"
  ));

  */

  ?>

  <input type="text" placeholder="Search" style="float: right;" />
  <h3 style="margin-top:0px;">{{ Auth::user()->account->companyname }}</h3>  

  <a href="/home">Home</a> / {{ $folder->name }}
  
  <br><br>
  
  <input id="fileupload" type="file" name="files[]" multiple>
  <!-- The global progress bar -->
  <div id="progress" class="progress">
    <div class="progress-bar progress-bar-success"></div>
  </div>
  <!-- The container for the uploaded files -->
  <div id="files" class="files"></div> 

  <br>
  @if (count($files) > 0)
    @foreach($files as $key => $file)
      <a href="{{ $file->storedname }}">{{ $file->originalname }}</a>
      <img src="{{ $file->storedname }}" height=50px; />
      <br>
    @endforeach
  @endif

  
@stop
