<!DOCTYPE html>
<html>
<head>
    <title>Crear nou Tràmit - CRUD</title>

    <link rel="icon" href="{{ asset('favicon.svg') }}">

    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
</head>
<body>
    <main>
        <h1>Crear tràmit</h1>
        <form action="{{ route('created') }}" method="POST">
            @csrf
            @method('POST')
            
            <div>
                <label for="type">Tipus</label>
                <input type="text" name="type" id="type" placeholder="Tipus de tràmit..." required>    
            </div>
            
            <div>
                <label for="state">Estat</label>
                <select name="state" id="state" required>
                    <option value=0 >Pending</option>
                    <option value=1 >In Progress</option>
                    <option value=2 >Completed</option>
                </select>
            </div>

            <div>
                <label for="dni">DNI</label>
                <input name="dni" id="dni" placeholder="DNI del usuari..." required>
            </div>
     
            <button type="submit" class="submit">Crear tràmit</button>
        </form>
        
        <div class="back">
            <a href="{{ route('index') }}">Tornar a la llista</a>    
        </div>
    </main>
</body>
</html>
