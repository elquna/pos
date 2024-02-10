       
      
                               
                                
                                    <br>Sum for selected period: Total  N{{number_format($tot,2)}} <br>
                                    <table class="table table-bordered table-striped" id="myTable">
                                        <thead>
                                            <tr>
                                            <th>Date Created</th>
                                                <th>Grand Total</th>
                                                <th>Track Id</th>
                                               
                                                <th>Staff</th>
                                                <th>Customer</th>
                                                <th>Pay method</th>
                                                <th>View Items</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($orders as $key) {?>
                                                
                                        
                                            <tr>
                                                <td>{{$key->created_at}}</td>
                                                <td>{{$key->subtotal}}</td>
                                                <td>{{$key->cartsession}}</td>
                                              
                                                <td>{{$key->added_by}}</td>
                                                <td>{{$key->customer_name}} : {{$key->phone}} </td>
                                                <td>{{$key->paymethod}}</td>
                                                <td><button>View Items</button></td>
                                            </tr>

                                            <?php } ?>

                                        </tbody>
                                    </table>
                                