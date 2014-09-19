<div class="content banner banner-sector banner-sector-factory">
	<div class="content-box">
    	<div class="hero">
      		<h1>Factory</h1>
            <div class="sub-title-hero">
                <p>
            	RPM is a complete factory monitoring solution, built to improve factory efficiency. RPM monitors ambient condition, fire, smoke, flood and intrusion in your factory. It also monitor machinery status and condition in the factory.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="content ourtech">
	<div class="content-box">
    	<ul class="content-menu">
        	<li><a href="<?php echo $base_url ;?>sector-factory">benefits</a></li>
            <li class="active"><a href="<?php echo $base_url ;?>sector-factory-simulation">RPM simulation</a></li>
        </ul>
        
    	<h1 class="title-section">RPM simulation</h1>
        <p>
        	Use this simulator to learn how our technology works. The descriptions for each component are provided below the simulator.
        </p>
        <div class="simulation-section">
        	<iframe width="100%" height="453" src="https://tinkercad.com/embed/74Dfr3xtAGx?editbtn=1" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
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
                        Environmental node
                    </div>
                    <div>
                        <img src="img/component/factory/environmental.jpg">
                    </div>
                    <div>
                        It senses temperature and humidity. It is intended for wood oven. The transducer is put inside oven chamber while its controller on the outside.
                    </div>
                </div>
                
                <div>
                    <div>
                        Break-in node
                    </div>
                    <div>
                        <img src="img/component/factory/break.jpg">
                    </div>
                    <div>
                        It senses intrusion on windows or doors. The sensor use IR technology to detect a breaking-in.
                    </div>
                </div>
                
                 <div>
                    <div>
                        Gateway
                    </div>
                    <div>
                        <img src="img/component/factory/gateway.jpg">
                    </div>
                    <div>
                        It aggregates data from sensing nodes. Then, data is sent to server (optional) and cloud. It also has sensing capabilities: temperature, humidity, and luminance.
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
                        Server
                    </div>
                    <div>
                        <img src="img/component/factory/server.jpg">
                    </div>
                    <div>
                        It is a local storage for sensor data. The server offers data backup for 3 months.
                    </div>
                </div>
                <div>
                    <div>
                        Alarm node
                    </div>
                    <div>
                        Fire sensor<br>
                        <img src="img/component/factory/firesensor.jpg"><br>
                        Flood sensor<br>
                        <img src="img/component/factory/floodsensor.jpg">
                    </div>
                    <div>
                        These sensors offer protection against fire, smoke and flood. Any alarm is pushed to application, email, and SMS.
                    </div>
                </div>
                
                <div>
                    <div>
                        Tap button node
                    </div>
                    <div>
                        <img src="img/component/factory/tap.jpg">
                    </div>
                    <div>
                        It is a simple button for operator to indicate that they have done patrolling in certain area.
                    </div>
                </div>
                
            </div>
         </section>
    </div>
</div>

