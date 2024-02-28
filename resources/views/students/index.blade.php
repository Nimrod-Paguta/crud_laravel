<x-user-layout>
    <!-- resources/views/students/index.blade.php -->
    <h1>Student List</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <a href="{{ route('students.create') }}"><button type="button" class="btn btn-success">Add Student</button></a>
    <table class="table">
  <thead>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
    <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->lastname }}</td>
                    <td>{{ $student->age }} years old</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}"> <button type="button" class="btn btn-primary" >Edit</button></a>
                       
                        
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No students found</td>
                </tr>
            @endforelse
  </tbody>
</table>

  

</x-user-layout>
