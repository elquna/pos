<?php
$slug = substr(str_shuffle("ABCDEFGHIJKLMNOPQRST"),-3).time() ;
?>
<div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Add New Product</h2>
                        </div>
                        <div class="card-body">
                            <span>
                               

                                <div class="row">
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for=""> Product Name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" value="" required id="name" >
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for=""> Price <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" value="" required id="price" >
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for=""> Category <span class="text-danger">*</span></label>
                                                                <select class="form-control" id="catid">
                                                                    <option></option>
                                                                    <?php foreach ($cat as $key) {?>
                                                                        <option value="{{$key->id}}">{{$key->category}} </option>
                                                                    <?php } ?>
                                                                </select>   
                                                            </div>
                                                        </div>

                                                        


                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for=""> QR <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" value="{{$slug}}" readonly required id="sluq" >
                                                            </div>
                                                        </div>



                                                       
                                                

                                                    
                                </div>
                                <div class="row">
                                  
                                   

                                </div>
                                
                                <div class="card-footer ml-auto">
                                    <button type="submit" class="btn btn-outline-success mr-1" onclick="ProcessAddProduct()">Submit</button>
                                    <br><span id="err"></div> 
                                </div>
                        </span>
                        </div>
                    </div>
               