       
       <!-- Bordered striped start -->
       
       <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show" style="padding-left:20px">

                               Search Start <input type="datetime-local" id="startdate"> 

                               &nbsp; Search End <input type="datetime-local" id="enddate"> &nbsp; &nbsp; <button onclick="doflexiblesearch()"  class="btn btn-primary">Search </button>   <br><br><br>  
                               
                                <div class="table-responsive">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                Sum for last 100 sales : Total  N{{number_format($tot,2)}}
                <!-- Bordered striped end -->