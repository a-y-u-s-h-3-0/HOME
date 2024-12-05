@include('adminnav')

<h1>All Users</h1>
<hr>
<table class="table table-responsive">
    <thead>
        <th>Sr No</th>
        <th>Full name</th>
        <th>Userame</th>
        <th>Email</th>
        <th>Mobile No</th>

    </thead>

    <tbody>
        @foreach ($data as $item)
            
        <tr>
            <td>{{$loop-> index + 1}}</td>
            <td>{{$item-> fullname}}</td>
            <td>{{$item-> username}}</td>
            <td>{{$item-> email}}</td>
            <td>{{$item-> mobileno}}</td>
        </tr>
        
        @endforeach
    </tbody>
</table>