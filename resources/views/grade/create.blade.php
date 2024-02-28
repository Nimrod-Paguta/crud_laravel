<x-app-layout>
    <!-- resources/views/students/create.blade.php -->

    <form action="{{ route('grade.store') }}" method="POST">
        @csrf

        <label for="studentname">Student Name:</label>
        <select name="studentname" required>
            @foreach($students as $student)
                <option value="{{ $student->name }}">{{ $student->name }} {{ $student->lastname }}</option>
            @endforeach
        </select>

        <label for="subjectcode">Subject Code:</label>
        <select name="subjectcode" required>
            @foreach($subjects as $subject)
                <option value="{{ $subject->subjectcode }}">{{ $subject->subjectcode }}</option>
            @endforeach
        </select>

        <label for="grade">Grade:</label>
        <input type="text" name="grade" required>

        <button type="submit">Submit</button>
    </form>
</x-app-layout>
