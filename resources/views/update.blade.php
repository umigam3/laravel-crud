<!DOCTYPE html>
<html>
<head>
    <title>Edit Procedure</title>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>
    <main>
        <h1>Editar tràmit</h1>
        <form action="{{ route('updated', $procedure->id) }}" method="POST">
            @csrf
            @method('post')
            
            <label for="type">Type:</label>
            <input type="text" name="type" id="type" value="{{ old('type', $procedure->type) }}" required>
    
            <label for="state">Status:</label>
            <select name="state" id="state" required>
                <option value=0 {{ old('state', $procedure->state) == 0 ? 'selected' : '' }}>Pending</option>
                <option value=1 {{ old('state', $procedure->state) == 1 ? 'selected' : '' }}>In Progress</option>
                <option value=2 {{ old('state', $procedure->state) == 2 ? 'selected' : '' }}>Completed</option>
            </select>
            
            <label for="dni">DNI:</label>
            <input name="dni" id="dni" value="{{ old('dni', $procedure->dni) }}" required>
                    
            <button type="submit">Update</button>
        </form>
        
        <a href="{{ route('index') }}">Back to list</a>
    
    </main>
</body>
</html>
