@extends('layouts.app')
@section('content')
<!-- Container -->
<div class="content-wrap">
   <div id="contacts" class="inner-content">
      <section id="page-title" class="inner-section ui-menu-orange">
         <div class="container-fluid nopadding">
            <h2 class="font-accident-two-bold" data-animation-origin="right" data-animation-duration="400" data-animation-delay="100" data-animation-distance="50px">
               Contact
            </h2>
            <h4 class="font-accident-two-light uppercase" data-animation-origin="right" data-animation-duration="400" data-animation-delay="200" data-animation-distance="50px">
               Get in touch with me
            </h4>
            <p data-animation-origin="right" data-animation-duration="400" data-animation-delay="300" data-animation-distance="50px">
               There are quite a few ways that you can get in touch with me. Twitter and LinkedIn are your best bet
               if you're trying to get a hold of me but e-mail works as well. I do tend to overanalyze my response so I may be slow to reply.
            </p>
         </div>
      </section>
      <section id="contacts-data" class="inner-block">
         <div class="container-fluid nopadding">
            <div class="dividewhite8"></div>
            <div class="row">
               <div class="col-md-6" data-animation-origin="right" data-animation-duration="500" data-animation-delay="500" data-animation-distance="25px">
                  <div class="row">
                     <div class="col-sm-3">
                        <span class="font-accident-two-bold uppercase">
                           E-Mail:
                        </span>
                     </div>
                     <div class="col-sm-9">
                        <p>terantechsolutions@outlook.com</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3">
                        <span class="font-accident-two-bold uppercase">
                           Phone:
                        </span>
                     </div>
                     <div class="col-sm-9">
                        <p>1 520 333-7329</p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3">
                        <span class="font-accident-two-bold uppercase">
                           Skype:
                        </span>
                     </div>
                     <div class="col-sm-9">
                        <p>@@lteran9</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6" data-animation-origin="right" data-animation-duration="500" data-animation-delay="800" data-animation-distance="25px">
                  <div class="row">
                     <div class="col-sm-3">
                        <span class="font-accident-two-bold uppercase">
                           Twitter:
                        </span>
                     </div>
                     <div class="col-sm-9">
                        <p>
                           <a href="{{env('TWITTER')}}">{{env('TWITTER')}}</a>
                        </p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3">
                        <span class="font-accident-two-bold uppercase">
                           Stack-O:
                        </span>
                     </div>
                     <div class="col-sm-9">
                        <p>
                           <a href="{{env('STACKOVERFLOW')}}">{{env('STACKOVERFLOW')}}</a>
                        </p>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3">
                        <span class="font-accident-two-bold uppercase">
                           Linkedin:
                        </span>
                     </div>
                     <div class="col-sm-9">
                        <p>
                           <a href="{{env('LINKEDIN')}}">{{env('LINKEDIN')}}</a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="dividewhite1"></div>
         </div>
      </section>
      <!-- Google Map Block -->
      <section id="contacts-map" class="inner-section" data-section="map" data-animation-origin="top" data-animation-duration="500" data-animation-delay="500" data-animation-distance="25px">
         <div class="container-fluid nopadding">
            <!-- Google Map -->
            <div>
               <div id="gm-panel">
                  <div id="google-map" class="bigmap"></div>
               </div>
            </div>
            <!-- /Google Map -->
         </div>
         <div class="dividewhite8"></div>
      </section>
      <!-- /Google Map Block -->
   </div>
</div>
@endsection

@section('js')
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtgVtEh8v8RBJxDL1IB2L9Ct0rj2V47gs&callback=initMap" type="text/javascript"></script>
@endsection