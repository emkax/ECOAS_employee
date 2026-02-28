<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>

    <h1>Add New Employee</h1>

    <a href="{{ route('employees.index') }}">Back to List</a>

    <br><br>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}">
        <br><br>

        <label>Age:</label><br>
        <input type="number" name="age" value="{{ old('age') }}">
        <br><br>

        <label>Address:</label><br>
        <input type="text" name="address" value="{{ old('address') }}">
        <br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" value="{{ old('phone') }}">
        <br><br>

        <button type="submit">Save</button>
    </form>

</body>
</html>