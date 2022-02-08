

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
        
        
    
    
    
        <form method="POST" style="margin-top: 10%" action="{{url('sendemail',$data->id)}}" >
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
              <label for="formGroupExampleInput">Greeting</label>
              <input style="color: black;" type="text" name="greeting" class="form-control" id="formGroupExampleInput" placeholder="Example input" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">body</label>
              <input style="color: black;" type="text" name="body" class="form-control" id="formGroupExampleInput" placeholder="Example input" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Action URL</label>
              <input style="color: black;" type="text" name="actionurl" class="form-control" id="formGroupExampleInput" placeholder="Example input" required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">End Part</label>
              <input style="color: black;" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="endpart" required>
            </div>
           
            <div class="form-group">
              <label for="formGroupExampleInput2">Action Text</label>
              <input style="color: black;" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Room Number" name="actiontext" required>
            </div>

           
              
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