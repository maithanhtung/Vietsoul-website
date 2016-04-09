@extends('client_template')
@section('content')

<!-- FAQ start -->
    <section id="services" class="pfblock">
        <div class="container">
            <div class="pfblock-header">
                <h2 class="pfblock-title">FAQs</h2>
                <div class="pfblock-line"></div>
                <div class="pfblock-subtitle">
                    Here you can find regular question & answers.
                </div>
            </div>
            <div class="cbp-qtrotator cbp-qtcontent">
                @foreach ($faqs as $faq)
                    <strong class="pfblock-subtitle">
                    {{ $faq->faq_number }}.<!-- FAQ number: -->
                    {{ $faq->faq_question }}
                    </strong>
                    <p>{{ $faq->faq_answer }} </p>
                @endforeach
            </div>
        </div>
    </section>

<!-- FAQ end -->

<!-- Message start -->

  <section id="message" class="pfblock  pfblock-gray">
    <div class="container">
      <div class="row">

        <div class="col-sm-6 col-sm-offset-3">

          <div class="pfblock-header">
            <h2 class="pfblock-title">Drop us a line</h2>
            <div class="pfblock-line"></div>
            <div class="pfblock-subtitle">
                we'd love to hear from you
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

<!-- Contact info start -->
    <section id="contact" class="pfblock">
        <div class="container">
            <div class="pfblock-header">
                <h2 class="pfblock-title">More traditional methods </h2>
                <div class="pfblock-line"></div>
                <div class="pfblock-subtitle">
                    If submitting an email form isn't your thing, you can also contact us in a few more tried and tested ways.
                </div>
            </div>
            <div class="pfblock-header wow bounceInUp">
                <div class="col-md-12 col-md-4">
                    <i class="icon-screen-smartphone contact-icon"></i>
                    <p>+358 466 143 559</p>
                    <p>9am - 5pm, Mon - Fri</p>
                </div>

                <div class="col-md-12 col-md-4">
                    <i class="icon-directions contact-icon"></i>
                    <p>VietSoul Ltd<p>
                    <p>Ylioppilaantie 4, 90130 Oulu, Finland<p>
                </div>

                <div class="col-md-12 col-md-4">
                    <i class="icon-envelope contact-icon"></i>
                    <p>Customer Support<p>
                    <p>support@vietsoul.vn<p>
                </div>
            </div>
        </div>
    </section>

<!-- Contact info end -->

@stop
