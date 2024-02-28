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

        input, span {
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

    <form action="{{ route('grade.update', $grade->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="subjectcode">Subject Code:</label>
        <span>{{ $grade->subjectcode }}</span>


        <label for="studentname">Student Name:</label>
        <span>{{ $grade->studentname }}</span>

        
        <label for="grade">Grade:</label>
        <input type="text" name="grade" value="{{ $grade->grade }}" />

        <button type="submit">Update</button>
    </form>

</x-user-layout>
