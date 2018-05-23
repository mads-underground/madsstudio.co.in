@extends('layout.main')
@section('header-script')
@stop

@section('content')
 <!-- flexslider  -->
  <section id="slider">
    <div class="flexslider flexslide-container">

      <ul class="slides">

        <li style="background-image: url({{ asset('assets/frontend/images/slides/slide1.jpg') }}) ">
          <div class="flex-caption fadeInUp animated container">
            <p class="p-type-1">MULTIPURPOSE HTML5 RESPONSIVE THEME</p>
            <h5 class="h5-type-1 margin-t20">Clean &amp; Modern Design</h5>
            <div class="border-bar margin-t20 "></div>
            <p class="p-type-2 margin-t20 text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
              some form, by injected humour, or randomised words which don't look even slightly believable. If you are going
              to use a passage of Lorem Ipsum.</p>
            <a href="#" class="btn login-btn">GET STARTED</a>
          </div>
        </li>

        <li style="background-image: url({{ asset('assets/frontend/images/slides/slide2.jpg') }})">
          <div class="flex-caption fadeInUp animated container">
            <p class="p-type-1">MULTIPURPOSE HTML5 RESPONSIVE THEME</p>
            <h5 class="h5-type-1 margin-t20">Clean &amp; Modern Design</h5>
            <div class="border-bar margin-t20 "></div>
            <p class="p-type-2 margin-t20 text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
              some form, by injected humour, or randomised words which don't look even slightly believable. If you are going
              to use a passage of Lorem Ipsum.</p>
            <a href="#" class="btn login-btn">GET STARTED</a>
          </div>
        </li>

        <li style="background-image: url({{ asset('assets/frontend/images/slides/slide3.jpg') }})">
          <div class="flex-caption fadeInUp animated container">
            <p class="p-type-1">MULTIPURPOSE HTML5 RESPONSIVE THEME</p>
            <h5 class="h5-type-1 margin-t20">Clean &amp; Modern Design</h5>
            <div class="border-bar margin-t20 "></div>
            <p class="p-type-2 margin-t20 text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
              some form, by injected humour, or randomised words which don't look even slightly believable. If you are going
              to use a passage of Lorem Ipsum.</p>
            <a href="#" class="btn login-btn">GET STARTED</a>
          </div>
        </li>

      </ul>
    </div>
  </section>
  <!-- flexslider end -->

  @include('widget.about-what')

  <!-- features -->
  <section id="features" class="padding-tb100 bg-grey">
    <div class="container">
      <div class="row ">
        <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center margin-tb10">
          <span class="ti-paint-bucket icon-type1"></span>
          <h4 class="h4-type1 margin-t10">Creative Design</h4>
          <p class="p-type-4 color-grey margin-t10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ut alias ullam tempore nobis asperiores quae
            distinctio tempore.
          </p>
        </div>

        <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center margin-tb10">
          <span class="ti-desktop icon-type1"></span>
          <h4 class="h4-type1 margin-t10">Responsive</h4>
          <p class="p-type-4 color-grey margin-t10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ut alias ullam tempore nobis asperiores quae
            distinctio tempore.
          </p>
        </div>

        <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center margin-tb10">
          <span class="ti-pencil-alt icon-type1"></span>
          <h4 class="h4-type1 margin-t10">Well Documented</h4>
          <p class="p-type-4 color-grey margin-t10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum ut alias ullam tempore nobis asperiores quae
            distinctio tempore.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- features end-->



  @include('widget.about-who')

  <!-- services -->
  <section id="services" class="padding-tb100 bg-grey">
    <div class="container">

      <div class="row">

        <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-left margin-tb10">
          <div class="col-md-3 col-xs-3 col-sm-3">
            <span class="ti-star icon-type2"></span>
          </div>
          <div class="col-md-9 col-xs-9 col-sm-9">
            <h4 class="h4-type1 margin-t10">Creative Design</h4>
            <p class="p-type-4 color-grey margin-t10">Lorem ipsum dolor sit amet, consect etur adipis icing elit. Volupt atum ut alias ullam tempore nobis aspe.
            </p>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-left margin-tb10">
          <div class="col-md-3 col-xs-3 col-sm-3">
            <span class="ti-settings icon-type2"></span>
          </div>
          <div class="col-md-9 col-xs-9 col-sm-9">
            <h4 class="h4-type1 margin-t10">Well Documented</h4>
            <p class="p-type-4 color-grey margin-t10">Lorem ipsum dolor sit amet, consect etur adipis icing elit. Volupt atum ut alias ullam tempore nobis aspe.
            </p>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-left margin-tb10">
          <div class="col-md-3 col-xs-3 col-sm-3">
            <span class="ti-medall icon-type2"></span>
          </div>
          <div class="col-md-9 col-xs-9 col-sm-9">
            <h4 class="h4-type1 margin-t10">Responsive Design</h4>
            <p class="p-type-4 color-grey margin-t10">Lorem ipsum dolor sit amet, consect etur adipis icing elit. Volupt atum ut alias ullam tempore nobis aspe.
            </p>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-left margin-tb10">
          <div class="col-md-3 col-xs-3 col-sm-3">
            <span class="ti-announcement icon-type2"></span>
          </div>
          <div class="col-md-9 col-xs-9 col-sm-9">
            <h4 class="h4-type1 margin-t10">SEO Friendly</h4>
            <p class="p-type-4 color-grey margin-t10">Lorem ipsum dolor sit amet, consect etur adipis icing elit. Volupt atum ut alias ullam tempore nobis aspe.
            </p>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-left margin-tb10">
          <div class="col-md-3 col-xs-3 col-sm-3">
            <span class="ti-location-pin icon-type2"></span>
          </div>
          <div class="col-md-9 col-xs-9 col-sm-9">
            <h4 class="h4-type1 margin-t10">Easy Customization</h4>
            <p class="p-type-4 color-grey margin-t10">Lorem ipsum dolor sit amet, consect etur adipis icing elit. Volupt atum ut alias ullam tempore nobis aspe.
            </p>
          </div>
        </div>

        <div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-left margin-tb10">
          <div class="col-md-3 col-xs-3 col-sm-3">
            <span class="ti-filter icon-type2"></span>
          </div>
          <div class="col-md-9 col-xs-9 col-sm-9">
            <h4 class="h4-type1 margin-t10">Clean and Modern</h4>
            <p class="p-type-4 color-grey margin-t10">Lorem ipsum dolor sit amet, consect etur adipis icing elit. Volupt atum ut alias ullam tempore nobis aspe.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- services End -->

  @include('widget.portfolio')

  <!-- testimonial -->
  <section id="testimonial" class="padding-tb100 parallax-testimonial" data-parallax="scroll" data-image-src="{{ asset('assets/frontend/images/parallax-back.jpg') }}"
    data-speed="0.4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="testimonial">
            <ul class="slides text-center">
              <li>
                <p class="testimonial-text">Nulla nec nisi viverra, facilisis nisl in, pulvinar metus. Mauris sit amet ligula blandit, efficitur magna
                  et, hendrerit nisi. Suspendisse dapibus venenatis nunc.</p>
                <div class="border-bar3"></div>
                <h5>John Doe</h5>
                <h6>CEO of Design Company</h6>
              </li>
              <li>
                <p class="testimonial-text">Nulla nec nisi viverra, facilisis nisl in, pulvinar metus. Mauris sit amet ligula blandit, efficitur magna
                  et, hendrerit nisi. Suspendisse dapibus venenatis nunc.</p>
                <div class="border-bar3"></div>
                <h5>John Doe</h5>
                <h6>CEO of Design Company</h6>
              </li>
              <li>
                <p class="testimonial-text">Nulla nec nisi viverra, facilisis nisl in, pulvinar metus. Mauris sit amet ligula blandit, efficitur magna
                  et, hendrerit nisi. Suspendisse dapibus venenatis nunc.</p>
                <div class="border-bar3"></div>
                <h5>John Doe</h5>
                <h6>CEO of Design Company</h6>
              </li>
              <li>
                <p class="testimonial-text">Nulla nec nisi viverra, facilisis nisl in, pulvinar metus. Mauris sit amet ligula blandit, efficitur magna
                  et, hendrerit nisi. Suspendisse dapibus venenatis nunc.</p>
                <div class="border-bar3"></div>
                <h5>John Doe</h5>
                <h6>CEO of Design Company</h6>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </section>
    <!-- testimonial end-->

    @include('widget.client')

@stop

@section('footer-script')
@stop