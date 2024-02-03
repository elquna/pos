<?php
$slug = substr(str_shuffle("ABCDEFGHIJKLMNOPQRST"),-3).time() ;
?>
<div class="card col-md-8">
                        <div class="card-header">
                            <h2 class="card-title">Add Stock</h2>
                        </div>
                        <div class="card-body">
                            <span>
                               

                                <div class="row">


                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for=""> Product <span class="text-danger">*</span></label>
                                                                <select class="form-control" id="productid">
                                                                    <option></option>
                                                                    <?php foreach ($pr as $key) {?>
                                                                        <option value="{{$key->id}}">{{$key->name}} </option>
                                                                    <?php } ?>
                                                                </select>   
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for=""> Quantity <span class="text-danger">*</span></label>
                                                                <input type="number" class="form-control" value="" required id="quantity" >
                                                            </div>
                                                        </div>


                                                      

                                                        


                                                      

                                                       
                                                

                                                    
                                </div>
                                <div class="row">
                                  
                                   

                                </div>
                                
                                <div class="card-footer ml-auto">
                                    <button type="submit" id="bttn" class="btn btn-outline-success mr-1" onclick="ProcessAddStock()">Submit</button>
                                    <br><span id="err"></div> 
                                </div>
                        </span>
                        </div>
                    </div>
               