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

        <div align="center" style="padding-top:50px; width:80%;">

            <table class="table" align="center">
              <thead>
                <tr align="center">
                 
                  <th scope="col">Customer Name</th>
                  <th scope="col">Customer Email</th>
                  <th scope="col">phone</th>
                  <th scope="col">Doctor Name</th>
                  <th scope="col">Date</th>
                  <th scope="col">Message</th>
                  <th scope="col">Status</th>
                  <th scope="col">Cancel Appointment</th>
                  <th scope="col">Send Email</th>
                </tr>
              </thead>
              <tbody>
                <tr align="center">
                  @foreach($data as $appoint)
                  <td>{{$appoint->name}}</td>
                  <td>{{$appoint->email}}</td>
                  <td>{{$appoint->phone}}</td>
                  <td>{{$appoint->doctor}}</td>
                  <td>{{$appoint->date}}</td>
                  <td>{{$appoint->message}}</td>
                  <td>{{$appoint->status}}</td>
                  <td ><a href="{{url('approved',$appoint->id)}}"><button class="btn btn-success">Approve</button></a>
                  
                  <a href="{{url('canceled',$appoint->id)}}" onclick="return confirm('Are you sure you want to ancel your appointment')"><button class="btn btn-danger">cancle</button></a>
                  </td>
                  <td>
                  <a href="{{url('emailview',$appoint->id)}}" ><button class="btn btn-warning">Send Email</button></a>
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