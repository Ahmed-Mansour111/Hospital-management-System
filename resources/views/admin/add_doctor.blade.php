

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

        <h1>Doctor Page</h1>
        
        
    
    
    
        <form method="POST" style="margin-top: 10%" action="{{url('upload_doctor')}}" enctype="multipart/form-data">
           @csrf


           
          

           @if(session()->has('message'))
           <div class="alert alert-success">
            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="inset-inline-end:inherit">&times;</span>
              </button>
              {{session()->get('message')}}
           </div>
           @endif

            <div class="form-group">
              <label for="formGroupExampleInput">Doctor Name</label>
              <input style="color: black;" type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Example input" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Phone</label>
              <input style="color: black;" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="number" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Specialty</label>
              <select class="form-control" style="color: white" name="specialty" required>
                  <option >-----Select-----</option>
                  <option value="skin">skin</option>
                  <option value="heart">heart</option>
                  <option value="eye">eye</option>
                  <option value="nose">nose</option>
              </select>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Room number</label>
              <input style="color: black;" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Room Number" name="room" required>
            </div>

            <div class="form-group">
              <label for="formGroupExampleInput2">Docotor Picture</label>
              <input style="color: black;" type="file" class="form-control" id="formGroupExampleInput2" name="file" required>
            </div>
            {{-- <div class="form-group"> --}}
              
              <input  type="submit" class="btn btn-success" id="formGroupExampleInput2"  >
            {{-- </div> --}}
          </form>
        </div>
    
     
    </div>
    <script>
        $('.alert').alert()
    </script>
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>