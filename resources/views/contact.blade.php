@extends('layouts.web')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Contact</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Contact</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Contact</h5>
                <h1>Contact For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        
                        <input type="hidden" id="csrf" value="{{csrf_token()}}">   
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" name="name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" name="email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="number" class="form-control border-0 p-4" id="contact" placeholder="Contact" required="required" data-validation-required-message="Please enter contact number" name="contact" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message" name="message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.033261550635!2d80.04871827402201!3d23.095878213591043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3981ab8d5af97b8d%3A0xe598f80b7a9ffdc6!2sSai%20coaching%20classes%20barela!5e0!3m2!1sen!2sin!4v1681542248630!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="width: '100%'"></iframe>

@endsection