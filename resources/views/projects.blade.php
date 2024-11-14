<x-layout>
    <x-slot:layoutTitle>{{ $pageTitle }}</x-slot:layoutTitle>
    <x-main>
        <h1> My Projects </h1>
        <table>
            <tr>
                <th> No </th>
                <th> Project </th>
                <th> Semester </th>
                <th> Description </th>
            </tr>
            @php($projects = ['Calculator', 'Accounting', 'Student Report', 'POS Resto', 'Online Store', 'Pet Shop'])

            @php($i = 0)
            @foreach ($projects as $pro)
                @php($i++)
                @if ($i % 2 == 0)
                    @php($semester = 'EVEN')
                @else
                    @php($semester = 'ODD')
                @endif
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $pro }}</td>
                    <td>{{ $semester }}</td>
                    <td>
                        @if ($i == 1)
                            My very FIRST project
                        @elseif ($i == count($projects))
                            My LAST project
                        @else
                            Lorem ipsum dolor sit amet.
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </x-main>
</x-layout>
