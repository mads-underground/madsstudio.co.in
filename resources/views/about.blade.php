@extends('layout.main')
@section('header-script')
@stop

@section('content')
  <!-- About us heading-->
  <section id="about_header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h4 class="h4-type3">{{ $title }}</h4>
          <div class="border-bar4 margin-t20 "></div>
        </div>
      </div>
    </div>
  </section>
  <!-- About us heading end-->

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

  @include('widget.client')

@stop

@section('footer-script')
@stop