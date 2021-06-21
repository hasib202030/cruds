

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 
     
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <table class="table table-bordered">
            <a href="{{ url('/add_data')}}" class="btn btn-primary my-3">Add Student</a>
            {{-- Data add msg --}}
            @if (Session::has('msg'))
            <p class="alert alert-success">{{ Session::get('msg') }}</p>                 
             @endif


            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Student Name</th>
                <th scope="col">Student Email</th>
                <th scope="col">Action</th>
            
              </tr>
            </thead>
            <tbody>
              
  
         






             @foreach ($showData as $key=>$data)
             <tr>              
               {{-- key+1 is 0 remove --}}
              <td>{{ $key+1}}</td> 
              <td>{{ $data->student_name }}</td>
              <td>{{ $data->student_email }}</td>
              <td>
                <a href="{{ url('/edit_data/' .$data->id) }}" class="btn btn-primary">Edit</a>
                {{-- <a href="{{  url('/edit_data/' .$data->id) }}" class="btn btn-primary">Edit</a> --}}





                <a href="{{ url('/delete_data/' .$data->id) }}" onclick= "return confirm('Are you sure delete student')"  class="btn btn-danger">Delete</a>
              </td>
              
            </tr>
             @endforeach
              
            
            </tbody>
          </table>

          {{-- table pagenation --}}
        {{ $showData->links() }}

        </div>
      </div>
    </div>




    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>