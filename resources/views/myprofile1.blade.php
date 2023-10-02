<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<form action="{{url('proupdate/'.$rec->id )}}"  method="post">
@csrf
<section class="vh-100" style="background-image:url('/signin.gif');  background-repeat: no-repeat;background-size: 1900px 900px;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
<div class="d-flex flex-row align-items-center mb-4">
    
                    <!-- <div class="form-outline flex-fill mb-0">
                      <input type="hidden" id="name" name="id" class="form-control" :value="$myData->id" />
                      <label class="form-label" for="form3Example3c">Id</label>
                    </div>
                  </div> -->
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="name" name="name" class="form-control" value="{{$rec->name}}"/>
                      <label class="form-label" for="form3Example3c">Name</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="pwd" name="email" class="form-control" value="{{$rec->email}}"/>
                      <label class="form-label" for="form3Example4c">Email</label>
                    </div>
                  </div>
                  
                  <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="pwd" name="address" class="form-control" value="{{$rec->address}}"/>
                      <label class="form-label" for="form3Example4c">Address</label>
                    </div>
                  
                  <button type="submit">Update</button>
                  </div>
</form>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    

</html>