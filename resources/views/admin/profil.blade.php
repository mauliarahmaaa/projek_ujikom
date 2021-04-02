@extends('template.main')

@section('title')

@section('content')

<div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="{{ asset('style/dist/assets/images/faces/12.jpg') }}"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-subtitle">Admin</h4>
                                    <div class="row text-center justify-content-md-center">
                                </center>

                                <section id="basic-horizontal-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <!-- <div class="card-header">
                                    <h4 class="card-title">Horizontal Form</h4>
                                </div> -->
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>First Name</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="first-name" class="form-control"
                                                            name="fname" placeholder="First Name">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Email</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="email" id="email-id" class="form-control"
                                                            name="email-id" placeholder="Email">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Mobile</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="number" id="contact-info" class="form-control"
                                                            name="contact" placeholder="Mobile">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Password</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="password" id="password" class="form-control"
                                                            name="password" placeholder="Password">
                                                    </div>
                                                    <div class="col-12 col-md-8 offset-md-4 form-group">
                                                        <div class='form-check'>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="checkbox1"
                                                                    class='form-check-input' checked>
                                                                <label for="checkbox1">Remember Me</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </section>
@endsection