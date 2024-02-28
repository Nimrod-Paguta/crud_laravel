<x-user-layout>
    <h1>grade List</h1>
    <a href="{{ route('grade.create') }}">
        <button type="button" class="btn btn-success">Add grade</button>
    </a>

    <table class="table">
        <thead>
            <tr>
                <th>Student Name:</th>
                <th>Subject Code:</th>
                <th>Grade:</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($grades as $grade)
                <tr>
                    <td>{{ $grade->studentname }}</td>
                    <td>{{ $grade->subjectcode }}</td>
                    <td>{{ $grade->grade }}</td>
                    <td>
                        <a href="{{ route('grade.edit', $grade->id) }}">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                        
                        <form action="{{ route('grade.destroy', $grade->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No grades found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</x-user-layout>
