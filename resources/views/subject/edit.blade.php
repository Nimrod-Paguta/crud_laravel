<x-user-layout>

<style>
    /* edit.css */

form {
    max-width: 400px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 12px;
    box-sizing: border-box;
}

button {
    background-color: #007BFF; /* Blue color, change it as needed */
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3; /* Darker shade for hover effect */
}

</style>

<form action="{{ route('subject.update', $subject->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="subjectname">Subject Name:</label>
    <input type="text" name="subjectname" value="{{ $subject->subjectname }}" required>

    <label for="subjectcode">Subject Code:</label>
    <input type="text" name="subjectcode" value="{{ $subject->subjectcode }}" required>

    <label for="description">Description:</label>
    <input type="text" name="description" value="{{ $subject->description }}" required>

    <button type="submit" href="{{ route('subject.index') }}">Update</button>
</form>


</x-user-layout>

