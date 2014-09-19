
<div class="content banner banner-sector banner-sector-datacenter">
	<div class="content-box">
    	<div class="hero">
      		<h1>Data Center</h1>
            <div class="sub-title-hero">
                <p>
            	RPM is a complete datacenter monitoring solution, built to ensure datacenter customer satisfaction. RPM monitors fire, smoke, and flood in your data center. It also monitor temperature, humidity, and air pressure inside the data center. In addition, RPM also checks machinery status periodically.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="content ourtech">
	<div class="content-box">
    	<ul class="content-menu">
        	<li><a href="<?php echo $base_url ;?>sector-data-center">benefits</a></li>
            <li class="active"><a href="<?php echo $base_url ;?>sector-data-center-simulation">RPM simulation</a></li>
        </ul>
        
    	<h1 class="title-section">RPM simulation</h1>
        <p>
        	Use this simulator to learn how our technology works. The descriptions for each component are provided below the simulator.
        </p>
        
        <div class="simulation-section">
        	<iframe width="100%" height="453" src="https://tinkercad.com/embed/bHBAZKW6vsa" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
            <?php echo simulator_is_mobile(); ?>
        </div>
        
        <h1 class="title-section">Component descriptions</h1>
        <section class="section-table-component">
            <div class="table-component-sector">
                <div class="thead">
                    <div>Component</div>
                    <div>Implementation</div>
                    <div>Description</div>
                </div>
                <div>
                    <div>
                        Server
                    </div>
                    <div>
                        <img src="img/component/data-center/server.jpg">
                    </div>
                    <div>
                        It is a local storage for sensor data. The server offers data backup for 3 months.
                    </div>
                </div>
                
                <div>
                    <div>
                        Gateway
                    </div>
                    <div>
                        <img src="img/component/data-center/gateway.jpg">
                    </div>
                    <div>
                        It aggregates data from sensing nodes. Then, data is sent to server (optional) and cloud. It also has sensing capabilities: temperature, humidity, and luminance.
                    </div>
                </div>
                
                 <div>
                    <div>
                        Environmental node
                    </div>
                    <div>
                        <img src="img/component/data-center/enviromental.jpg">
                    </div>
                    <div>
                        It senses temperature and humidity. The sensor is used on racks and inaccessible machines. 
                    </div>
                </div>
                
                <div>
                    <div>
                        Machine node
                    </div>
                    <div>
                        PAC/CRAC Interfacing<br>
                        <img src="img/component/data-center/pac.jpg"><br>
                        Power Meter/BCPMA Interfacing<br>
                        <img src="img/component/data-center/powermeter.jpg">
                    </div>
                    <div>
                        It senses temperature and energy consumption of machines. It uses standardized protocols for easy integration. The sensor is intended for inaccessible machines.
                    </div>
                </div>
             </div>
             
                
             <div class="table-component-sector">
                <div class="thead">
                    <div>Component</div>
                    <div>Implementation</div>
                    <div>Description</div>
                </div>
                <div>
                    <div>
                        Alarm node
                    </div>
                    <div>
                        Fire sensor<br>
                        <img src="img/component/data-center/firesensor.jpg"><br>
                        Flood sensor<br>
                        <img src="img/component/data-center/floodsensor.jpg">
                    </div>
                    <div>
                        These sensors offer protection against fire, smoke and flood. Any alarm is pushed to application, email, and SMS.
                    </div>
                </div>
                
                <div>
                    <div>
                        Electrical current node
                    </div>
                    <div>
                        <img src="img/component/data-center/electrical.jpg">
                    </div>
                    <div>
                        It measures one or three phases current. The sensor is intended for inaccessible machines.
                    </div>
                </div>
                
                 <div>
                    <div>
                        Air pressure node
                    </div>
                    <div>
                        <img src="img/component/data-center/air.jpg">
                    </div>
                    <div>
                        It measures differential air pressure in a room. Sensors are installed near CRAC/PAC unit or floor tile opening.
                    </div>
                </div>
            </div>
         </section>
    </div>
</div>

