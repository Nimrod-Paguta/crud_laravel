<x-app-layout>
    <!-- resources/views/students/create.blade.php -->

<form action="{{ route('subject.store') }}" method="POST">
    @csrf

    <label for="subjectname">Subject Name:</label>
    <input type="text" name="subjectname" required>

    <label for="subjectcode">Subject Code:</label>
    <input type="text" name="subjectcode" required>


    <label for="description">Description:</label>
    <input type="text" name="description" required>

    <button type="submit" href="{{ route('subject.index') }}">Submit</button>
</form>

</x-app-layout>
