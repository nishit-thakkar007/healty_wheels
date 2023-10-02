<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        table th, td{
            Background-color:white;
  padding: 15px;
  text-align: center;
        }
        </style>
</head>
<body style='background-image: url("assets/img/view.jfif");';;background-size:2100px 950px;">
<a href="/admin" class="btn btn-success" style="morgin-top:50px;">Back</a>
    <center><table style="width:50%;box-shadow:2px 10px 20px grey;margin-top:120px;">
        <tbody>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>{{session()->get('shopkeeeper')}}</th>
            <th></th>
            @foreach($data as $rec)
                <tr>
                    <td>{{$rec->id}}</td>
                    <td>{{$rec->name}}</td>
                    <td>{{$rec->email}}</td>
                    <td>{{$rec->vechicle}}</td>
                    <td>

                        <form action="updateid" method="post">
                            @csrf
                            <input type="hidden" value="{{session()->get('shopkeeeper')}}" name="shopid">
                            <input type="hidden" value="{{$rec->id}}" name="custid">
                        
                        <button type="submit">Accept</button>
                        
                         </form>
                    <td><a href="{{url('')}}" class="btn btn-danger">Reject</a></td>   
                </tr>
            @endforeach
        </tbody>
    </table></center>
</body>
</html>