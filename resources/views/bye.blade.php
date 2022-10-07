<!-- <h1>fyfy</h1>
<form action="/foa" method="get">


<input type="text" placeholder="id"name="id">
<input type="text" placeholder="title..." name="title">
<input type="text" placeholder="description..." name="description">
<input type="text" placeholder="description..." name="category">
<input type="date" placeholder="description..." name="date">
<input type="date" placeholder="description..." name="author">
<input type="submit" value="post">
</form> -->
<h1>uh</h1>
<table border="1">

<thead>
    <th>Id</th>
    <th>websitename</th>
    <th>logo</th>
    <th>footerdesc</th>
</thead>
@foreach($deletes as $del)
<?php
$var=$del['id']
?>
<tr>
    <td>{{$del['id']}}</td>
    <td>{{$del['websitename']}}</td>
    <td>{{$del['logo']}}</td>
    <td>{{$del['footerdesc']}}</td>
    <td><a href="/delete/{{$del['id']}}">Delete</a></td>
    <td><a href="/edit/{{$del['id']}}">Edit</a></td>
</tr>
@endforeach
</table>