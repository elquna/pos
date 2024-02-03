       <!-- Bordered striped start -->
       <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Users</h4>
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
                            <div class="card-content collapse show">
                               
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Product</th>
                                                <th>Quantity added</th>
                                                <th>Staff</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($st as $key) {?>
                                                
                                        
                                            <tr>
                                                <td>{{$key->created_at}}</td>
                                                <td>{{$key->product->name}}</td>
                                                <td>{{$key->quantity}}</td>
                                                <td>{{$key->user->firstname}}</td>
                                                
                                            </tr>

                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bordered striped end -->