@extends('frontend.layouts.master')

@section('title')
    Nepal | AsiaLink Services
@endsection

@section('content')


    <section id="about-us" class="container">
        <div class="row">
            <div class="col-sm-6">
              
                <p style="text-align:justify;">
              
                    Nepal, officially the Federal Democratic Republic of Nepal, is a landlocked sovereign state located in South Asia. Nepal is situated within latitude 26° 22' N to 30°27' N and longitude 80°4E to 88°12’ E. with an area of 147,181 square kilometers (56,827 sq mi). Its Shape is roughly rectangular about 885km long East to West and about 200km wide North to South and occupies 0.3 and 0.03% of land area of Asia and the world respectively. Population of Nepal is approximately 27 million (and nearly 2 million absentee workers living abroad), Nepal is the world's 93rd largest country by land mass and the 41st most populous country. It is located in the Himalayas and bordered to the north by the People's Republic of China, and to the south, east, and west by the Republic of India. Specifically, the Indian states of Uttarakhand, Uttar Pradesh, Bihar, West Bengal, and Sikkim border Nepal, while across the Himalayas lies the Tibetan Autonomous Region. Nepal is separated from Bangladesh by the narrow Indian Siliguri corridor. Kathmandu is the nation's capital and largest metropolis.</p>

   <p style="text-align:justify;">
The mountainous north of Nepal has eight of the world's ten tallest mountains, including the highest point on Earth, Mount Everest, called Sagarmatha in Nepali. It contains more than 240 peaks over 20,000 ft (6,096 m) above sea level. The southern Terai region is fertile and humid. Lumbini, the birthplace of Lord Gautam Buddha, is located in this region. Lumbini is one of the holiest places of one of the world's great religions, and its remains contain important evidence about the nature of Buddhist pilgrimage centres from as early as the 3rd century BC.</p>
   <p style="text-align:justify;">
Hinduism is practiced by about 81.3% of Nepalis, making it the country with the highest percentage of Hindus. Buddhism is linked historically with Nepal and is practiced by 16%, Kirat 5.1%, Islam by 4.4%, Christianity 1.4%, and animism 0.4%. A large section of the population, especially in hill region, even though they follow</p>

<p style="text-align:justify;">
Hindu customs, may identify themselves as both Hindu as well as Buddhists which can be attributed to syncretic nature of Hinduism and Buddhism in Nepal.In 2013, Nepal ranked the 157th place on the Human Development Index (HDI) and is one of the least developed nations in the entire world.




                </p>

            </div><!--/.col-sm-6-->
            <div class="col-sm-6">

                <h4>Federal Democratic Republic of Nepal</h4>
                <h4>Sanghiya Loktantrik Ganatantra Nepal</h4>

                <p>
                    <img class="img-rounded" src="{{ URL::asset('images/nepal.jpg') }}" alt="Nepal" width="560" height="300" />
                </p>

                     <p style="padding-bottom:20px;">
                        Despite being a landlocked country, Nepal has a lot from nature to offer to its people. 
                     </p>

                <!-- ################ accordion starts here #### -->

                    <div class="panel-group" id="accordion1">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                              Geography
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne1" class="panel-collapse collapse">
                          <div class="panel-body">
                            
                            <p>
                                Capital  <span style="padding-left:30px;"> : Kathmandu </span> <br />

                                Area <span style="padding-left:45px;">   : Total 147,181 km2 / 56,827 sq mi (95th) Water (%) 2.8 </span> <br />

                                Population <span style="padding-left:5px;"> : 2011 census 26,494,504 Density 180/km2, 518/sqmi (62th) </span>

                            </p>

                          </div>
                        </div>
                      </div>


             
                <!-- ################# ends in here ########### -->

                 <!-- ################ accordion2 stats ### -->

                 
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                             Political
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo1" class="panel-collapse collapse">
                          <div class="panel-body">
                            
                            <p>
                                Legislature
                                 <span style="padding-left:30px;"> : Constituent Assembly </span> <br />

                                Government  <span style="padding-left:20px;">   : Federal Parliment </span> <br />

                                President<span style="padding-left:40px;"> : Mr. Ram Prasad Baral </span> <br />

                                Prime Minister<span style="padding-left:10px;"> : Mr. Sushil Koirala </span>
                                

                            </p>

                          </div>
                        </div>
                      </div>


             
                <!-- ################# ends in here ########### -->



                <!-- ################ accordion3 starts ### -->

                 
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                             Currency, Time Zone
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree1" class="panel-collapse collapse">
                          <div class="panel-body">
                            
                            <p>
                                Currency
                                 <span style="padding-left:30px;"> : Nepalese Rupees </span> <br />

                                Time Zone  <span style="padding-left:20px;">   : NPT (UTC +5:45) </span> <br />

                                <!--
                                President<span style="padding-left:40px;"> : Mr. Ram Prasad Baral </span> <br />

                                Prime Minister<span style="padding-left:10px;"> : Mr. Sushil Koirala </span> -->
                                

                            </p>

                          </div>
                        </div>
                      </div>


             
                <!-- ################# ends in here ########### -->


                </div> <!-- end of panel-group accordion -->

            </div><!--/.col-sm-6-->
        </div><!--/.row-->

        <div class="gap"></div>



    </section><!--/#about-us-->

@endsection