<html lang="en">
<x-header/>
<body>
<div class="container-fluid">
    <x-navbar/>
    @auth
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Nev</th>
                <th scope="col">Felveheto</th>
                <th scope="col">Minimum</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($kepzesek as $kepzes)
                <tr>
                    <td>{{$kepzes['nev']}}</td>
                    <td>{{$kepzes['felveheto']}}</td>
                    <td>{{$kepzes['minimum']}}</td>
                    <td><a href="/edit-kepzes/{{$kepzes->id}}">Edit</a></td>
                    <td>
                        <form action="/delete-kepzes/{{$kepzes->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endauth

</div>
</body>
</html>
