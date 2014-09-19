<div class="content banner banner-sector banner-sector-agriculture">
	<div class="content-box">
    	<div class="hero">
      		<h1>Agriculture</h1>
            <div class="sub-title-hero">
                <p>
            	RPM is a complete agriculture monitoring solution, built to ensure crops grow healthy. RPM monitors temperature and humidity in your greenhouse. It also checks crops health periodically. Furthermore, it provides operator with an insight about the optimum nutrient to give to crops.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="content ourtech">
	<div class="content-box">
    	<ul class="content-menu">
        	<li><a href="<?php echo $base_url ;?>sector-agriculture">benefits</a></li>
            <li class="active"><a href="<?php echo $base_url ;?>sector-storage-simulation">RPM simulation</a></li>
        </ul>
        
    	<h1 class="title-section">RPM simulation</h1>
        <p>
        	Use this simulator to learn how our technology works. The descriptions for each component are provided below the simulator.
        </p>
        
        <div class="simulation-section">
        	<iframe width="100%" height="453" src="https://tinkercad.com/embed/f96bej4PCtn?editbtn=1" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
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
                        Plant and soil sensor
                    </div>
                    <div>
                        <img src="img/component/agriculture/plant.jpg">
                    </div>
                    <div>
                        It senses temperature and humidity. It also senses soil nutrition such as nitrate and potassium. Adjustment on plant and field treatment, based on these parameters, will result in richer crops.
                    </div>
                </div>
                
                <div>
                    <div>
                        Image analytic
                    </div>
                    <div>
                        <img src="img/component/agriculture/image.jpg">
                    </div>
                    <div>
                        It capture images across your field. It enables you to see plant and field: see when plant color turn bad, or pest laying around your plant.
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
                        Valve control
                    </div>
                    <div>
                        <img src="img/component/agriculture/valve.jpg">
                    </div>
                    <div>
                        It is an electrically controlled valve with relay. It allows you to water your plants from your PC or phone.
                    </div>
                </div>
                
                <div>
                    <div>
                        Gateway
                    </div>
                    <div>
                        <img src="img/component/agriculture/gateway.jpg">
                    </div>
                    <div>
                        It aggregates data from sensing nodes. Then, data is sent to server (optional) and cloud. It also has sensing capabilities: temperature, humidity, and luminance.
                    </div>
                </div>
                
                <div>
                    <div>
                        Alarm node
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
            </div>
         </section>
    </div>
</div>

