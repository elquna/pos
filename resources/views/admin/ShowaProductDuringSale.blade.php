<input  class="form-control" value="{{$pro->name}}" readonly> <br>

<input  class="form-control" value="Qty Remaining : {{$pro->remaining}}" readonly> <br>

<input  class="form-control" value="Price   {{number_format($pro->price,2)}}" readonly> <br>



<input type="number" onkeyup="calculatesubtotal()" class="form-control" id="qty"  placeholder="Quantity" > <br>

<input placeholder="subtotal" class="form-control" id="sub" readonly> <br>

<input readonly class="form-control" id="pr" type="hidden" value="{{$pro->price}}"> <br>


<button class="btn btn-primary" onclick="processAddTocart('{{$pro->id}}')">Send</button>

<div id="err"></div>