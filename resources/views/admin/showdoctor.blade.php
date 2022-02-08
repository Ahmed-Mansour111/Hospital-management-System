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

        <div align="center" style="padding-top:50px;">

            <table class="table" align="center">
              <thead>
                <tr align="center">
                 
                  <th scope="col">Doctor Name</th>
                  <th scope="col">phone</th>
                  <th scope="col">Specialty</th>
                  <th scope="col">Room number</th>
                  <th scope="col">Image</th>
                  <th scope="col">Update</th>
                  <th scope="col">Delete</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr align="center">
                  @foreach($data as $doctor)
                  <td>{{$doctor->name}}</td>
                  <td>{{$doctor->phone}}</td>
                  <td>{{$doctor->specialty}}</td>
                  <td>{{$doctor->room}}</td>
                  <td><img height="100px;" width="100px;" src="doctorimage/{{$doctor->image}}" alt=""></td>
                  <td ><a href="{{url('updatedoctor',$doctor->id)}}"><button class="btn btn-success">Update</button></a>
                  </td>
                  <td>
                    <a href="{{url('deletedoctor',$doctor->id)}}" onclick="return confirm('Are you sure you want to ancel your appointment')"><button class="btn btn-danger">Delete</button></a>
                    </td>
                  
                </tr>
                
                 
                @endforeach
                
              </tbody>
            </table>
          </div>

      </div>

        </div>


   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>