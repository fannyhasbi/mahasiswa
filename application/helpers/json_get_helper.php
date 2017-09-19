<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(! file_exists('json_get')){
 function json_get($data){
    header('Content-Type: application/json');
    echo json_encode($data);
  }
}

if(! file_exists('json_send')){
  function send_json($code, $data = null){
    switch($code){
      case 200:
        $send = array(
          'status' => true,
          'code'   => $code,
          'message'=> 'OK',
          'data'   => $data
        );
        break;

      case 400:
        $send = array(
          'status' => false,
          'code'   => $code,
          'message'=> 'Bad Request'
        );
        break;

      case 404:
        $send = array(
          'status' => false,
          'code'   => $code,
          'message'=> 'Not Found'
        );
        break;
    }

    header('Content-Type: application/json');
    echo json_encode($send);
  }
}