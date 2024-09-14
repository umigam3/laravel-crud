<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Llistat Tràmits - CRUD</title>

        <link rel="icon" href="{{ asset('favicon.svg') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <main>
            <div class="title">
                <div>
                    <h1>Tràmits</h1>
                    <p>Crea i gestiona tràmits.</p>        
                </div>
                <a class="create-button" href="{{ route('create') }}">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    <span>Crear nou tràmit</span>
                </a>     
            </div>
            <div style="overflow-x:auto;">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipus</th>
                            <th>Estat</th>
                            <th>DNI</th>
                            <th>Temps creat</th>
                            <th>Temps modificat</th>
                            <th>Acció</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($procedures as $procedure)
                            <tr>
                                <td>{{ $procedure->id }}</td>
                                <td class="type">{{ $procedure->type }}</td>
                                <td>
                                    @switch($procedure->state)
                                        @case(0)
                                            <span class="pill pending">Pending</span>
                                            @break
                                        @case(1)
                                            <span class="pill inprogress">In Progress</span>
                                            @break
                                        @case(2)
                                            <span class="pill completed">Completed</span>
                                            @break
                                        @default
                                            Unknown
                                    @endswitch
                                </td>
                                <td>{{ $procedure->dni }}</td>
                                <td>{{ $procedure->created_at }}</td>
                                <td>{{ $procedure->updated_at }}</td>
                                <td class="actions">
                                    <a href="{{ route('update', $procedure->id) }}"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg></a>
                                    <a class="details" href="{{ route('details', $procedure) }}"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-external-link"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 6h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-6" /><path d="M11 13l9 -9" /><path d="M15 4h5v5" /></svg></a>                            
                                    <form action="{{ route('delete', $procedure->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete"><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg></button>
                                    </form>    
                                </td>    
                            </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>   
        </main>       
    </body>
</html>
