
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
                            @foreach($all as $one)
                            <tr>
                            <th>{{$one->product->name}}</th>
                            <td>{{$one->quantity}}</td>
                            <td>{{number_format($one->price,2)}}</td>
                            <td>{{number_format($one->subtotal,2)}}</td>
                            <td>X</td>
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
                        <input type="text"  class="form-control"  placeholder="Customer Name" > 
                        </div>

                        <div class="col-md-6">
                        <input type="text"  class="form-control"  placeholder="Customer Name" > 
                        </div>

                        <div class="col-md-12" style="height:20px"></div>

                        

                        <div class="col-md-12">
                         <button class="btn btn-primary col-md-12"> Submit </button>
                        </div>



                       </div>

                                





                        </div>
                    </div>
               