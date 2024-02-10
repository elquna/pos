<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.css')}}">
  </head>
  <style>
    .smakk{
      width:16%;
      border:1px solid #000;
      padding:15px; 
      text-align:center;
    }
  </style> 
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="width:100%" style="margin-top:10px">
    <h2 style="margin-left:10%">Barcode for {{$pro->name}}</h2>
      <table style="width:90%; margin-left:5%">

    @for($i =1; $i< 20; $i++)
      
 <tr style="width:100%"> <td class="smakk"> {!! DNS1D::getBarcodeHTML($pro->slug, 'C128',1,20) !!}<br><span style="float:left">{{$pro->price}}</span></td> <td class="smakk"> {!! DNS1D::getBarcodeHTML($pro->slug, 'C128',1,20) !!}<br><span style="float:left">{{$pro->price}}</span></td> <td class="smakk"> {!! DNS1D::getBarcodeHTML($pro->slug, 'C128',1,20) !!}<br><span style="float:left">{{$pro->price}}</span></td> <td class="smakk"> {!! DNS1D::getBarcodeHTML($pro->slug, 'C128',1,20) !!}<br><span style="float:left">{{$pro->price}}</span></td> <td class="smakk"> {!! DNS1D::getBarcodeHTML($pro->slug, 'C128',1,20) !!}<br><span style="float:left">{{$pro->price}}</span></td> <td class="smakk"> {!! DNS1D::getBarcodeHTML($pro->slug, 'C128',1,20) !!}<br><span style="float:left">{{$pro->price}}</span></td></tr>
   
   


     @endfor 
     </div>

    </div> 

    
    
    <script src="" async defer></script>
  </body>
</html>

<script>
  window.print();
 </script> 