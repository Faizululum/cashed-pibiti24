<x-layout>
    <x-slot:title>Users</x-slot:title>

    <div class="container">
        <div class="d-flex mb-2 justify-content-between">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <a href="/users/create" class="btn btn-dark">Tambah</a>
        </div>

        <div class="card overflow-hidden">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aktif</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Farhan Hidayatullah</td>
                        <td>farhansyah23@gmail.com</td>
                        <td>Akif</td>
                        <td align="right">
                            <a href="/users/edit" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Cuplis</td>
                        <td>cuplisroyal@gmail.com</td>
                        <td>Akif</td>
                        <td align="right">
                            <a href="/users/edit" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pablo</td>
                        <td>pablosco@gmail.com</td>
                        <td>Akif</td>
                        <td align="right">
                            <a href="/users/edit" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
