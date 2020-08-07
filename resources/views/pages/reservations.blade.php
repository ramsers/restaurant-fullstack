@extends('layouts.app')

@section('content')
     <div id="waitlist-page">
        <div class="content-box">   
            <div class="row">
                <div class="col-md-12">
                    <h1>Get On The List</h1>
                    <form>
                      <div class="form-group">
                        <label for="firstNameInput">First Name</label>
                        <input type="text" name="fname" class="form-control" id="firstNameInput" placeholder="John">
                      </div>
                      <div class="form-group">
                        <label for="lastNameInput">Last Name</label>
                        <input type="text" name="lname" class="form-control" id="lastNameInput" placeholder="Doe">
                      </div>
                        <div class="form-group">
                          <label for="emailInput">Email address</label>
                          <input type="email" name="email" class="form-control" id="emailInput" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="phoneInput">Phone Number</label>
                            <input type="text" name="phone" class="form-control" id="phoneInput" placeholder="647-718-1846">
                          </div>
                        <div class="form-group">
                          <label for="guestsInput">How Many Guests</label>
                          <select class="form-control" name="guests" id="exampleFormControlSelect1">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="timeInput">What Time?</label>
                          <select class="form-control" name="time" id="timeInput">
                            <option value="6">6:00pm</option>
                            <option value="7">7:00pm</option>
                            <option value="8">8:00pm</option>
                            <option value="9">9:00pm</option>
                            <option value="10">10:00pm</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </div>
                      </form>
                </div>
                <div class="col-md-6">
                    <p>Please note this is a reservation. If no reservations are available you will be added to the current waitlist. You may have a short wait once you arrive we will prepare your table.</p>
                </div>
            </div>
         </div>
    </div>   
    
@endsection