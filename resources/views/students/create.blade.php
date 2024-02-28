<x-app-layout>
    <!-- resources/views/students/create.blade.php -->

    <style>
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
            background-color: #4CAF50;
            color: green    ;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        
    </style>

<form action="{{ route('students.store') }}" method="POST">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="lastname">Lastname:</label>
    <input type="text" name="lastname" required>


    <label for="age">Age:</label>
    <input type="number" name="age" required>

    <button type="submit" href="{{ route('students.index') }}">Submit</button>
</form>

</x-app-layout>