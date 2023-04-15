<x-layout>
    @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif

    <x-header />
    <x-information />
    <x-about />
    <x-services />
    <x-team />
</x-layout>