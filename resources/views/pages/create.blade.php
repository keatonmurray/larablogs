@extends('main.layout')
@section('content')
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Create Post</h1>
                    <span class="subheading">Make something great</span>
                </div>
            </div>
        </div>
    </div>
</header>
     <!-- Main Content-->
     <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST" action="/store">
                    @csrf
                    <div class="form-floating">
                        <input class="form-control" id="title" type="text" placeholder="Enter your title..." data-sb-validations="required" />
                        <label for="title">Post Title</label>
                        <div class="invalid-feedback" data-sb-feedback="title:required">A title is required.</div>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" id="subtext" type="text" placeholder="Enter your subtext..." data-sb-validations="required,subtext" />
                        <label for="subtext">Subtext</label>
                        <div class="invalid-feedback" data-sb-feedback="subtext:required">A subtext is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="subtext:subtext">subtext is not valid.</div>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" id="author" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="author">Author</label>
                        <div class="invalid-feedback" data-sb-feedback="author:required">A author name is required.</div>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" id="editor" placeholder="Write post content here..." style="height: 12rem" data-sb-validations="required"></textarea>
                        <label for="editor"></label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message body is required.</div>
                    </div>
                    <br />
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Post now</button>
                </form>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
            <div class="my-4"></div>
            </div>
        </div>
    </div>
@endsection