<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Procedures CRUD</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body>
        <main>
            <h1>Tràmits</h1>
            <p>Crea y gestiona tràmits</p>    
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>DNI</th>
                            <th>Timecreated</th>
                            <th>Timemodified</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($procedures as $procedure)
                            <tr>
                                <td>{{ $procedure->id }}</td>
                                <td>{{ $procedure->type }}</td>
                                <td>
                                    @switch($procedure->state)
                                        @case(0)
                                            Pending
                                            @break
                                        @case(1)
                                            In Progress
                                            @break
                                        @case(2)
                                            Completed
                                            @break
                                        @default
                                            Unknown
                                    @endswitch
                                </td>
                                <td>{{ $procedure->dni }}</td>
                                <td>{{ $procedure->created_at }}</td>
                                <td>{{ $procedure->updated_at }}</td>
                                <td>
                                    <a href="{{ route('update', $procedure->id) }}">Edit</a>
                                </td>    
                            </tr>
                        @endforeach
                    </tbody>
                </table>    
            </div>
            <div>
                <a href="{{ route('create') }}">Create</a>
            </div> 
        </main>       
    </body>
</html>
