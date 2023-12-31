@extends('layout.master')
@section('title','Thankyou')

	@section('content')
<style>
  *{
  box-sizing:border-box;
  }
.wrapper-1{
  width:100%;
  height:100vh;
  display: flex;
  flex-direction: column;
}
.wrapper-2{
  padding :30px;
  text-align:center;
}
h1{
  font-family: 'Kaushan Script', cursive;
  font-size:4em;
  letter-spacing:3px;
  color:#5892F;
  margin:0;
  margin-bottom:20px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#aaa;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.go-home{
  color:#fff;
  background:#FBA504;
  border:none;
  padding:10px 50px;
  margin:30px 0;
  border-radius:30px;
  text-transform:capitalize;
  box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
}
.footer-like{
  margin-top: auto; 
  background:#D7E6FE;
  padding:6px;
  text-align:center;
}
.footer-like p{
  margin:0;
  padding:4px;
  color:#5892FF;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.footer-like p a{
  text-decoration:none;
  color:#5892FF;
  font-weight:600;
}

@media (min-width:360px){
  h1{
    font-size:4.5em;
  }
  .go-home{
    margin-bottom:20px;
  }
}

@media (min-width:600px){
  .content{
  max-width:1000px;
  margin:0 auto;
}
  .wrapper-1{
  height: initial;
  max-width:620px;
  margin:0 auto;
  margin-top:50px;
  box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
}
  
}
</style>
<br><br><br><br><br><br>
<div class="content " >
  <div class="wrapper-1" >
    <div class="wrapper-2">
      <h1>Thank you !</h1>
      <p>Your order has been successfully placed.</p>
      <br>
      <a style="color: white" class="go-home" href="{{route('home')}}" >
      go home
      </a>
    </div>
</div>
</div>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">
  @endsection
