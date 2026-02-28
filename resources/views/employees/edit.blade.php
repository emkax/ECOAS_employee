<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
</head>
<body>

    <h1>Edit Employee</h1>

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

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name', $employee->name) }}">
        <br><br>

        <label>Age:</label><br>
        <input type="number" name="age" value="{{ old('age', $employee->age) }}">
        <br><br>

        <label>Address:</label><br>
        <input type="text" name="address" value="{{ old('address', $employee->address) }}">
        <br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" value="{{ old('phone', $employee->phone) }}">
        <br><br>

        <button type="submit">Update</button>
    </form>

</body>
</html>