<style>
.p-10{
    padding:27px !important;
}
.w-99{
    width:99px !important;
}
.f-18{
    font-size: 18px;
}
h5{
    margin-bottom:0px !important;
}
.m-17{
    margin-top:17px;
}
.text-right{
    text-align:right !important;
}
.float-right{
    float:right !important;
}
.m-top{
    margin-top:30px;
}
.page-invoice-amount {
    margin-bottom: 40px;
    padding-top: 10px;
    font-size: 20px;
    border-top: 1px solid #dee2e6;
}
    
    .ship_Section{
        padding-left: 40px;
    }    
    
 #distprodutName{
    width: 150px;
 }   
 #inputTableUnitPrice{
    width: 96px;
 }
   
.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}
    .dealer{
      float: left;
  width: 40%;
  margin-top: 6px;
        
    }
    
.dealer-name{
  float: left;
  width: 60%;
  margin-top: 6px;
        
    }
select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem + -2px);
}


    
</style>

<div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                   
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                        <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Orders" ><i class="fa fa-fw fa-user-circle"></i> Orders</a>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-rocket"></i> Orders </a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Distributor/Listorders" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>
                                            </li>
                                    
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Retailer/Listretailerorders" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>            
                                            </li>
                                           
                                    </ul>
                                </div>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link <?=($this->uri->segment(2)==='Neworder')?'active':''?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> New Orders </a>
                                <div id="submenu-2" class="<?=($this->uri->segment(2)==='Newretailerorder')?'collapse':''?> submenu" style="">
                                    <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Distributor/Neworder" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>
                                            </li>
                                    
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?php echo base_url()?>Retailer/Newretailerorder" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>            
                                            </li>
                                           
                                    </ul>
                                </div>
                            </li>
  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Orders/shipment" ><i class="fa fa-fw fa-user-circle"></i> Shipment </a>
                            </li>
                        
                        </ul>
                    </div>
                </nav>
            </div>


        </div> 
        





        
        
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
             
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">New Order </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Orders" class="breadcrumb-link">Orders</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Distributor/Listorders" class="breadcrumb-link">List</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">New Order</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row" >
                
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card p-10"  >
                            <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <?php
                                                if($this->session->tempdata("add_success"))
                                                {
                                                echo "<div class='alert alert-success succ-msg' role='alert'>".$this->session->tempdata("add_success")."</div>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                               <?php echo form_open(base_url()."Distributor/Neworder");?>
                               <input type="hidden" name="order_By" id="order_By" value="admin">
                               <div class="row"> 
                                 <div class="col-xs-12 col-sm-4 col-md-4"> 
                                     <div class="row"> 
                                           <h4> Select Distributor:   </h4> <br>
                                        </div>
                                   
                                        <select class="progControlSelect2 custom-select" id="distributor_Name" name="distributor_Name">
                                        <option value="">Select Distributor</option>
                                                <?php 
                                                    foreach($distributors as $dist){
                                                        ?> 
                                                        <option value="<?php echo $dist->distributor_Id;?>"><?php echo $dist->comporganization_Name;?></option>
                                                        <?php
                                                    }
                                                ?>
                                        </select>
                                        
                                        <div class="distributorBasic m-t-10"> 
                                                <p class="distributorBasic1"> Contact Number  :   <span id="dist_Mobile"> </span> </p>
                                                 <p class="distributorBasic1"> Address  :   <span id="dist_Address1"> </span> </p>
                                                <p class="distributorBasic1"><u>GSTIn  :    <span id="dist_GSTIN"> </span> </u></p>
                                                
                                        </div>
                                </div>
                                   
                                   
                                 <div class="col-xs-12 col-sm-4 col-md-4"> 
                                            <h4> <div class="custom-control custom-checkbox mb-3 d-flex">
                                                <input type="checkbox" class="checkShip custom-control-input" id="same_Shipping" name="same_Shipping" onchange="valueChanged()" value="1">
                                                <label class="custom-control-label" for="same_Shipping">
                                                        <div>Same</div>                                                        
                                                </label>

                                                <div class="row"> 
                                                    <div class="ship_Section"> 
                                                        <h4> Ship To  </h4>
                                                        <div class="form-group"> 
                                                                <label > Name: </label>
                                                                <input type="text" name="shipping_Personname" id="shipping_Personname" class="form-control">
                                                        </div>
                                                       
                                                       <div class="form-group">
                                                            <label>Address</label>
                                                        
                                                                <textarea id="shipping_Address" name="shipping_Address" class="form-control"></textarea>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                </div> 
                                            </h4> 
                                 </div>
                                   
                                   
                                 <div class="col-xs-12 col-sm-4 col-md-4"> 
                                    <h5>Order Details</h5>
                                            <div class="row distributer_order"> 
                                                <div class="col-xs-12 col-sm-6 col-md-6 "> 
                                                    <p class="distributorBasic1"> Order Date</p>
                                                    <input type="text" class="form-control" name="distorder_Date" id="distorder_Date">
                                               <span class="text-danger"><?php echo form_error("order_Date");?></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <p class="distributorBasic1"1>Order Ref Number </p>
                                                    <input type="text" class="form-control" name="Order_RefNumber" id="invoice_RefNumber">
                                               
                                                </div>
                                            </div>

                                            <div class="row m-17 "> 
                                                <div class="col-xs-12 col-sm-6 col-md-6"> 
                                                    <p class="distributorBasic1"> Order Due</p>
                                                    <select class="form-control" name="Order_Due" id="invoice_Due"> 
                                                        <option> Due on Receipt </option>
                                                        <option> After 7 days </option>
                                                        <option> After 15 days </option>
                                                        <option> After 30 days </option>
                                                        <option> After 45 days </option>
                                                        <option> After 60 days </option>
                                                        <option> Custom </option>
                                                    </select>
                                               
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                 </div>
                                   
                                   
                <div class="col-md-12" style="padding-top: 30px;" >                   
                <div class="row"> 
                        <table class="table-responsive"> 
                        <tr>
                            <td>
                                <select class="progControlSelect2 form-control" id="distorderproduct_Code" name="distorderproduct_Code">
                                    
                                    <option value="0">Select Product</option>
                                     <?php 
                                            foreach($products as $product){
                                                
                                            $res = $product->Name;
                                            $arr = explode(",",$res);
                                            $result = array_filter($arr);
                                                
                                                 foreach($result as $key => $value){
                                                    ?> 
                                                        <option value="<?php echo $value;?>"><?php echo $value?></option>
                                                    <?php
                                                }       
                                                
                                               

                                            }
                                        
                                            ?>
                                    </select>
                                <label for="distorderproduct_Code">Product Code</label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="distorderprod_Name" id="distorderprod_Name" readonly="">
                                <label for="distorderprod_Name" >Product Name</label>
                            </td>
                            <td class="w-120">
                                <input type="text" class="form-control" name="distorderprod_Qty" id="distorderprod_Qty">
                                <label for="distorderprod_Qty" >Qty</label>
                            </td>
                            <td>
                                <input type="text" class="form-control text-right" name="distorderprod_Unitrate" id="distorderprod_Unitrate">
                                <label for="distorderprod_Unitrate">Unit Rate (₹)</label>
                            </td>
                            <td>
                                <input type="text" class="form-control text-right" name="distorderprod_Discount" id="distorderprod_Discount" readonly="">
                                <label for="distorderprod_Discount">Discount</label>
                            </td>
                            <td>
                                <input type="text" class="form-control text-right" name="distorderprod_Netland" id="distorderprod_Netland" readonly="">
                                <label for="distorderprod_Netland" class="distorder">Net Landing Price</label>
                            </td>
                            <td>
                                <input type="text" class="form-control text-right" name="distorderprod_Netamt" id="distorderprod_Netamt" readonly="">
                            <label for="distorderprod_Netamt">Net Amount</label>
                            </td>
                                 <td colspan="12" class="text-center show-butns" style="display:none">
                                 <button id="buttonAddItem" type="button" class="btn btn-info btn-lg btn-round btn-pill-right waves-effect waves-classic btn-distorderadd dist_button">Add</button>
                            </td>
                           
                            <td colspan="12" class="text-center show-butns" style="display:none">
                                <button id="buttonClearItems" type="button" class="btn btn-danger btn-lg btn-round btn-pill-left waves-effect waves-classic dist_button">Clear</button>
                               
                            </td>
                           
                   
                            
                            
                        </tr>
                        <tr>
                           
                        </tr>
                        <tbody class="disttable_Body"> 
                        
                        </tbody>
                        </table>
                </div>
              </div>
                                   

                                   

<div class="col-md-12 m-top">
                <div class="text-right clearfix">
                    <div class="float-right">
                    <div class="form-group row">
                        <label for="totalAmount" class="col-3 col-lg-4 col-form-label text-right">Sub Total:</label>
                            <div class="col-9 col-lg-8">
                             <input type="text" id="subtotalAmount" name="totalAmount" placeholder=" ₹ 0" class="form-control">
                              </div>
                            </div>
                        
                        <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-4 col-form-label text-right">Discount: </label>
                            <div class="col-9 col-lg-8">
                             <input type="text" id="grandDiscount" name="grandDiscount" class="form-control">
                              </div>
                            </div>
                        
                        <!--<div class="form-group row">-->
                        <!--<label for="inputEmail2" class="col-3 col-lg-4 col-form-label text-right">Discount:</label>-->
                        <!--    <div class="col-9 col-lg-8">-->
                        <!--     <input type="text"  id="totalDiscount" name="totalDiscount" class="form-control">-->
                        <!--      </div>-->
                        <!--    </div>-->
                        
                        <div class="page-invoice-amount form-group row">
                            
                            <div class="col-3 col-lg-6 text-left">
                        <p class="">Grand Total: ₹&nbsp;<span class="orderTotal">0</span></p></div>
                        <div class="col-9 col-lg-6">
                             <input id="final_Result" name="final_Result" placeholder="₹ 0" class="form-control">
                              </div>
                        </div>
                    </div>
                </div>
                </div>
<div class="col-md-12">
<button id="btnSubmit" type="submit" class="btn btn-animate btn-animate-side btn-primary waves-effect waves-classic float-right">
                        <span><i class="icon md-shopping-cart" aria-hidden="true"></i> Save Order </span>
                    </button>
</div>
                               </div>
                               <?php echo form_close();?>
                            </div>
                            
                        </div>
                </div>
              
</div>
</div>

<script type="text/javascript"> 


function valueChanged()
{
    if($('.checkShip').is(":checked"))   
        //$(".ship_Section").hide();
        $('.ship_Section').fadeOut();
        else
        $(".ship_Section").fadeIn();        
}
</script>
