<!DOCTYPE html>
<html>
<head>
    <title>Create Procedure</title>
</head>
<body>
    <h1>Create Procedure</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form action="{{ route('created') }}" method="POST">
        @csrf
        @method('POST')
        
        <label for="type">Type:</label>
        <input type="text" name="type" id="type" placeholder="Type of procedure..." required>

        <label for="state">Status:</label>
        <select name="state" id="state" required>
            <option value=0 >Pending</option>
            <option value=1 >In Progress</option>
            <option value=2 >Completed</option>
        </select>
        
        <label for="dni">DNI:</label>
        <input name="dni" id="dni" placeholder="Dni..." required>
                
        <button type="submit">Create</button>
    </form>
    
    <a href="{{ route('index') }}">Back to list</a>
</body>
</html>
