<html lang="en">
<x-header/>
<body>
    <x-navbar/>
    <h1>Edit Kepzes</h1>
    <form action="/edit-kepzes/{{$kepzes->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nev" value="{{$kepzes->nev}}">
        <input type="number" name="felveheto" value="{{$kepzes->felveheto}}">
        <input type="number" name="minimum" value="{{$kepzes->minimum}}">
        <button>Save Changes</button>
    </form>
</body>
</html>
