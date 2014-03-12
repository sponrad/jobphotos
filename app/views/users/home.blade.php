@extends('main')

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


  <h1>home</h1>
  <button>Upload</button>
  <p>File browser</p>
@stop
