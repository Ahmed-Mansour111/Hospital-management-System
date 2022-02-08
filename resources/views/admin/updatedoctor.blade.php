

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
  
      @include('admin.sidebar')
   
      @include('admin.navbar')
      <div class="container-fluid page-body-wrapper">

        <h1 style="margin-top: 20px;">Doctor Page</h1>

       

        <form style="margin-top: 10%;" method="POST" enctype="multipart/form-data" action="{{url('editdoctor',$data->id)}}">

          @if(session()->has('message'))
          <div class="alert alert-success">
           
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true" style="inset-inline-end:inherit">&times;</span>
             </button>
             {{session()->get('message')}}
          </div>
          @endif

          @csrf
          <div class="mb-3">
            <label  class="form-label">Doctor Name</label>
            <input style="color: black" type="text" class="form-control"  aria-describedby="doctor name" name="name" value="{{$data->name}}">
          </div>
          
          <div class="mb-3">
            <label  class="form-label">Phone</label>
            <input style="color: black" type="number" class="form-control"  aria-describedby="doctor name" name="phone" value="{{$data->phone}}">
          </div>
          <div class="mb-3">
            <label  class="form-label">Specialty</label>
            <input  style="color: black" type="text" class="form-control"  aria-describedby="specialty" name="specialty" value="{{$data->specialty}}">
          </div>
          <div class="mb-3">
            <label  class="form-label">Room</label>
            <input style="color: black" type="text" class="form-control"  aria-describedby="room" name="room" value="{{$data->room}}">
          </div>
          <div class="mb-3">
            <label  class="form-label">Old Image</label>
           
            <img src="doctorimage/{{$data->image}}" alt="{{$data->image}}"/>
         
          </div>
          <div class="mb-3">
            <label  class="form-label">New Image</label>
           
            <input type="file" name="file">
         
          </div>
          
         



          <button type="submit" class="btn btn-success">Submit</button>
        </form>



        {{-- <div class="card" style="width: 18rem;">
          <img src="doctorimage/{{$data->image}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$data->name}}</h5>
            <p class="card-text">{{$data->specialty}}</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$data->phone}}</li>
            <li class="list-group-item">{{$data->room}}</li>
            
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div> --}}



        

        
        
    
    
     
    </div>
    <script>
        $('.alert').alert()
    </script>
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>