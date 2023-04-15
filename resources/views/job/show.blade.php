<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1>{{$job->title}}</h1>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="text-center">
                <p>Posizione: {{$job->position->name}}</p>
                <p>Anni di esperienza richiesta: {{$job->experience}}</p>
                <div class="my-1 text-muted fst-italic">
                    <p>Pubblicato il {{$job->created_at->format('d/m/Y')}}</p>
                </div>
                <hr>
                <p>{{$job->description}}</p>
                <div class="mt-4">
                    <a href="{{route('job.index')}}" class="btn-custom">Torna indietro</a>
                </div>
            </div>
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

                <form action="{{route('application.store')}}" class="p5 shadow" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label">Cognome</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{old('last_name')}}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Numero di Telefono</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
                    </div>

                    <div class="mb-3">
                        <label for="cv" class="form-label">Curriculum Vitae</label>
                        <input type="file" class="form-control" id="cv" name="cv">
                    </div>

                    <div class="mb-3">
                        <label for="position" class="form-label">Posizione</label>
                        <select name="position" id="position" class="form-control text-capitalize">
                            <option value="">--Seleziona--</option>
                            @foreach ($positions as $position)
                                <option value="{{$position->id}}">{{$position->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="motivation" class="form-label">Parlaci di te</label>
                        <textarea name="motivation" id="motivation" cols="30" rows="10" class="form-control">{{old('motivation')}}</textarea>
                    </div>

                    <button type="submit" class="btn-custom">Invia Candidatura</button>
                </form>



            </div>
        </div>
    </div>
</x-layout>