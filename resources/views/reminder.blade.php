@extends('layouts.app')


@section('content')

<style>
body {
  margin: auto;
  background: #eaeaea;  
  font-family: 'Open Sans', sans-serif;
}

.info p {
  text-align:center;
  color: #999;
  text-transform:none;
  font-weight:600;
  font-size:15px;
  margin-top:2px
}

.info i {
  color:#F6AA93;
}
form h1 {
  font-size: 18px;
  background: #252464 none repeat scroll 0% 0%;
  color: rgb(255, 255, 255);
  padding: 22px 25px;
  border-radius: 5px 5px 0px 0px;
  margin: auto;
  text-shadow: none; 
  text-align:left
}

form {
  border-radius: 5px;
  max-width:1000px;
  width:100%;
  margin: 5% auto;
  background-color: #FFFFFF;
  overflow: hidden;
}

p span {
  color: #F00;
}

p {
  margin: 0px;
  font-weight: 500;
  line-height: 2;
  color:#333;
}

h1 {
  text-align:center; 
  color: #ac4c7c;
  text-shadow: 1px 1px 0px #FFF;
  margin:50px 0px 0px 0px
}

input {
  border-radius: 0px 5px 5px 0px;
  border: 1px solid #eee;
  margin-bottom: 15px;
  width: 75%;
  height: 40px;
  float: left;
  padding: 0px 15px;
}

a {
  text-decoration:inherit
}

.form-group {
  overflow: hidden;
  clear: both;
}

.icon-case {
  width: 35px;
  float: left;
  border-radius: 5px 0px 0px 5px;
  background:#eeeeee;
  height:42px;
  position: relative;
  text-align: center;
  line-height:40px;
}

i {
  color:#555;
}

.contentform {
  padding: 40px 30px;
}

.form_button-contact{
  background-color: #fbba42;
  color: #FFF;
  text-align: center;
  width: 100%;
  border:0;
  padding: 17px 25px;
  border-radius: 0px 0px 5px 5px;
  cursor: pointer;
  margin-top: 40px;
  font-size: 18px;
}

.leftcontact {
  width:49.5%; 
  float:left;
  border-right: 1px dotted #CCC;
  box-sizing: border-box;
  padding: 0px 15px 0px 0px;
}

.rightcontact {
  width:49.5%;
  float:right;
  box-sizing: border-box;
  padding: 0px 0px 0px 15px;
}

.validation {
  display:none;
  margin: 0 0 10px;
  font-weight:400;
  font-size:13px;
  color: #DE5959;
}

#sendmessage {
  border:1px solid #fff;
  display:none;
  text-align:center;
  margin:10px 0;
  font-weight:600;
  margin-bottom:30px;
  background-color: #EBF6E0;
  color: #5F9025;
  border: 1px solid #B3DC82;
  padding: 13px 40px 13px 18px;
  border-radius: 3px;
  box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
}

#sendmessage.show,.show  {
  display:block;
}
</style>

<form method="post" action="#" role="form">
{{ csrf_field() }}
	    <h1>Please fill out all information, so that we may better server you!</h1>
	    
    <div class="contentform">
    	<div id="sendmessage"> Your message has been sent successfully. Thank you. </div>

    	<div class="leftcontact">
			      <div class="form-group">
			        <p>First Name<span>*</span></p>
			        <span class="icon-case"><i class="fa fa-male"></i></span>
              <input type="text" name="first_name" class="@error('first_name') is-invalid @enderror" required/>
              
              @error('first_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
       </div> 

            <div class="form-group">
            <p>Last Name <span></span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
            <input type="text" name="last_name" class="@error('last_name') is-invalid @enderror" required/>
            
            @error('last_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
			</div>

			<div class="form-group">
			    <p>E-mail <span>*</span></p>	
			    <span class="icon-case"><i class="fa fa-envelope"></i></span>
          <input type="email" name="email" class="@error('email') is-invalid @enderror" required/>

          @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
			</div>	

			<div class="form-group">
			  <p>Mobile Number<span>*</span></p>
			  <span class="icon-case"><i class="fa fa-home"></i></span>
        <input type="text" name="mobile_number" class="@error('mobile_number') is-invalid @enderror" required/>
        
        @error('mobile_number')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
			</div>

			<div class="form-group">
			  <p>Est Contract Due Date <span>*</span></p>
			  <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
        <input type="text" name="est_contract_due_date" class="@error('est_contract_due_date') is-invalid @enderror" required/>
        
        @error('est_contract_due_date')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
			</div>	
	</div>

	  <div class="rightcontact">	
      <div class="form-group">
			  <p>Company <span></span></p>
			  <span class="icon-case"><i class="fa fa-shopping-bag"></i></span>
        <input type="text" name="company" class="@error('company') is-invalid @enderror"/>
        
        @error('company')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
      </div>
      
			<div class="form-group">
			  <p>Current Spend</p>
			  <span class="icon-case"><i class="fa fa-pound-sign"></i></span>
        <input type="text" name="current_spend" class="@error('current_spend') is-invalid @enderror"/>
        
        @error('current_spend')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
			</div>	

			<div class="form-group">
			  <p>No Of Phones</p>	
			  <span class="icon-case"><i class="fa fa-phone"></i></span>
        <input type="number" min="1" name="no_of_phones" class="@error('no_of_phones') is-invalid @enderror"/>
        
        @error('no_of_phones')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
			</div>

			<div class="form-group">
			  <p>Current Network</p>
			  <span class="icon-case"><i class="fa fa-signal"></i></span>
        <input type="text" name="current_network" class="@error('current_network') is-invalid @enderror"/>

        @error('current_network')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
			</div>

			<div class="form-group">
			  <p>Phone Type <span>*</span></p>	
			  <span class="icon-case"><i class="fa fa-phone"></i></span>
        <input type="text" name="phone_type" class="@error('phone_type') is-invalid @enderror"/>

        @error('phone_type')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
			</div>

  </div>
  </div><br><br>
  <br>
  <h5 style="text-align:center;"><strong><i>NOTE: </i></strong> Submitting will add you to our online marketing campaign, meaning you will get reminders closer to the end of the contract.</h5>   
        <div class="col-md-12">
                        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Captcha</label>
                            <div class="col-md-6 pull-center">
                                {!! app('captcha')->display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div> 

<button type="submit" class="bouton-contact col-md-12 btn btn-success btn-send">Set Reminder</button>
	
</form>	
{!! NoCaptcha::renderJs() !!}



@endsection