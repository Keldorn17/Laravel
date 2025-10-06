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
                @if ($user->isAdmin())
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($kepzesek as $kepzes)
                <tr>
                    <td>{{$kepzes['nev']}}</td>
                    <td>{{$kepzes['felveheto']}}</td>
                    <td>{{$kepzes['minimum']}}</td>
                    @if ($user->isAdmin())
                    <td><a href="/edit-kepzes/{{$kepzes->id}}">Edit</a></td>
                    <td>
                        <form action="/delete-kepzes/{{$kepzes->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>

        @if ($user->isAdmin())
        <form action="/createKepzes" method="POST">
            @csrf
            <input type="text" placeholder="nev" class="form-control" name="nev">
            <input type="number" placeholder="felveheto" class="form-control" name="felveheto">
            <input type="number" placeholder="minimum" class="form-control" name="minimum">
            <button class="btn btn-primary">create kepzes</button>
        </form>
        @endif
    @endauth

</div>
</body>
</html>
