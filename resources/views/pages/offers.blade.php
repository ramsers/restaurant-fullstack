@extends('layouts.app')
@section('content')

     <div id="offers-page">
        <div class="content-box">   
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Sign Up to Receive Notifications</h1>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstNameInput">First Name</label>
                                    <input type="text" name="fname" class="form-control" id="firstNamelInput" placeholder="John">
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastNameInput">Last Name</label>
                                    <input type="text" name="lname" class="form-control" id="lastNameInput" placeholder="Doe">
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailInput">Email address</label>
                                    <input type="email" name="email" class="form-control" id="emailInput" placeholder="name@example.com">
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phoneInput">Phone Number</label>
                                    <input type="text" name="phone" class="form-control" id="phoneInput" placeholder="647-718-1846">
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p>In signing this I acknowledge that I am 18 years of age or older, want to receive email offers Billy Burgers and join Dine Rewards.</p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Confirm</button>
                                </div>
                            </div>
                        </div>
                      </form>
                </div>
            </div>
         </div>
    </div>   
@endsection