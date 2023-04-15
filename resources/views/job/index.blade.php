<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <h1>Tutte le offerte di lavoro</h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($jobs as $job)
                <div class="col-12 col-md-3 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$job->title}}</h4>
                            <p class="card-text">Anni di esperienza richiesta: {{$job->experience}}</p>
                            <a href="{{route('job.byPosition', ['position'=> $job->position->id])}}" class="text-gradient fst-italic">Posizione: {{$job->position->name}}</a>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-beetween align-items-center">
                            Pubblicato il {{$job->created_at->format('d/m/Y')}}
                            <a href="{{route('job.show', compact('job'))}}" class="btn-custom">Leggi di più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>