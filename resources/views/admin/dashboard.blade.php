<x-layout>
    <div class="container my-5">
        <h1>Dashboard - Admin</h1>
        <table class="table table-striped text-white">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Email</th>
                    <th>Posizione</th>
                    <th>Stato</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                    <tr class="text-white">
                        <td>{{ $application->id }}</td>
                        <td>{{ $application->user->name}}</td>
                        <td>{{ $application->user->email }}</td>
                        <td>{{ $application->position }}</td>
                        <td>{{ $application->status }}</td>
                        <td>
                            <a href="{{ route('application.show', $application->id) }}" class="btn btn-primary">Dettagli</a>
                            <a href="{{ route('application.download', $application->id) }}" class="btn btn-success">Scarica PDF</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>