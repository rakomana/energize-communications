@extends('layouts.app')


@section('content')

<!-- business-area-start -->
<div class="business-area pt-105 pb-110" style="background-image:url(img/insurance/coverImage-01.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="business-wrapper text-black">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- business-area-end -->
        <br>

<section class="sliderdivtext container">

    <div class="textoslider"> 

            <h1 class= "textglow"> GET INSURANCE FOR YOUR PHONE! </h1> 
        </h1>
        <br>
        <p>
        I-Digital Mobile Phone and Gadget Insurance has been designed to provide insurance protection for your electronic devices. The insurance will cover your phone should it be Lost, Stolen or damaged.
        </p>

        <p>
        <h3 style="color:#ac4c7c">Should you wish to add this to your package call us on;</h3>
        </p>
        <p type="number">
        <h1><u>01234 567890</u></h1>
        </p>
    </div>

<div class="slider">
    <ul>
        <li>
<img src= "img/insurance/Phone-stolen-hero.jpg" alt="">
</li>
        <li>
<img src="img/insurance/5d10ffd5e3ecba0ba12427c4.jpg" alt="">
</li>
        <li>
<img src="img/insurance/4891.jpg" alt="">
</li>
        <li>
<img src="img/insurance/mobileandcellphoneaccessories-02.jpg" alt="">
</li>
    </ul>
</div>
</section>
<br>
<br><br>

<section>
<!-- business-area-start -->
<div class="">
			<div class="container">
			<p>Your mobile phone insurance is provided to you directly by i-Digital Insurance, a trading name of 
            i-Partners Insurance Management Limited who are regulated by the Financial Conduct Authority. 
            If you elected to purchase insurance we will send your personal, direct debit and purchase details 
            to i-Digital Insurance who will set up a separate direct debit with your bank and issue the policy to you by email. 
            The policy will be issued with 24 hours upon their receipt of your request. You may cancel the insurance, 
            without giving reason, by sending written notice to the policy administrator and returning the insurance documents 
            within 14 days of it starting or (if later) within 14 days of you receiving the insurance documents. You will receive a 
            full refund of all premium paid provided that no claim has been made and you do not intend to make a claim.

            You have confirmed that you or your business are resident in the UK and you understand and accept that policy documentation 
            and other communications relating to this insurance will only be issued to you by email to the email address you have supplied.
</p>
	
			</div>
		</div>
		<!-- business-area-end -->
        </section>
        <br>

        <div class=" pt-105 pb-110 container" style="background-image:url(img/insurance/smartphone-insurance-plans-squaretrade.png); padding-bottom: 260px; background-repeat: no-repeat; width:100%;">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="business-wrapper text-black">
							
						</div>
					</div>
				</div>
			</div>
		</div>

<style>
.sliderdivitext{
    display: inline-flex;
    background-color: #FBFAE5;
    box-sizing: content-box;
    width: 100%;
}

.textoslider{
    font-size: 1rem;
    letter-spacing: 1px;
    color:rgb(52, 73, 3);
    width: 50%;
    height: 400px;
    float: right;
 }

.tituloslider{
    color: #1B5349 ;
    text-align: center;
    font-size: 2rem;
    font-family: 'Bowlby One SC', cursive;
    letter-spacing: 3px;
}


p {
    font-family: open sans;
    font-size: 1em;
    color:  #1B5349;
    letter-spacing: 1px;
}

.slider {
	width: 45%;
	margin: auto;
    overflow: hidden;
    box-sizing: content-box;
}

.slider ul {
	display: flex;
	padding: 0;
    width: 400%;
    
	animation: cambio 20s infinite alternate linear;
}

.slider li {
    width: 100%;
    list-style: none;
 
}

.slider img {
    width: 100%;
    height: 100%;
    border-radius: 10px;
}

@keyframes cambio {
	0% {margin-left: 0;}
	20% {margin-left: 0;}
	
	25% {margin-left: -100%;}
	45% {margin-left: -100%;}
	
	50% {margin-left: -200%;}
	70% {margin-left: -200%;}
	
	75% {margin-left: -300%;}
	100% {margin-left: -300%;}
}

@media (max-width:600px){
    .slider-portada{
        width: 100%;
        height: 400px;
    }
}
@media (min-width:600px){
 .slider-portada{
     width: 100%;
     height: 400px;
 }   
}

@media(min-width:768px){
.slider-portada {
width: 100%;
height: 420px;
    }
}

@media (min-width:992px){
    .slider-portada{
        width: 100%;
        height: 400px;
    }
}

@media (min-width:1200px){
    .slider-portada{
        width: 100%;
        height: 600px;
    }

    @media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  } 

}
</style>

@endsection