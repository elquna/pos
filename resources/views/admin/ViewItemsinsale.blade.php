
                    <div class="card">
                        <div class="card-body">
                           
                                  
                                   
                        <table class="table table-bordered" style="font-size:10px">
                        <thead>
                            <tr>
                            <th scope="col">Item</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Price</th>
                            <th scope="col">Sub</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                          @php 
                          $n = 0;
                          $sums = 0;
                          @endphp
                            @foreach($cart as $one)
                            @php $n = $n + 1;
                            $sums = $sums + $one->subtotal;
                           @endphp 
                            <tr>
                            <th>{{$one->product->name}}</th>
                            <td>{{$one->quantity}}</td>
                            <td>{{number_format($one->price,2)}}</td>
                            <td>{{number_format($one->subtotal,2)}}</td>
                          
                            </tr>
                            @endforeach
                            
                        </tbody>
                        </table>
                        <div class="row">

                        <div class="col-md-6">
                          <button onclick="closeopenzone()" class="btn btn-warning">Close</button>
                        </div>

                       

                        <div class="col-md-12" style="height:20px"></div>

                        



                       </div>

                                





                        </div>
                    </div>
               