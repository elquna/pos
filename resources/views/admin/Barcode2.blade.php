<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
        <title>Food and Water Options::Barcode {{$pro->name}} </title>
        <style>
            * {
    font-size: 12px;
    font-family: 'Times New Roman';
}

td,
th,
tr,
table {
    border-top: 1px solid black;
    border-collapse: collapse;
}

td.description,
th.description {
    width: 75px;
    max-width: 75px;
    font-size:10px;
}

td.quantity,
th.quantity {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

td.price,
th.price {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
    font-size:10px
}

.centered {
    text-align: center;
    align-content: center;
}

.ticket {
    width: 160px;
    max-width: 155px;
}

img {
    max-width: inherit;
    width: inherit;
}
.centered {
    text-align: center;
    align-content: center;
}

@media print {
    .hidden-print,
    .hidden-print * {
        display: none !important;
    }
}
        </style>
    </head>
    <body>
      <br>
    <h2 style="">Barcode for {{$pro->name}}</h2>
    <br>
        <div class="ticket centered">
        @for($i =1; $i< 20; $i++)
        <div style="border:1px solid #000; margin-bottom:10px; padding:5px">
       <div class="smakk" style="margin-top:7px"> {!! DNS1D::getBarcodeHTML($pro->slug, 'C128',1,15) !!}  </div>  <div style="">{{$pro->price}}</div>         
        <div style="clear:both"></div>
      </div>
     
          @endfor 
           
        </div>
        <button id="btnPrint" class="hidden-print">Print</button> <button id="btnPrint" onclick="returnback()" class="hidden-print">Back</button>
      
    </body>
</html>
<script>
    const $btnPrint = document.querySelector("#btnPrint");
$btnPrint.addEventListener("click", () => {
    window.print();
});
</script>


<input  type="hidden" id="t_" value="{{ csrf_token()}}">
    <script>
          var site = "<?php echo url('/');?>"

         function returnback()
         {
            window.location.href = site + "/pos/dashboard";
         }
    </script>