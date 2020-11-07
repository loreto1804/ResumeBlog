@extends('layouts.app')
@section('content')
<!-- Container -->
<div class="content-wrap">
   <section class="container-fluid" data-section="home">
      <!-- Personal Section -->
      <div class="row flex-row">
         <!-- Personal Details -->
         <div id="details" class="col-md-8 flex-row bg-color01 padding-50" data-animation-origin="left" data-animation-duration="300" data-animation-delay="400" data-animation-distance="200px">
            <div class="quote">
               <h5 class="font-accident-one-bold hovercolor uppercase">
                  Hard-working person on the way to the success...
               </h5>
               <div class="dividewhite1"></div>
               <p class="small">
                  My future plans involve expanding my portfolio with varied projects ranging from mobile apps
                  <i>(iOS)</i> to e-commerce websites <i>(Laravel)</i>.
               </p>
            </div>
            <div class="divider-dynamic"></div>
            <div class="infoblocks">
               <div class="block nopadding">
                  <div class="col-sm-1 col-md-3 xy-center">
                     <i class="fa fa-cogs hovercolor"></i>
                  </div>
                  <div class="col-sm-11 col-md-9">
                     <h5 class="font-accident-one-bold uppercase">Good Time and Task Management</h5>
                     <p class="small">
                        Highly reliable with the time and shape that my tasks are assigned with.
                     </p>
                  </div>
               </div>
               <div class="block nopadding">
                  <div class="col-sm-1 col-md-3 xy-center">
                     <i class="flaticon-stats47 hovercolor"></i>
                  </div>
                  <div class="col-sm-11 col-md-9">
                     <h5 class="font-accident-one-bold uppercase">Driven</h5>
                     <p class="small">
                        When you find your why, you don’t put excuses. I just find a way to make it happen.
                     </p>
                  </div>
               </div>
               <div class="block nopadding">
                  <div class="col-sm-1 col-md-3 xy-center">
                     <i class="flaticon-three-1 hovercolor"></i>
                  </div>
                  <div class="col-sm-11 col-md-9">
                     <h5 class="font-accident-one-bold uppercase">Polyglot</h5>
                     <p class="small">
                        I'm fluent in both Spanish and English. I also comprehend a few programming
                        languages and frameworks.
                     </p>
                  </div>
               </div>
               <div class="block nopadding">
                  <div class="col-sm-1 col-md-3 xy-center">
                     <i class="fa fa-code hovercolor"></i>
                  </div>
                  <div class="col-sm-11 col-md-9">
                     <h5 class="font-accident-one-bold uppercase">Programmer</h5>
                     <p class="small">
                        Programs are the building blocks of computers. I focus on writing code that is not
                        only readable but also optimal.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Personal Details -->

         <!-- Personal Details -->
         <div id="personal" class="col-md-4 flex-column light ui-block-color01 personal" data-animation-origin="right" data-animation-duration="500" data-animation-delay="600" data-animation-distance="100px">
            <div class="padding-30 flex-panel">
               <h3 class="font-accident-two-normal uppercase title">
                  Personal Info
               </h3>
               <div class="dividewhite4"></div>
               <dl class="info">
                  <dt>Name:</dt>
                  <dd>Jorge Alberto Loreto Sanchez</dd>
                  <dt>Age:</dt>
                  <dd>{{floor((time() - strtotime('2000-04-18')) / 31556926)}}</dd>
                  <dt>Address</dt>
                  <dd>Hermosillo, Sonora, Mexico</dd>
                  <dt>Email</dt>
                  <dd>
                     <a href="mailto:jaloreto@hotmail.com">jaloreto@hotmail.com</a>
                  </dd>
               </dl>
            </div>
         </div>
         <!-- /Personal Details -->
      </div>
      <!-- /Personal Section -->
   </section>
   <section class="container-fluid" data-section="home">
      <!-- Professional Section -->
      <div class="row flex-row">
         <div id="pro-experience" class="col-md-4 flex-column dark nopadding ui-block-color02" data-animation-origin="bottom" data-animation-duration="300" data-animation-delay="800" data-animation-distance="200px">
            <div class="padding-50 flex-panel">
               <h3 class="font-accident-two-normal uppercase title">
                  Employment
               </h3>
               <div class="dividewhite4"></div>
               <div class="experience">
                  <ul>
                     <li class="date">08/2018 - present</li>
                     <li class="company uppercase">
                        <a>
                           GascaTec
                        </a>
                     </li>
                     <li class="position">Intern</li>
                  </ul>
                  <!--<ul>
                     <li class="date">08/2016 - 08/2018</li>
                     <li class="company uppercase">
                        <a>
                           Washington State Ferries
                        </a>
                     </li>
                     <li class="position">Software Engineer</li>
                  </ul>-->
                  <ul>
                     <li class="date">06/2014 - 08/2016</li>
                     <li class="company uppercase">
                        <a>
                           Ter&aacute;n Technology Solutions, LLC
                        </a>
                     </li>
                     <li class="position">Intern</li>
                  </ul>
                  <!--<ul>
                     <li class="date">04/2012 - 06/2014</li>
                     <li class="company uppercase">
                        <a>
                           Student Affairs Systems Group
                        </a>
                     </li>
                     <li class="position">Junior Developer</li>
                  </ul>-->
               </div>
               <a href="{{route('resume.index')}}" class="btn btn-wh-trans btn-xs">Learn More</a>
               <div class="dividewhite1"></div>
            </div>
         </div>
         <div class="col-md-8 flex-column nopadding ui-block-color03" data-section="progress" data-animation-origin="right" data-animation-duration="400" data-animation-delay="1100" data-animation-distance="200px">
            <div class="padding-50 flex-panel skills">
               <h3 class="font-accident-two-normal uppercase title">
                  Professional Skills
               </h3>
               <div class="dividewhite1"></div>
               <div class="row">
                  <div class="dividewhite2"></div>
                  <div class="col-md-4">
                     <h3 class="uppercase font-regular-bold hidden-md hidden-xl">
                        Web Development
                     </h3>
                     <h4>.NET Platform</h4>
                     <hr />
                     <h4>Laravel</h4>
                     <hr />
                     <h4>RESTful Services</h4>
                     <hr />
                     <h4>Full-Stack Development</h4>
                     <hr />
                     <h4>SQL</h4>
                     <div class="dividewhite3"></div>
                  </div>
                  <div class="col-md-4">
                     <h3 class="uppercase font-regular-bold hidden-md hidden-xl">
                        Mobile Applications
                     </h3>                    
                     <h4>Android</h4>
                     <div class="dividewhite3"></div>
                  </div>
                  <div class="col-md-4">
                     <h3 class="uppercase font-regular-bold hidden-md hidden-xl">
                        Software Engineering
                     </h3>
                     <h4>Algorithms</h4>
                     <hr />
                     <h4>Data Structures</h4>
                     <hr />
                     <h4>Unit Testing</h4>
                     <hr />
                     <h4>Object Oriented Principles</h4>
                     <hr />
                     <h4>Agile Development</h4>
                     <div class="dividewhite3"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /Professional Section -->
   </section>
</div>
@endsection