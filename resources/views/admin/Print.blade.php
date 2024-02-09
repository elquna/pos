<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
        <title>Receipt</title>
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

@media print {
    .hidden-print,
    .hidden-print * {
        display: none !important;
    }
}
        </style>
    </head>
    <body>
        <div class="ticket">
           <!--<img src="./logo.png" alt="Logo"> -->
            <p class="centered">Jumah Stores
                <br>Kaduna road, Kaduna 07</p>
            <table>
                <thead>
                    <tr>
                        <th class="quantity">Q.</th>
                        <th class="description">Item</th>
                        <th class="price">Sub</th>
                    </tr>
                </thead>
                <tbody>
                   <?php foreach ($pullcart as $key ) {?>
                 
                    <tr>
                        <td class="quantity">{{$key->quantity}}</td>
                        <td class="description">{{$key->product->name}}</td>
                        <td class="price">₦{{$key->subtotal}}</td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td class="quantity"></td>
                        <td class="description">Total</td>
                        <td class="price">₦{{$order->subtotal}}</td>
                    </tr>
                </tbody>
            </table>
            <p class="centered">Thanks for your purchase, Please come back next time.  <br> Track Id:{{$order->cartsession}} </p>
            
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