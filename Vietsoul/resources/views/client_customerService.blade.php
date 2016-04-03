@extends('client_template')
@section('content')

<!-- FAQ start -->
    <div class="container">
        <div class="pfblock-header">
            <h2 class="pfblock-title">FAQ</h2>
            <div class="pfblock-line"></div>
            <div class="pfblock-subtitle">
              bla bla
            </div>
          </div>
        <div class="cbp-qtrotator cbp-qtcontent">
         @foreach ($faqs as $faq)
           <!-- FAQ number: --> {{ $faq->faq_number }}.
            FAQ question: {{ $faq->faq_question }}
            <br>
           FAQ answer: {{ $faq->faq_answer }}
            <br>
            <br>
              @endforeach
        </div>
        <br>
    </div>
<!-- FAQ end -->


<!-- Contact start -->

  <section id="contact" class="pfblock">
    <div class="container">
      <div class="row">

        <div class="col-sm-6 col-sm-offset-3">

          <div class="pfblock-header">
            <h2 class="pfblock-title">Drop me a line</h2>
            <div class="pfblock-line"></div>
            <div class="pfblock-subtitle">
              bla bla
            </div>
          </div>

        </div>

      </div><!-- .row -->

      <div class="row">

        <div class="col-sm-6 col-sm-offset-3">

          {!! Form::open(array('route' => 'postMessage', 'id' => 'contact-form', 'role' => 'form')) !!}
            <div class="ajax-hidden">
              <div class="form-group wow fadeInUp">
                <label class="sr-only" for="c_name">Name</label>
                <input type="text" id="c_name" class="form-control" name="name" placeholder="Name">
              </div>

              <div class="form-group wow fadeInUp" data-wow-delay=".1s">
                <label class="sr-only" for="c_email">Email</label>
                <input type="email" id="c_email" class="form-control" name="email" placeholder="E-mail">
              </div>

              <div class="form-group wow fadeInUp" data-wow-delay=".2s">
                <textarea class="form-control" id="c_message" name="content" rows="7" placeholder="Message"></textarea>
              </div>

              <input value="Send Message" type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">
            </div>
            <div class="ajax-response"></div>
          {!! Form::close() !!}

        </div>

      </div><!-- .row -->
    </div><!-- .container -->
  </section>

  <!-- Contact end -->

<!-- CallToAction start --  >
   <!-- <section class="calltoaction">
    <div class="container">

      <div class="row">

        <div class="col-md-12 col-lg-12">
          <h2 class="wow slideInRight" data-wow-delay=".1s">ARE YOU READY TO START?</h2>
          <div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
           abcsejfbne
          </div>
        </div>

        <div class="col-md-12 col-lg-12 calltoaction-btn wow slideInRight" data-wow-delay=".3s">
          <a href="#contact" class="btn btn-lg">abc</a>
        </div>

      </div>
    </div>
  </section> -->

  <!-- CallToAction end -->

  <!-- <br>
    <h3>Drop us a line :</h3>
    <br>
         <div class="container">
            {!! Form::open(array('route' => 'postMessage')) !!}
             <table style="width:100%; text-align:left;">
                <tr>
                  <th></th>
                  <th></th>
                </tr>
           <tr>
             <td>Name: </td>
             <td> {!! Form::input('string', 'name') !!}</td>
          </tr>

            <tr>
             <td>Mail :</td>
             <td>{!! Form::input('string', 'email') !!}</td>
           </tr>

           <tr>
             <td> Content :</td>
             <td> {!! Form::input('string', 'content') !!}</td>
          </tr>

              </table>
       <br>
            {!! Form::submit('Send') !!}

            {!! Form::close() !!}

        </div> -->
@stop
