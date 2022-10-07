<h2>Edit</h2>

<form action="/edit" method="post">
    @csrf
<input type="hidden" name="name" value={{$data['id']}} >
    <!-- <input type="number" name="id" value={{$data['id']}} placeholder="id"> -->
    <input type="text" name="websitename"  value={{$data['websitename']}} placeholder="websitename">
    <input type="text" name="logo" value={{$data['logo']}} placeholder="logoname">
    <input type="text" name="footerdesc"  value={{$data['footerdesc']}} placeholder="footerdesc">
    <input type="submit">
</form>