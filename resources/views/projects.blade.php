<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <x-main>
        <h1> My Projects </h1>
        <div class="flex justify-center">
            <table class="border-collapse border border-gray-400">
                <tr class="border-collapse border border-gray-400">
                    <th>NO</th>
                    <th>PROJECT</th>
                    <th>SEMESTER</th>
                    <th>DESCRIPTION</th>
                </tr>
                @php($projects = ['Calculator', 'Accounting', 'Student Report', 'POS Resto', 'Online Store', 'Pet Shop'])
                @foreach ($projects as $project)
                    @if ($loop->even)
                        @php($semester = 'EVEN')
                    @else   
                        @php($semester = 'ODD')
                    @endif
                    <tr class="border-collapse border border-gray-400">
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $project }}</td>
                        <td>{{ $semester }}</td>
                        <td>
                            @if ($loop->first)
                                My very FIRST project
                            @elseif ($loop->last)
                                My LAST project
                            @else
                                Lorem ipsum dolor sit amet.
                            @endif ()
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </x-main>
</x-layout>
