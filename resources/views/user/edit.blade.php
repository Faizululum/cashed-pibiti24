<x-layout>
    <x-slot:title>Edit User</x-slot:title>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
                            @csrf
                            @method('put')
                            <x-text-input label="Nama" name="name" placeholder="Masukkan nama user"
                                value="{{ old('name', $user->name) }}"></x-text-input>
                            <x-text-input label="Email" name="email" placeholder="Masukkan email user"
                                value="{{ old('email', $user->email) }}"></x-text-input>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Masukkan password baru" name="password">
                            </div>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" role="switch" id="active"
                                    name="active" @checked((!old() && $user->active) || old('active') == 'on')>
                                <label class="form-check-label" for="active">Aktif</label>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('users.index') }}" class="btn btn-danger">Batal</a>
                                <button type="submit" class="btn btn-dark">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
