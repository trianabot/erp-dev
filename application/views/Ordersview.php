
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
			 <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Orders Overview</h2>
                            
                            <hr>
                        </div>

                        <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center iconsui">
                                     <div class="icon-circle-medium  bg-info-light">
                                     <span class="notifymsg">4</span> 
                                     <i class="icon-people"></i>
                                </div>
                                   
                                    <div class="cardtext">
                                        <h4> Distributors </h4>
                                        <h5 class="text-muted">Total</h5> 
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10" id="total_Order">
                                            <?php 
                                            echo $total_Orders['0']->total;
                                            ?>
                                        </h2>
                                    </div>
                                   
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center iconsui">
                                     <div class="icon-circle-medium  bg-info-light">
                                     <span class="notifymsg">3</span>
                                     <i class="icon-user-following"></i>
                                    </div>
                                    <div class="cardtext">
                                    <h4>Retailers</h4>
                                        <h5 class="text-muted">Total</h5>
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">200</h2>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body p-tb-20 text-center iconsui">
                                     <div class="icon-circle-medium  bg-info-light">
                                     <span class="notifymsg">6</span>
                                     <i class="icon-location-pin"></i> 
                                        
                                    </div>
                                    <div class="cardtext">
                                        <h4>Location </h4>
                                        <h5 class="text-muted">Total</h5>
                                        <h2 class="badge badge-secondary mb-0 p-lr-20 p-tb-10">325</h2>
                                    </div>
                                   
                                </div>
                            </div>
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
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- sparkline js -->
    <script src="<?php echo base_url()?>assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/charts/sparkline/spark-js.js"></script>
    <script src="<?php echo base_url()?>assets/libs/js/main-js.js"></script>

    <script>
        // ============================================================== 
    // Revenue Cards
    // ============================================================== 
    $("#sparkline-revenue").sparkline([5, 5, 7, 7, 9, 5, 3, 5, 2, 4, 6, 7], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#5969ff',
        fillColor: '#dbdeff',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-revenue2").sparkline([3, 7, 6, 4, 5, 4, 3, 5, 5, 2, 3, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#ff407b',
        fillColor: '#ffdbe6',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-revenue3").sparkline([5, 3, 4, 6, 5, 7, 9, 4, 3, 5, 6, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#25d5f2',
        fillColor: '#dffaff',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-revenue4").sparkline([6, 5, 3, 4, 2, 5, 3, 8, 6, 4, 5, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#fec957',
        fillColor: '#fff2d5',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true,
    });
    </script>

    <script>
    $("#sparkline-1").sparkline([5, 5, 7, 7, 9, 5, 3, 5, 2, 4, 6, 7], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#5969ff',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-2").sparkline([3, 7, 6, 4, 5, 4, 3, 5, 5, 2, 3, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#ff407b',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-3").sparkline([5, 3, 4, 6, 5, 7, 9, 4, 3, 5, 6, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#25d5f2',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true
    });



    $("#sparkline-4").sparkline([6, 5, 3, 4, 2, 5, 3, 8, 6, 4, 5, 1], {
        type: 'line',
        width: '99.5%',
        height: '100',
        lineColor: '#ffc750',
        fillColor: '',
        lineWidth: 2,
        spotColor: undefined,
        minSpotColor: undefined,
        maxSpotColor: undefined,
        highlightSpotColor: undefined,
        highlightLineColor: undefined,
        resize:true,
    });
    </script>
</body>
 
</html>