<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1>Crea un'offerta di lavoro</h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="p-5 shadow bg-second" action="{{route('job.store')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}">
                    </div>
                    <div class="mb-3">
                        <label for="experience" class="form-label">Anni di esperienza richiesta</label>
                        <input type="text" name="experience" id="experience" class="form-control" value="{{old('experience')}}">
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Posizione</label>
                        <select name="position" id="position" class="form-control text-capitalize">
                            <option value="">-- Seleziona --</option>
                            @foreach ($positions as $position)
                                <option value="{{$position->id}}">{{$position->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="place" class="form-label">Luogo di lavoro</label>
                        <input type="text" name="place" id="place" class="form-control" value="{{old('place')}}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione lavoro</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                    </div>
                    <button class="btn-custom">Inserisci offerta di lavoro</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>