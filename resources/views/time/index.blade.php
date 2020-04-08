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
    <h1>Time Entries</h1>
    
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
    </tr>
  </thead>
  <tbody>
	  <form action="{{ route('time.store') }}" method="POST">
		@csrf
			<tr>
			  <th scope="row">[#]</th>
			  <td><input type="text" name="date" class="form-control" placeholder="Date"></td>
			  <td><input type="text" name="project" class="form-control" placeholder="Project"></td>
			  <td><input type="text" name="description" class="form-control" placeholder="Description"></td>
			  <td><input type="text" name="timestart" class="form-control" placeholder="Start Time"></td>
			  <td><input type="text" name="timeend" class="form-control" placeholder="End Time"></td>
			  <td><button type="submit" class="btn btn-primary">Add</button></td>
			</tr>
		</form>
	  
	  @foreach($timesheets as $time) 
	  
	 <tr>
      <th scope="row">{{ $time->id }}</th>
      <td>{{ $time->date }}</td>
      <td>{{ $time->project }}</td>
      <td>{{ $time->description }}</td>
      <td>{{ $time->timestart }}</td>
      <td>{{ $time->timeend }}</td>
    </tr>
	  @endforeach
	  
  </tbody>
  </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
