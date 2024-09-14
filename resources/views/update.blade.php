<!DOCTYPE html>
<html>
<head>
    <title>Editar Tràmits - CRUD</title>

    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.svg') }}">


</head>
<body>
    <main>
        <h1>Editar tràmit</h1>
        <form action="{{ route('updated', $procedure->id) }}" method="POST">
            @csrf
            @method('post')
            
            <div>
                <label for="type">Tipus</label>
                <input type="text" name="type" id="type" value="{{ old('type', $procedure->type) }}" required>    
            </div>
    
            <div>
                <label for="state">Estat</label>
                <select name="state" id="state" required>
                    <option value=0 {{ old('state', $procedure->state) == 0 ? 'selected' : '' }}>Pending</option>
                    <option value=1 {{ old('state', $procedure->state) == 1 ? 'selected' : '' }}>In Progress</option>
                    <option value=2 {{ old('state', $procedure->state) == 2 ? 'selected' : '' }}>Completed</option>
                </select>    
            </div>

            <div>
                <label for="dni">DNI</label>
                <input name="dni" id="dni" value="{{ old('dni', $procedure->dni) }}" required>    
            </div>
                    
            <button type="submit" class="submit">Actualitzar tràmit</button>
        </form>

        <div class="back">
            <a href="{{ route('index') }}">Tornar a la llista</a>
        </div>
    </main>
</body>
</html>
