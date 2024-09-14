<!DOCTYPE html>
<html>
<head>
    <title>Detalls Tràmit- CRUD</title>

    <link rel="icon" href="{{ asset('favicon.svg') }}">

    <link href="{{ asset('css/details.css') }}" rel="stylesheet">
</head>
<main>
    <h1>Detalls del tràmit {{ $procedure->id }}: {{ $procedure->type }}</h1>
    <section>
        <div class="user-info">
            <div class="user-card">
                <img src="{{URL::asset('/assets/user-placeholder.jpg')}}" width="200px" />
                <div class="user-details">
                    <div class="user-fields">
                        <span>Nom: Jhon</span>
                        <span>Cognoms: Doe</span>
                        <span>Data naixement: 11/07/2000</span>
                        <span>DNI: {{ $procedure->dni }}</span>            
                    </div>
                    <div class="user-signature">
                        <img src="{{URL::asset('/assets/signature-placeholder.png')}}" width="100px" />
                    </div> 
                </div>
            </div>
        </div>
        <div class="procedure-info">
            <span>Tipus: {{ $procedure->type }}</span>
            @switch($procedure->state)
                @case(0)
                    <div>
                        <span>Estat: </span><span class="pill pending">Pending</span>
                    </div>
                    @break
                @case(1)
                    <div>
                        <span>Estat: </span><span class="pill inprogress">In Progress</span>
                    </div>
                    @break
                @case(2)
                    <div>
                        <span>Estat: </span><span class="pill completed">Completed</span>
                    </div>
                    @break
                @default
                    Unknown
            @endswitch
            <span>Creat: {{ $procedure->created_at }}</span>
            <span>Modificat: {{ $procedure->updated_at }}</span>
        </div>
    </section>
    <div>
        <h2>Descripcio del Tràmit</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
</main>