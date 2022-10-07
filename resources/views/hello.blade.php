<h1>Hello 
    
</h1>
<table border="1">
<thead>
    <th>ID</th>
    <th>username</th>
    <th>LASTame</th>
    <th>password</th>
    <th>ROLE</th>
   
</thead>
    @foreach($users as $user)
    
    <tr>
        
        <td>{{$user['user_id']}}</td>
        <td>{{$user['first_name']}}</td>
        <td>{{$user['last_name']}}</td>
        <td>{{$user['username']}}</td>
        <td>{{$user['password']}}</td>
        <td>{{$user['role']}}</td>
        
    </tr>
    @endforeach
<div>
    </table>
    {{$users->links()}}