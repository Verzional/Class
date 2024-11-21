<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <x-main>
        <h1> My Projects </h1>
        <div class="flex justify-center">
            <table class="mt-10 table-auto border-collapse border border-gray-400 w-full text-left">
                <tr>
                    <th class="border border-gray-400 px-4 py-2">No</th>
                    <th class="border border-gray-400 px-4 py-2">Course</th>
                    <th class="border border-gray-400 px-4 py-2">Project</th>
                    <th class="border border-gray-400 px-4 py-2">Semester</th>
                    <th class="border border-gray-400 px-4 py-2">Description</th>
                </tr>

                @foreach ($projects as $project)
                    @if ($loop->even)
                        @php($semester = 'EVEN')
                    @else
                        @php($semester = 'ODD')
                    @endif
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">{{ $loop->index + 1 }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $project['course'] }}</td>
                        <td class="border border-gray-400 px-4 py-2">
                            <a href="project/{{ $project['code'] }}">{{ $project['title'] }}</a>
                        </td>
                        <td class="border border-gray-400 px-4 py-2">{{ $semester }}</td>
                        <td class="border border-gray-400 px-4 py-2">
                            @if ($loop->first)
                                My Very First Project
                            @elseif ($loop->last)
                                My Very Last Project
                            @else
                                My Project
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </x-main>
</x-layout>
