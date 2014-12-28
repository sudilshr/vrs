<?php
    $cur_mod= strtolower($this->uri->segment(2));
?>
<li class="start <?php if($cur_mod=="") echo "active"; ?>">                            
    <a href="<?php echo base_url(); ?>dashboard">                                
        <i class="icon-home"></i>                                 
        <span class="title">Dashboard</span>                                
        <span class="selected"></span>                            
    </a>                     
</li>                     
<li class="<?php if($cur_mod=="vehicle"||$cur_mod=="vendor"||$cur_mod=="type") echo "active"; ?>">                            
    <a href="">                
        <i class="icon-road"></i>              
        <span class="title">Vehicle Manager</span>      
        <span class="arrow"></span>                   
        
    </a>            
    <ul class="sub-menu">    
        <li class="<?php if($cur_mod=="vehicle") echo "active"; ?>">                
            <a href="<?php echo base_url(); ?>dashboard/vehicle">Vehicle</a>                      
        </li>                                      
        <li class="<?php if($cur_mod=="vendor") echo "active"; ?>">                                       
            <a href="<?php echo base_url(); ?>dashboard/vendor">Vehicle Vendor</a>                        
        </li>                         
        <li class="<?php if($cur_mod=="type") echo "active"; ?>">                        
            <a href="<?php echo base_url(); ?>dashboard/type">             
                Vehicle Type</a>                     
        </li>                        
    </ul>                
</li>                  
<li class="<?php if($cur_mod=="reservation") echo "active"; ?>">          
    <a href="<?php echo base_url(); ?>dashboard/reservation">    
        <i class="icon-tags"></i>     
        <span class="title">Reservation/Booking</span>              
        
    </a>              
           
</li>            
     
<li class="<?php if($cur_mod=="location") echo "active"; ?>">       
    <a href="<?php echo base_url(); ?>dashboard/location"><i class="icon-map-marker"></i><span class="title">Location</span></a> 
         
</li>           
<li class="<?php if($cur_mod=="settings"||$cur_mod=="payment"||$cur_mod=="users") echo "active"; ?>">   
    <a href=""><i class="icon-wrench"></i><span class="title">Settings</span><span class="arrow "></span></a>
    <ul class="sub-menu">      
        <li class="<?php if($cur_mod=="settings") echo "active"; ?>">                 
            <a href="<?php echo base_url(); ?>dashboard/settings">Global Settings</a> 
        </li>         
        <li class="<?php if($cur_mod=="payment") echo "active"; ?>">             
            <a href="<?php echo base_url(); ?>dashboard/payment">Payment Gateway</a>   
        </li>             
        <li class="<?php if($cur_mod=="users") echo "active"; ?>">               
            <a href="<?php echo base_url(); ?>dashboard/users">User Settings</a>     
        </li>             
    </ul>           
</li>                 
