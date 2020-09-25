<!DOCTYPE html>
<html lang="en">

<!--[if IE 9]>
    <html class="ie9" lang="en">    
<![endif]-->
<!--[if IE 8]>
    <html class="ie8" lang="en">    
<![endif]-->

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />

   <title>Resume | Luis A Ter&aacute;n</title>

   <meta name="description" content="TBD">
   <meta name="keywords" content="TBD">
   <meta name="author" content="lteran">

   <!-- Preloader -->
   <link href="{{asset('css/preloader.css')}}" rel="stylesheet" type="text/css" media="screen" />

   <!-- CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" media="screen">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen" />
   <link href="{{asset('css/flaticon.css')}}" rel="stylesheet" type="text/css" media="screen" />
   <link href="{{asset('css/hover-min.css')}}" rel="stylesheet" type="text/css" media="screen" />
   <link href="{{asset('css/magnific-popup.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
   <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" media="screen" />

   <!-- Custom styles -->
   <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="screen" />
   <link href="{{asset('css/samuel.css')}}" rel="stylesheet" type="text/css" media="screen" />
</head>

<body id="samuel" class="boxed">
   <!--Pre-Loader-->
   <div id="preloader"></div>
   <!--/Pre-Loader-->
   <header>
      <nav class="container-fluid nopadding default-nav">
         <div class="row nopadding ident e-bg-light-texture">
            <!-- Photo -->
            <a href="{{route('home.index')}}">
               <div class="col-md-4 vc-photo photo-01">&nbsp;</div>
            </a>
            <!-- /Photo -->
            <div class="col-md-8 vc-name nopadding">
               <!-- Name -->
               <div class="row nopadding name">
                  <div class="col-md-10 name-title">
                     <h1 class="font-accident-two-light uppercase">
                        Luis
                        <span class="hidden-xs">Antonio</span>
                        Ter&aacute;n
                     </h1>
                  </div>
                  <div class="col-md-2 nopadding name-pdf">
                     <a href="{{Storage::url('LuisATeran_Resume.docx')}}" class="hvr-sweep-to-right">
                        <i class="flaticon-download149" title="Download CV"></i>
                     </a>
                  </div>
               </div>
               <!-- /Name -->
               <!-- Position -->
               <div class="row nopadding position hidden-xs">
                  <div class="col-md-10 position-title">
                     <section class="cd-intro">
                        <h2 class="cd-headline clip is-full-width font-accident-two-light uppercase">
                           <span>Experienced </span>
                           <span class="cd-words-wrapper">
                              <b class="is-visible">UI/UX Designer</b>
                              <b>Solutions Architect</b>
                              <b>iOS Programmer</b>
                              <b>Dev Ops Engineer</b>
                              <b>Full Stack Developer</b>
                           </span>
                        </h2>
                     </section>
                  </div>
                  <div class="col-md-2 nopadding pdf">
                     <a href="{{env('GITHUB')}}" class="hvr-sweep-to-right">
                        <i class="fa fa-github" title="My GitHub Page"></i>
                     </a>
                  </div>
               </div>
               <!-- /Position -->
               <!-- Main Navigation -->
               <ul id="nav" class="row nopadding cd-side-navigation">
                  <li class="col-xs-4 col-sm-2 nopadding menuitem ui-menu-green" data-animation-duration="1000" data-animation-delay="100">
                     <a href="{{route('home.index')}}" class="hvr-sweep-to-bottom">
                        <i class="flaticon-insignia"></i><span>home</span>
                     </a>
                  </li>
                  <li class="col-xs-4 col-sm-2 nopadding menuitem ui-menu-blue" data-animation-duration="1000" data-animation-delay="300">
                     <a href="{{route('resume.index')}}" class="hvr-sweep-to-bottom">
                        <i class="flaticon-graduation61"></i><span>resume</span>
                     </a>
                  </li>
                  <li class="col-xs-4 col-sm-2 nopadding menuitem ui-menu-purple" data-animation-duration="1000" data-animation-delay="500">
                     <a href="{{route('portfolio.index')}}" class="hvr-sweep-to-bottom">
                        <i class="flaticon-book-bag2"></i><span>portfolio</span>
                     </a>
                  </li>
                  <li class="col-xs-4 col-sm-2 nopadding menuitem ui-menu-orange" data-animation-duration="1000" data-animation-delay="700">
                     <a href="{{route('contacts.index')}}" class="hvr-sweep-to-bottom">
                        <i class="flaticon-placeholders4"></i><span>contact</span>
                     </a>
                  </li>
                  <li class="col-xs-4 col-sm-2 nopadding menuitem ui-menu-red" data-animation-duration="1000" data-animation-delay="900">
                     <a href="{{route('feedback.index')}}" class="hvr-sweep-to-bottom">
                        <i class="flaticon-earphones18"></i><span>feedback</span>
                     </a>
                  </li>
                  <li class="col-xs-4 col-sm-2 nopadding menuitem ui-menu-yellow" data-animation-duration="1000" data-animation-delay="1100">
                     <a href="{{route('blog.index')}}" class="hvr-sweep-to-bottom">
                        <i class="flaticon-pens15"></i><span>blog</span>
                     </a>
                  </li>
               </ul>
               <!-- /Main Navigation -->
            </div>
         </div>
      </nav>
   </header>

   @yield('content')

   <footer class="padding-50 dark bg-color-dark" data-animation-origin="top" data-animation-duration="500" data-animation-delay="800" data-animation-distance="50px">
      <div class="container-fluid nopadding">
         <div class="row">
            <div class="col-sm-3">
               <h5 class="font-accident-two-bold uppercase">
                  Winston Churchill -
               </h5>
               <p class="inline-block">
                  "Employ your time in improving yourself by other men’s writings so that you shall come easily by
                  what others have labored hard for."
               </p>
               <div class="divider-dynamic"></div>
            </div>
            <div class="col-sm-3 cv-link">
               <h5 class="font-accident-two-bold uppercase">
                  Download CV
               </h5>
               <div class="dividewhite1"></div>
               <a href="{{Storage::url('LuisATeran_Resume.docx')}}">
                  <i class="fa fa-long-arrow-down" aria-hidden="true"></i>English
               </a>
               <a href="{{Storage::url('LuisATeran_Resume_DE.docx')}}">
                  <i class="fa fa-long-arrow-down" aria-hidden="true"></i>German
               </a>
               <a href="{{Storage::url('LuisATeran_Resume_ES.docx')}}">
                  <i class="fa fa-long-arrow-down" aria-hidden="true"></i>Spanish
               </a>
               <div class="divider-dynamic"></div>
            </div>
            <div class="col-sm-3">
               <h5 class="font-accident-two-bold uppercase">
                  Newsletter
               </h5>
               <div class="dividewhite1"></div>
               <form id="newsletter" action="{{route('newsletter.subscribe')}}" method="post">
                  @csrf

                  <div class="form-errors small"></div>

                  <div class="form-group">
                     <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required />
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-block btn-default">Subscribe</button>
                  </div>
               </form>
               <div class="divider-dynamic"></div>
            </div>
            <div class="col-sm-3">
               <h5 class="font-accident-two-bold uppercase">
                  Follow me
               </h5>
               <div class="follow">
                  <ul class="list-inline social">
                     <li>
                        <a target="_blank" href="{{env('STACKOVERFLOW')}}">
                           <i class="fa fa-stack-overflow"></i>
                        </a>
                     </li>
                     <li>
                        <a target="_blank" href="{{env('TWITTER')}}">
                           <i class="fa fa-twitter"></i>
                        </a>
                     </li>
                     <li>
                        <a target="_blank" href="{{env('LINKEDIN')}}">
                           <i class="fa fa-linkedin"></i>
                        </a>
                     </li>
                     <li>
                        <a target="_blank" href="{{env('GITHUB')}}">
                           <i class="fa fa-github"></i>
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="divider-dynamic"></div>
            </div>
         </div>
         <div class="dividewhite1"></div>
         <div class="row">
            <div class="col-md-12 copyrights">
               <p>&copy; {{date('Y')}} Ter&aacute;n Technology Solutions, LLC</p>
            </div>
         </div>
      </div>
   </footer>

   <!-- Back to Top -->
   <div id="back-top"></div>
   <!-- /Back to Top -->

   <!-- JS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
   </script>
   <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
   <script src="https://unpkg.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>
   <script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>

   <script src="{{asset('js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('js/progressbar.min.js')}}" type="text/javascript"></script>

   <script src="{{asset('js/jquery.counterup.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('js/jquery.pjax.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('js/owl.carousel.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('js/headlines.min.js')}}" type="text/javascript"></script>
   @yield('js')

   <!-- Custom scripts -->
   <script src="{{asset('js/animation.js')}}" type="text/javascript"></script>
   <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
</body>

</html>