@extends('layouts.app')
@section('content')
<!-- Container -->
<div class="content-wrap">
    <div id="feedback" class="inner-content">
        <section id="page-title" class="inner-section ui-menu-red">
            <div class="container-fluid nopadding">
                <h2 class="font-accident-two-bold" data-animation-origin="right" data-animation-duration="400"
                    data-animation-delay="100" data-animation-distance="50px">
                    Feedback
                </h2>
                <h4 class="font-accident-two-light uppercase" data-animation-origin="right"
                    data-animation-duration="400" data-animation-delay="200" data-animation-distance="50px">
                    Got some constructive criticism?
                </h4>
                <p data-animation-origin="right" data-animation-duration="400" data-animation-delay="300"
                    data-animation-distance="50px">
                    Feel free to use the form below to write me a message, concern, or feedback. I will attempt to get
                    back to you as soon as possible. If you are interested in my services or portfolio please refer to
                    <a href="https://teran.tech/" target="_new">https://teran.tech/</a> as you may find additional
                    information
                    regarding your inquiry.
                </p>
            </div>
        </section>
        <!-- Feedback Block -->
        <section class="inner-section feedback feedback-light" data-section="feedback">
            <div class="container-fluid nopadding">
                <div class="row">
                    <div class="" data-animation-origin="top" data-animation-duration="500" data-animation-delay="400"
                        data-animation-distance="25px">
                        <div class="dividewhite2"></div>
                        <h3 class="font-accident-two-normal uppercase text-center">
                            Drop Me a Line
                        </h3>
                    </div>
                    <div class="col-md-2">&nbsp;</div>
                    <div class="col-md-8 e-centered" data-animation-origin="top" data-animation-duration="500"
                        data-animation-delay="600" data-animation-distance="25px">
                        <div class="dividewhite4"></div>
                        <div id="form-messages"></div>
                        <form id="ajax-contact" method="post" action="{{route('feedback.send')}}" class="wpcf7-form">
                            @csrf

                            <div class="field">
                                <input type="text" id="name" name="name" placeholder="Name" required />
                            </div>
                            <div class="field">
                                <input type="email" id="email" name="email" placeholder="Email" required />
                            </div>
                            <div class="field">
                                <textarea id="message" name="message" placeholder="Message" rows="7" cols="30"
                                    required></textarea>
                            </div>
                            <div class="dividewhite2"></div>
                            <div class="field text-center">
                                <button type="submit" class="btn btn-lg btn-darker">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2">&nbsp;</div>
                    <div class="col-md-12 divider-dynamic"></div>
                </div>
            </div>
            <div class="dividewhite6"></div>
        </section>
        <!-- /Feedback Block -->
        <!-- Testimonials Block -->
        <section id="testmonials" class="inner-section bg-color02" data-animation-origin="top"
            data-animation-duration="500" data-animation-delay="500" data-animation-distance="25px">
            <div class="container-fluid nopadding">
                <h3 class="font-accident-two-normal uppercase text-center">
                    Testimonials
                </h3>
                <h4 class="font-accident-two-normal uppercase text-center subtitle">
                    Words of encouragement from business partners and clients
                </h4>
                <div class="dividewhite4"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-xs-3">
                                <img src="{{asset('images/userpic00.jpg')}}" alt="Rachel James Johnes"
                                    class="img-responsive img-circle author-userpic">
                            </div>
                            <div class="col-xs-9">
                                <h5 class="font-accident-two-bold text-left uppercase">Rachel James Jones</h5>
                                <p class="small hovercolor">Fashionista Unl.</p>
                                <p class="text-justify small">
                                    Upfront and on time would be the best two words to describe Ter&aacute;n Tech. They
                                    go above and beyond with every challenge.
                                </p>
                            </div>
                        </div>
                        <div class="divider-dynamic"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-xs-3">
                                <img src="{{asset('images/userpic03.jpg')}}" alt="Roy Dickerson"
                                    class="img-responsive img-circle author-userpic">
                            </div>
                            <div class="col-xs-9">
                                <h5 class="font-accident-two-bold text-left uppercase">Roy Dickerson</h5>
                                <p class="small hovercolor">Altheight Studios</p>
                                <p class="text-justify small">
                                    Outsourcing our studio's website was scary at first. We weren't sure what to expect
                                    but after engaging Ter&aacute;n Tech for this endeavor all of our fears vanished.
                                    They are true professionals with exceptional attention to detail.
                                </p>
                            </div>
                        </div>
                        <div class="divider-dynamic"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-xs-3">
                                <img src="{{asset('images/userpic04.jpg')}}" alt="Sebastian Romm"
                                    class="img-responsive img-circle author-userpic">
                            </div>
                            <div class="col-xs-9">
                                <h5 class="font-accident-two-bold text-left uppercase">Sebastian Romm</h5>
                                <p class="small hovercolor">Romm Marketing Co.</p>
                                <p class="text-justify small">
                                    I know I can count on Ter&aacute;n Tech to deliver a fresh take on every project we
                                    work on together. Truly a pleasure to work with.
                                </p>
                            </div>
                        </div>
                        <div class="divider-dynamic"></div>
                    </div>
                </div>
                <div class="dividewhite6"></div>
            </div>
        </section>
        <!-- /Testimonials Block -->
    </div>
</div>
@endsection