@extends('user/app')
@section('bg-img', asset('user/img/qns.jpg'))
@section('title', 'ManurerLift')
@section('sub-title', 'Contact')
@section('main-content')
 <!-- Main Content -->
  <div class="container">
    <div class="row">
    	<div class="col-lg-6 col-md-10 mx-auto">
    		<h3>Contact Us</h3>
    		<p><i class="fas fa-address-book" aria-hidden="true"></i> Address: Sylhet, Bangladesh</p>
    		<p><i class="fas fa-phone" aria-hidden="true"></i> Phone: 013432423</p>
    		<p><i class="fas fa-envelope" aria-hidden="true"></i> Mail: manuerlift@gmail.com</p>
    		<hr>
    		<div class="mapouter">
    			<div class="gmap_canvas">
    			<iframe width="500" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=sylhet%20International%20University&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2torrentz.net"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:500px;}</style>
    		</div>
    	</div>
      <div class="col-lg-6 col-md-10 mx-auto">
        <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
        <hr>
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        @if(session()->has('success'))
		    <div class="alert alert-success">
		        {{ session()->get('success') }}
		    </div>
		@endif
        <form name="sentMessage" id="contactForm" novalidate method="post" action="{{route('usercontact.store')}}">
        	{{csrf_field()}}
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Name</label>
              <input type="text" class="form-control" name="name" id="name" required placeholder="Enter Your Name" data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email Address</label>
              <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address." placeholder="Enter Your Mail">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Phone Number</label>
              <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number." placeholder="Enter Your Phone Number">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Message</label>
              <textarea rows="5" class="form-control" name="message" id="message" required data-validation-required-message="Please enter a message." placeholder="Type message"></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
        </form>
      </div>
    </div>
  </div>
  <hr>
@endsection