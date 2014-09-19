
<div class="content banner banner-sector banner-sector-residence">
	<div class="content-box">
    	<div class="hero">
      		<h1>Residence</h1>
            <div class="sub-title-hero">
                <p>
            		RPM is a residential automation solution, built to introduce a new definition of comfortable living for residents. RPM offers protection against fire, smoke, and intrusion inside your home. RPM also remembers your preference of your comfort zones. Furthermore, it also helps you save money from efficient energy usage.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="content ourtech">
	<div class="content-box">
    	<ul class="content-menu">
        	<li><a href="<?php echo $base_url ;?>sector-residence">benefits</a></li>
            <li class="active"><a href="<?php echo $base_url ;?>sector-residence-simulation">RPM simulation</a></li>
        </ul>
        
    	<h1 class="title-section">RPM simulation</h1>
        <p>
        	Use this simulator to learn how our technology works. The descriptions for each component are provided below the simulator.
        </p>
        
        <div class="simulation-section">
        	<iframe width="100%" height="453" src="https://tinkercad.com/embed/atrTr1om2Od?editbtn=1" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
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
                        <img src="img/component/storage/server.jpg">
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
                        <img src="img/component/storage/gateway.jpg">
                    </div>
                    <div>
                        It aggregates data from sensing nodes. Then, data is sent to server (optional) and cloud. It also has sensing capabilities: temperature, humidity, and luminance.
                    </div>
                </div>
                
                 <div>
                    <div>
                        Repeater
                    </div>
                    <div>
                        <img src="img/component/storage/repeater.jpg">
                    </div>
                    <div>
                        Connect sensing node to gateway to extend monitoring range.
                    </div>
                </div>
                
                <div>
                    <div>
                        Environmental node
                    </div>
                    <div>
                        <img src="img/component/storage/environmental.jpg">
                    </div>
                    <div>
                        It senses temperature and humidity. Optionally, it also senses certain gases in the air, such as COx and NOx. The sensor is used on racks and refrigerator. 
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
                        Handheld environmental node
                    </div>
                    <div>
                        <img src="img/component/storage/handheld.jpg">
                    </div>
                    <div>
                        It is intended for measuring  temperature and humidity of stored materials/items.
                    </div>
                </div>
                
                <div>
                    <div>
                        Alarm nodes
                    </div>
                    <div>
                        Fire sensor<br>
                        <img src="img/component/storage/firesensor.jpg"><br>
                        Flood sensor<br>
                        <img src="img/component/storage/floodsensor.jpg">
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
                        <img src="img/component/storage/electrical.jpg">
                    </div>
                    <div>
                        It measures one or three phases current. The sensor is intended for machines such as refrigerator and AC.
                    </div>
                </div>
            </div>
         </section>
    </div>
</div>

