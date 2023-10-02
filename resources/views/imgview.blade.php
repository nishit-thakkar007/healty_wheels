<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table th, td{
            
  border-radius: 10px;
  padding: 15px;
  text-align: center;
        }
        .btn{
            border-radius:10%;
                border: none;
                cursor: pointer;
        }
        .btn:hover{
            border-radius:10%;
                border: none;
                cursor: pointer;
                opacity:0.7;
                   
        }
        .pname{
            z-index:50px;
            font-family:cursive;
        }

        .box-d{
            width:100%;
            height:500px;
            background-image:url('/lowcarebg.jpg');
            /* background-position: center; */
            background-size: cover;
        }
        .wave1{
                position:absolute;
                top:450px;
                left:0;
                width:100%;
                height:100px;
                background:url("/wave.png");
                background-size:1000px 100px;
                animation: mymove 30s linear infinite;
                z-index:1000;
                opacity:1;
                animation-delay:0s;
                bottom:0; 
}

@keyframes mymove {
  0%   {background-position-x:0;}
  100% {  background-position-x :1000px;}
}
                 .wave2{
                position:absolute;
                top:450px;
                left:0;
                width:100%;
                height:100px;
                background:url("/wave.png");
                background-size:1000px 100px;
                animation: mymove2 10s linear infinite;
                z-index:999;
                opacity:0.5;
                animation-delay:-5s;
                bottom:10px; 
}
@keyframes mymove2 {
  0%   {background-position-x:0;}
  100% {  background-position-x :-1000px;}
} 
                .wave3{
                position:absolute;
                top:450px;
                left:0;
                width:100%;
                height:100px;
                background:url("/wave.png");
                background-size:1000px 100px;
                animation: mymove3 5s linear infinite;
                z-index:990;
                opacity:0.2;
                animation-delay:-10s;
                bottom:20px; 
}
@keyframes mymove3 {
  0%   {background-position-x:0;}
  100% {  background-position-x :1000px;}
} 
        </style>
</head>
<body>
<div class="here"></div>
        <div class="wave1"></div>
        <div class="wave2"></div>
        <div class="wave3"></div>
       <br><br><center><p style="font-size:50px;font-family:sans-serif"><b>Make Your choice</b></p></center>
       <center><p style="font-size:20px;font-family:sans-serif;color:grey;">Not all houseplants were created equal - did you know many species positively thrive in low natural <br>light conditions? Brighten up the shadiest spots of your home or office with these varieties which will stay happy and <br>actually grow faster and stronger when they have less light to work with.</p></center><br><br><br>
    <table >
        <tbody>
            <tr>
    <table>
        <tbody>
            <th>product</th>
            <th>price</th>
            <th>img</th>
            @foreach($allimg as $rec)
                <tr>
                    <td><img src="{{asset('upload/gallery/'.$rec['img'])}}" height='100px' width='100px' style="border-radius:20px"></td>
                    <td>{{$rec->product}}</td>
                    <td>{{$rec->price}}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> 











