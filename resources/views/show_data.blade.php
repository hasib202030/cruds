

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

          <table class="table">
            <a href="{{ url('/add_data')}}" class="btn btn-primary my-3">Add Student</a>
            @if (Session::has('msg'))
            <p class="alert alert-success">{{ Session::get('msg') }}</p>
                 
             @endif
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Student Name</th>
                <th scope="col">Student Email</th>
            
              </tr>
            </thead>
            <tbody>
              <tr>              
                <td>1</td>
                <td>Hasib</td>
                <td>hasib@gmail.com</td>
              </tr>
              
            
            </tbody>
          </table>
        </div>
      </div>
    </div>




    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>