<!-- <div style="height:800px;width:1200px;box-shadow:2px 5px 20px grey;border-radius:30px;margin-left:400px;">
    
    
    
    
    <div style="width:250px;display:flex;margin-left:800px;">
<p style="font-family:sans-serif;font-size:15px;color:grey;margin-top:-400px;"><b>
{{$rec->name}}
</b></sp>
<div style="width:250px;margin-left:500px;"> 
<p style="font-family:sans-serif;font-size:15px;color:grey;margin-top:-320px;"></p>
</div>
</div>
</div> -->
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style="background:url('/openprod.jpg');background-size:2100px 950px;">
<div class="height d-flex justify-content-center align-items-center" style="margin-top:200px;">
    
    <div class="card p-3" style="width:30%">
        
        <div class="d-flex justify-content-between align-items-center ">
            <div class="mt-2">
            <h4 class="text-uppercase" style="font-size:30px;margin-left:180px;" >My Profile</h4><br><br>
                <h4 class="text-uppercase" style="font-size:20px;" >Name: {{$rec->name}}</h4>
                <div class="mt-5">
                    <h5 class="text-lowercase mb-0" style="color:green;font-size:15px;"><b>Email:</b>{{$rec->email}}</h5>
                <br><br>
                    <div class="d-flex flex-row user-ratings">
                        <div class="ratings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        </div>
                        <div class="text-uppercase mb-0" style="width:300px">Address: {{$rec->address}}</div> 
                    </div>
                    
                </div>
                <br><br>
                
            </div>
            <div class="image">
            <!-- <img src="{{ asset('upload/gallery/'.$rec->img)}}" height='400px' width='400px'>  -->
            </div>
        </div>
        
        <div class="d-flex justify-content-between align-items-center mt-2 mb-2">
            
            <div class="colors">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        </div>
        
        
        
        <center><div height="20px">
        <a href="{{url('proedit/'.$rec->id)}}" class="btn btn-success" style="width:200px">Update</a>
    
        <a href="/dashboard" class="btn btn-success" style="width:200px">Back</a></div></center>
    </div>
    
</div>
</body>