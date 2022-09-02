@extends('layout')
@section('content')
<style>
body {
    background-image: linear-gradient(to left top, #051937, #004d7a, #008793, #00bf72, #a8eb12);
    display: flex;
    padding-top: auto;
    padding-bottom: auto;
    background-color: #FF69B4;
    align-items: center;
    justify-content: flex-end;
    flex-direction: column;
    box-shadow: 0px 6px 12px rgba(0,0,0,0.15);
    button: center;
    h1: center;
    h3: center;
    img: center;
}
nav{
    background-size: cover;
    background-color: pink;
}

button {
    appearance: none;
    border: none;
    outline: none;
    background: none;
    color: red;
    font-family:Lucida Handwriting;
    padding-left: 150px;
}

.app {
    display: flex;
    flex-direction: column;
    height: 100vh;
    align-items: center;
}

h1 {
    color: #FFF;
    text-transform: uppercase;
    text-align: center;
    margin-top: 50px;
}

h3 {
    color: #FFF;
    text-align: center;
    margin-top: 20px;
}

#message_form {
    display: flex-container;
}

</style>
<body>
    <div class="app">
        <header>
            <img src="{{asset('images\MultiChat.jpg')}}" alt="" class="img-fluid" style="margin-left:50px; margin-top:30px;">
        <h1 style="font-family:Lucida Handwriting;">Start Chatting!</h1>
        <h3 style="font-family:Lucida Handwriting;">-----Connecting People-----</h3>

<form id="message_form"></form>
<button type="submit">Send Message</button>
 </div> 
 </header> 
</body>
@endsection('content')