@extends('layouts.cont')

@section('content')
 <!-- Success message -->
 @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
<div class="content">   
    <div class="container">  
    <div class="row justify-content-center">
    <div class="col-md-10">
        
        <div class="row align-items-center">
        <div class="col-lg-7 mb-5 mb-lg-0">

            <h2 class="mb-5">Fill the form. <br> It's easy.</h2>

            <form action="" method="post" id="contactForm" action="{{ route('contact.store') }}" name="contactForm">
                <!-- CROSS Site Request Forgery Protection -->
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-12">
                    <input type="submit" value="send" value="Submit" class="btn btn-primary rounded-0 py-2 px-4">
                    <span class="submitting"></span>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-lg-4 ml-auto">
            <h3 class="mb-4">Let's talk about everything.</h3>
            <p>where alwais open for questions</p>
            </div>
        </div>
        </div>  
        </div>
    </div>
@endsection