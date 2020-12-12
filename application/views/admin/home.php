<?php
  $this->load->model('module');
   $all_actveuser=$this->module->all_actveuser(); 
   $all_deactveuser=$this->module->all_deactiveuser();
   $brower_all=$this->module->allbrowser(); 
   //exit;
  // echo $brower_all[0]['total']; 
    $chrome=(int)$brower_all[0]['chrome'];
   	$firfox=(int)$brower_all[0]['firfox'];
    $ei= (int)$brower_all[0]['ei'];
	$UCBrowser= (int)$brower_all[0]['UCBrowser'];
	$opera= (int)$brower_all[0]['opera'];
	$safari= (int)$brower_all[0]['safari'];
	$other= (int)$brower_all[0]['other'];
	
    $all_useragent=$chrome+$firfox+$ei+$UCBrowser+$opera+$safari+$other;
	
	//$brower_all[0]['total'];
	
	
	 $chrome_prencent=(100*$chrome)/$all_useragent;
	 $firfox_present=(100*$firfox)/$all_useragent;
	 $ei_present=(100*$ei)/$all_useragent;
	 $UCBrowser_present=(100*$UCBrowser)/$all_useragent;
	 $opera_present=(100*$opera)/$all_useragent;
	 $safari_present=(100*$safari)/$all_useragent;
	 $other_present=(100*$other)/$all_useragent;
	
	
?>	
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

     

        <!-- top navigation -->
        
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">        
          <div class="row">
		 
            <div class="vistr_d">
                <div class="col-sm-4">
					<div class="all_user_d clr_1">
					     <h2> All Exams </h2>
						   <span><?php echo $all_useragent;?></span>
					 </div>
                 </div>
				 
				    <div class="col-sm-4">
					<div class="all_user_d clr_2">
					     <h2>Active Users</h2>
						   <span><?php echo $all_actveuser;?></span>
					 </div>
                 </div>
				 
				    <div class="col-sm-4">
					<div class="all_user_d clr_3">
					     <h2>Deactive Users</h2>
						   <span><?php echo $all_deactveuser;?></span>
					 </div>
                 </div>
				 
				 <div class="clearfix"></div>
              </div>
			   
          </div>
          
		 
		  
		  <div class="row">
			  <div class="col-sm-8 chat_cont_jjj">
			  	<div class="chat_cont_sl">
					<div id="containers"></div>
					
			  </div>
			  </div>
			  
			    <div class="col-sm-4 chat_cont_pie">
			  	<div class="chat_cont_sl">
					<div id="containerdd" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>
					
			  </div>
			  </div>
			  
		  </div>
		  
		  
		  
        </div>
        <!-- /page content -->

		
			<script>
		var chart = Highcharts.chart('containers', {

    title: {
        text: 'Users chart'
    },

    subtitle: {
        text: 'Users'
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },

    series: [{
        type: 'column',
        colorByPoint: true,
        data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
        showInLegend: false
    }]

});


	       </script>
		   
		   
			<script>
	// Create the chart
Highcharts.chart('containerdd', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Browser market shares. January, 2015 to May, 2015'
    },
   
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [
		{
            name: 'Microsoft Internet Explorer',
            y: <?php echo round($ei_present);?>,
            drilldown: 'Microsoft Internet Explorer'
        }, {
            name: 'Chrome',
            y: <?php  echo round($chrome_prencent,2);?>,
            drilldown: 'Chrome'
        }, {
            name: 'Firefox',
            y: <?php  echo round($firfox_present,2);?>,
            drilldown: 'Firefox'
        }, {
            name: 'Safari',
            y: <?php  echo  round($safari_present,2);?>,
            drilldown: 'Safari'
        }, {
            name: 'Opera',
            y: <?php  echo round($opera_present,2);?>,
            drilldown: 'Opera'
        }, 
		{
            name: 'UCBrowser',
            y: <?php  echo round($UCBrowser_present,2);?>,
            drilldown: 'Opera'
        },
		{
            name: 'Proprietary or Undetectable',
            y: <?php  echo round($other_present);?>,
            drilldown: null
        }]
    }],
    drilldown: {
        series: [{
            name: 'Microsoft Internet Explorer',
            id: 'Microsoft Internet Explorer',
            data: [
                ['v11.0', 24.13],
                ['v8.0', 17.2],
                ['v9.0', 8.11],
                ['v10.0', 5.33],
                ['v6.0', 1.06],
                ['v7.0', 0.5]
            ]
        }, {
            name: 'Chrome',
            id: 'Chrome',
            data: [
                ['v40.0', 5],
                ['v41.0', 4.32],
                ['v42.0', 3.68],
                ['v39.0', 2.96],
                ['v36.0', 2.53],
                ['v43.0', 1.45],
                ['v31.0', 1.24],
                ['v35.0', 0.85],
                ['v38.0', 0.6],
                ['v32.0', 0.55],
                ['v37.0', 0.38],
                ['v33.0', 0.19],
                ['v34.0', 0.14],
                ['v30.0', 0.14]
            ]
        }, {
            name: 'Firefox',
            id: 'Firefox',
            data: [
                ['v35', 2.76],
                ['v36', 2.32],
                ['v37', 2.31],
                ['v34', 1.27],
                ['v38', 1.02],
                ['v31', 0.33],
                ['v33', 0.22],
                ['v32', 0.15]
            ]
        }, {
            name: 'Safari',
            id: 'Safari',
            data: [
                ['v8.0', 2.56],
                ['v7.1', 0.77],
                ['v5.1', 0.42],
                ['v5.0', 0.3],
                ['v6.1', 0.29],
                ['v7.0', 0.26],
                ['v6.2', 0.17]
            ]
        }, {
            name: 'Opera',
            id: 'Opera',
            data: [
                ['v12.x', 0.34],
                ['v28', 0.24],
                ['v27', 0.17],
                ['v29', 0.16]
            ]
        }]
    }
});

	       </script>
	       <script type="text/javascript">
   function preventback(){
    window.history.forward();}
    setTimeout("preventback()",0);
   window.onunload= function() { null };
    </script>
		   
        <!-- footer content -->
 

 