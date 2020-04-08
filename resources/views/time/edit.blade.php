<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Time Tracker</title>
  </head>
  <body>
    <h1>Edit Entry</h1>
    
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Project</th>
      <th scope="col">Description of Work</th>
      <th scope="col">Start Time</th>
      <th scope="col">End Time</th>
      <th scope="col">-</th>
      <th scope="col">-</th>
      <th scope="col">-</th>
    </tr>
  </thead>
  <tbody>
	  <form action="{{ route('time.update', $time->id) }}" method="POST">
		@csrf
		@method('PUT')
			<tr>
			  <th scope="row">{{ $time->id }}</th>
			  <td><input type="text" name="date" class="form-control" placeholder="Date" value="{{ $time->date }}"></td>
			  <td><input type="text" name="project" class="form-control" placeholder="Project" value="{{ $time->project }}"></td>
			  <td><input type="text" name="description" class="form-control" placeholder="Description" value="{{ $time->description }}"></td>
			  <td><input type="text" name="timestart" class="form-control" placeholder="Start Time" value="{{ $time->timestart }}"></td>
			  <td><input type="text" name="timeend" class="form-control" placeholder="End Time" value="{{ $time->timeend }}"></td>
			  <td></td>
			  <td><button type="submit" class="btn btn-primary">Update</button></td>
			  <td></td>
			</tr>
		</form>
	  
	  
  </tbody>
  </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
