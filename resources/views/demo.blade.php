<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">  
    $(document).ready(function() {
      $('#example').DataTable();
    } );
    
</script>
<!DOCTYPE html>
<html>
    <body>
        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Latitude & Longitude</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->rollno}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->department}}</td>
                    <td>{{$user->city}}</td>
                    <td>{{$user->country}}</td>
                    <td>
                        <form method="post" action="/edit_location" >
                            {{csrf_field()}}
                            <input type="text" name="rollno" value="{{$user->rollno}}" style="display: none;">
                            Latitude  : <input type="text" name="latitude" value="{{$user->latitude}}"><br>
                            Longitude : <input type="text" name="longitude" value="{{$user->longitude}}">
                            <br>
                            <button type="submit">Save</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </body>
</html>