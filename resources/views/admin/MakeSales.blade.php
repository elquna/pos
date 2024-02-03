
                    <div class="card" style="min-height:500px">
                        <div class="card-header">
                            <input type="hidden" readonly id="serial" value="{{$cartsession}}">
                            <h2 class="card-title">Make sale</h2>
                        </div>
                        <div class="card-body">
                            <span>
                               

                                <div class="row">
                                    <div class="col-md-4">

                                        <div id="productzone" style="border:1px solid #ddd; min-height:100px; border-radius:4px; padding:20px">
                                        </div>
                                        <br>

                                        <form onsubmit="scann(event,this)">
                                    
                                            <input type="text" class="form-control"  required id="rcode" placeholder="scan with scanner">
                                        
                                       </form>

                                        <h4>OR search below</h4>

                                      
                                        <div class="form-group">
                                            <select id="productid"  class="form-control"  required  placeholder="search" onchange="showAProductDuringSale(this.value)">
                                                <option></option>
                                                @foreach($pr as $one)
                                                <option value="{{$one->id}}">{{$one->name}}</option>
                                                @endforeach
                                            </select>    
                                        </div>

                                        
                                    </div> 
                                    
                                    <div class="col-md-8" style="border:1px solid #ddd; border-radius:4px; padding-top:10px">
                                        <div style="background:#5c7e8a;height:40px;border-radius:4px">
                                       </div>

                                       <div style="background:#fff;min-height:200px;border-radius:4px;" id="order">
                                       </div>
                                            
                                        </div>   
                                    </div>
                                </div>


                                
                               
                             </span>
                        </div><!-- end card body-->
                    </div>
               