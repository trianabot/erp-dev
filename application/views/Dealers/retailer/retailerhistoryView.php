
        
   

   <div class="nav-left-sidebar sidebarDark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Retailers</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Dealers" ><i class="fa fa-fw fa-user-circle"></i> Overview </a>
                            </li>
                        <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i> Location Settings </a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                    <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='State')?'active':''?>" href="<?php echo base_url()?>Dealers/State" ><i class="fa fa-fw fa-user-circle"></i>State</a>
                                
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='District')?'active':''?>" href="<?php echo base_url()?>Dealers/District" ><i class="fa fa-fw fa-user-circle"></i>District</a>
                                
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link <?=($this->uri->segment(2)==='addsubDistrict')?'active':''?>" href="<?php echo base_url()?>Dealers/Subdistrict" ><i class="fa fa-fw fa-user-circle"></i>Sub District</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url()?>Dealers/City" ><i class="fa fa-fw fa-user-circle"></i>City</a>
                            </li>
                                    </ul>
                                </div>
                            </li>
                           
                         
                        <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i> Distributor</a>
                            <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                    <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url()?>Dealers/distributor" ><i class="fa fa-fw fa-user-circle"></i>Distributor</a>
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url()?>Dealers/distributorHistory" ><i class="fa fa-fw fa-user-circle"></i>Distributor History</a>                               
                            </li>
                        </ul>
                                </div>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link <?=($this->uri->segment(2)==='retailerHistory')?'active':''?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fa-rocket"></i>Retailer</a>
                                    <div id="submenu-5" class="<?=($this->uri->segment(2)==='retailer')?'collapse':''?> submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                        <a class="nav-link" href="<?php echo base_url()?>Dealers/retailer" ><i class="fa fa-fw fa-user-circle"></i>Retailer</a>
                                                </li>
                                        
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="<?php echo base_url()?>Dealers/retailerHistory" ><i class="fa fa-fw fa-user-circle"></i>Retailer History</a>                               
                                                </li>
                                            </ul>
                                    </div>
                            </li>
                          
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Retailer</h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Dealers" class="breadcrumb-link">Dealers</a></li>
                                        <li class="breadcrumb-item"><a href="<?php echo base_url()?>Dealers/retailerHistory" class="breadcrumb-link">Retailer History</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Retailer History Lists</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
               

                    <div class="card">
                    <div class="row margin0 grey">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                                <span class="table-title">Retailer</span>
                                </div>
                            </div>                                   
                               
                            <div class="card-body">
                                    <table class="table" id="brandTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Retailer Name</th>
                                                <th scope="col">Distributor Name</th>
                                                <th scope="col">Contact Person</th>
                                                <th scope="col">Contact</th>
                                                <th scope="col">Qty</th>
                                                <th scope="col">Total Amount</th>
                                                <th scope="col">Total Paid</th>
                                                <th scope="col">Total Balance</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
</div>
</div>

                
            <!-- ============================================================== -->
            <!-- footer -->


           