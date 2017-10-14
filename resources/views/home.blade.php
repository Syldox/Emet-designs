
@extends('layouts.main')
@section('title', '| Home')

@section('content')


    <section id="showcase">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="showcase-left">
              <img src="img/image1.jpg">
          
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="showcase-right">
              <h1>Hands-free help from the Google Assistant</h1>
              <p>Google Home voice-activated speaker.consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
            <br>
            <a class="btn btn-default btn-lg showcase-btn">Read More</a>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonial">
      <div class="container">
        <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud"</p>
        <p class="customer">- John Doe</p>
      </div>
    </section>

    <section id="info1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="info-left">
              <img src="img/image2.png">
              <!-- <img src="img/isma.jpg" class="isma"> -->
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="info-right">
              <h2>Get To Know Google Home</h2>
              <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              <br>
              <a class="btn btn-default btn-lg">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr>
    <section id="info2">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="info-left">
            <img src="img/isma.jpg" class="isma">
              <h2>Info Block One</h2>
              <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="info-right">
              <h2>Info Block Two</h2>
              <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              <img src="img/isma.jpg" class="isma" style="margin-left: 100px;">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="info-left">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5">
          <form action="{{url('contact')}}" method="POST">
          {{csrf_field()}}
          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="email">
                          Email Address</label>
                      <div class="input-group">
   <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
   </span>
                          <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" name="email"/></div>
                  </div>
                  <div class="form-group">
                      <label for="subject">
                          Subject</label>
                      <select id="subject" name="subject" class="form-control" required="required">
                          <option value="na" selected="">Choose One:</option>
                          <option value="service">General Customer Service</option>
                          <option value="suggestions">Suggestions</option>
                          <option value="product">Product Support</option>
                      </select>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="name">
                          Message</label>
                      <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                  </div>
              </div>
              <div class="col-md-12">
                  <button type="submit" class="btn btn-warning pull-right" id="btnContactUs" style="background-color: #03080f">
                      Send Message</button>
              </div>
          </div>
      </form>
          </div>
          <div class="col-md-7 col-sm-7">

          </div>
        </div>
      </div>
    </section>

    

    @endsection