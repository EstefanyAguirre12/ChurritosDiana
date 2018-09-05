 <!-- Google Web fonts -->
<link href='https://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
<div class="font-cover" id="headparallax">
    <div class="page-content custom-img-background dark custom-col-padding mb-100"> 
          <!-- .row start -->
          <div class="">
              <!-- .col-md-12 start -->
              <div class="col-md-12 centered">
                  <div class="custom-heading style-1" >
                      <h2><span>BAROLO</span></h2>
                      <h2>El mejor hotel para hospedarte</h2>
    
                      <!-- .divider.style-2 start -->
                      <div class="divider style-2 center">
                          <span class="hr-double left"></span>
                          
                          <span class="hr-double right"></span>
                      </div>
                  </div><!-- .custom-heading.style-1 end -->
              </div><!-- .col-md-12 end -->
          </div><!-- .row end -->
    </div><!-- .page-content end --> 
  </div>
 
          <!-- .page-content start -->
          <div class="page-content">
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-12 start -->
                    <div class="col-md-12">
                                <div class="item">
                                    <!-- .event-item-container start -->
                                    <ul class="event-item-container">
                                     
                                        <!-- .event-item-list.event-item-content start -->
                                        <li class="event-item-list event-item-content centered">
                                            <div class="custom-heading style-1">
                                                <h3><span>Reverva ya</span></h3>
                                                <h3>Hospedaje</h3>

                                                <!-- .divider.style-1 start -->
                                                <div class="divider style-1 center">
                                                    <span class="hr-simple left"></span>
                                                   
                                                    <span class="hr-simple right"></span>
                                                </div>
                                            </div><!-- .custom-heading.style-2 end -->
                                            <ul class="article-meta">
                                                <li>Habitaciones</li>
                                                <li>Restaurante</li>
                                                <li>Servicios </li>
                                            </ul><!-- .article-meta end -->
                                            <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                <a class="discover_more has_transition_400" href="reservhabitacion.html">RESERVAR AHORA</a>
                                            </li><!-- .event-item-list.event-item-content end -->
                                    </ul><!-- .event-item-container end -->
                                </div>

                                <div class="item">
                                        <!-- .event-item-container start -->
                                        <ul class="event-item-container">
                                         
                                            <!-- .event-item-list.event-item-content start -->
                                            <li class="event-item-list event-item-content centered">
                                                <div class="custom-heading style-1">
                                                    <h3><span>Reserva ya</span></h3>
                                                    <h3>Conferencias</h3>
    
                                                    <!-- .divider.style-1 start -->
                                                    <div class="divider style-1 center">
                                                        <span class="hr-simple left"></span>
                                                       
                                                        <span class="hr-simple right"></span>
                                                    </div>
                                                </div><!-- .custom-heading.style-2 end -->
                                                <ul class="article-meta">
                                                    <li>Salas</li>
                                                    <li>Sillas</li>
                                                    <li>Mesas </li>
                                                </ul><!-- .article-meta end -->
                                                <p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                                                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                    <a class="discover_more has_transition_400" href="reservhabitacion.html">RESERVAR AHORA</a>
                                                </li><!-- .event-item-list.event-item-content end -->
                                        </ul><!-- .event-item-container end -->
                                    </div>
                                
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->


 
        <div class="cont">
    <div class="">
    <h2>Welcome back,</h2>
        <div class="col-md-12 centered">
            <div class="row">
            <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form">
                        <label><span>Email</span><input type="email" /></label>
                    </div>
                </div>
                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form">
                        <label><span>Password</span><input type="password" /></label>
                    </div>
                </div>
                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form">
                        <label><span>Email</span><input type="email" /></label>
                    </div>
                </div>
                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form">
                        <label><span>Email</span><input type="email" /></label>
                    </div>
                </div>
                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form">
                        <label><span>Email</span><input type="email" /></label>
                    </div>
                </div>
                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form">
                        <label><span>Email</span><input type="email" /></label>
                    </div>
                </div>
            </div>	
            <a class="discover_more has_transition_400 altura" href="#">DISCOVER MORE</a>
        </div>
    </div>
</div>

  


<form action="#" method="post">
<input type="checkbox" name="check_list[]" value="C/C++"><label>C/C++</label><br/>
<input type="checkbox" name="check_list[]" value="Java"><label>Java</label><br/>
<input type="checkbox" name="check_list[]" value="PHP"><label>PHP</label><br/>
<input type="submit" name="submit" value="Submit"/>
</form>
<?php
if(isset($_POST['submit'])){//to run PHP script on submit
if(!empty($_POST['check_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
echo $selected."</br>";
}
}
}
?>