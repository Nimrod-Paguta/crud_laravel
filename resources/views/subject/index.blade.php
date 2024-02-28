<x-user-layout>
    <h1>Subject List</h1>
    <a href="{{ route('subject.create') }}">
        <button type="button" class="btn btn-success">Add Subject</button>
    </a>

    <table class="table">
        <thead>
            <tr>
                <th>Subject Name:</th>
                <th>Subject Code:</th>
                <th>Description:</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($subjects as $subject)
                <tr>
                    <td>{{ $subject->subjectname }}</td>
                    <td>{{ $subject->subjectcode }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($subject->description, 20) }}</td>
                    <td>
                        <a href="{{ route('subject.edit', $subject->id) }}">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                        <form action="{{ route('subject.destroy', $subject->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No subjects found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</x-user-layout>
