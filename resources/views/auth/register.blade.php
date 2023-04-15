<x-layout>
    <div class="container-fluid mt-5 text-center">
        <div class="row justify-content-center">
            <h1>Registrati</h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="p-5 shadow" method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome Completo</label>
                      <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn-custom">Registrati</button>
                        <p class="mt-2">Hai già un account? <a class="text-gradient fw-bold" href="{{route('login')}}">Accedi</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>