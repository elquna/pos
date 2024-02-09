
                    <div class="card">
                        <div class="card-body">
                           
                                  
                                   
                        <table class="table table-bordered" style="font-size:10px">
                        <thead>
                            <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Price</th>
                            <th scope="col">Sub</th>
                            <th scope="col">X</th>
                            </tr>
                        </thead>
                        <tbody>
                          @php 
                          $n = 0;
                          $sums = 0;
                          @endphp
                            @foreach($all as $one)
                            @php $n = $n + 1;
                            $sums = $sums + $one->subtotal;
                           @endphp 
                            <tr>
                            <th>{{$one->product->name}}</th>
                            <td>{{$one->quantity}}</td>
                            <td>{{number_format($one->price,2)}}</td>
                            <td>{{number_format($one->subtotal,2)}}</td>
                            <td><button onclick="deleteFromcart('{{$one->id}}','{{$one->cartsession}}')">X</button></td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                        </table>
                        <div class="row">

                        <div class="col-md-6">
                          <select id="paymentmethod" class="form-control">
                            <option>Payment Method</option>
                            <option>Cash</option>
                            <option>POS</option>
                            <option>Transfer</option>
                            <option>Others</option>
                          </select>
                        </div>

                        <div class="col-md-6">
                        <input type="text"  class="form-control" id="customer_name"  placeholder="Customer Name" > 
                        </div>
                        
                        <div class="col-md-12" style="height:20px"></div>

                        <div class="col-md-6">
                        <input type="text"  class="form-control"  placeholder="Customer Phone" id="phone" > 
                        </div>

                        <div class="col-md-6">
                        <input type="text"  class="form-control"  placeholder="Customer Address" id="address" > 
                        </div>

                        <div class="col-md-12" style="height:20px"></div>

                        

                        <div class="col-md-12">
                          @if($n > 0)
                         <button class="btn btn-primary col-md-12" onclick="processcheckout()"> Submit and Print &nbsp; &nbsp;  &nbsp;  &nbsp; {{number_format($sums,2)}}</button>
                         @endif
                        </div>



                       </div>

                                





                        </div>
                    </div>
               