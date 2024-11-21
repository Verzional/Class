<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <x-main>
            <h1>{{ $project['title'] }}</h1>
            <p>Course: {{ $project['course'] }}</p>
            <p>Project Code: {{ $project['code'] }}</p>
    </x-main>
</x-layout>