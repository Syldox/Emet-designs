
@extends('layouts.main')
@section('title', '| Home')

@section('content')


    <section id="showcase">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="showcase-left">
              <!-- <img src="img/image1.jpg"> -->
              <img src="img/corsair.png">
          
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="showcase-right">
              <h1>Building a Great-Looking, High Performance System Has Never Been Easier</h1>
              <p>The Graphite Series 600T makes it easy to build a world-class gaming system. With excellent cooling from the dual 200mm fans, eight PCI-E expansion slots to accommodate multiple graphics cards, and plenty of room for large, power-hungry components, the Graphite Series 600T can handle just about anything you can throw at it.</p>
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
            <div class="info-left" style="margin-left: -40px;;">
              <img src="img/msi.png">
              <!-- <img src="img/isma.jpg" class="isma"> -->
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="info-right">
            <h2>MSI-ATX-2600-LGA-1150-Z97-GAMING-5 </h2>
            <p>One of MSI’s main focus points of the last twelve months has been style. This typically means fashioned heatsinks, almost-invisible traces and if possible a reduction of on-the-board components (trying to balance price as well). MSI wants its motherboards to be shown off, rather than hidden inside a case, such that other users can show it off to their friends and perhaps entice them into a similar build. The Gaming 5 aims to the more cost conscious Haswell build while still maintaining a full ATX size in the red and black livery featuring the MSI Gaming logo.</p>
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
              <h2>Welcome</h2>
              <p>My name is Ismaila Sylla, I'm a software engineer, focused on web development and Application industry</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="info-right">
              <h2>Info Block Two</h2>
              <p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              <img src="img/ibrahim.jpg" class="isma" style="margin-left: 100px;">
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