{{$slot}}

<form action="{{route('site.contato')}}" method="POST">
    @csrf
    <input 
        name="nome" 
        value="{{ old('nome') }}" 
        type="text" 
        placeholder="Nome" 
        class="{{$classe}}"
    >
    {{$errors->has('nome') ? $errors->first('nome') : ''}}
    <br>
    <input 
        name="telefone" 
        value="{{ old('telefone') }}" 
        type="text" 
        placeholder="Telefone" 
        class="{{$classe}}"
    >
    @if($errors->has('telefone'))
        {{$errors->first('telefone')}}
    @endif
    <br>
    <input 
        name="email" 
        value="{{ old('email') }}" 
        type="text" 
        placeholder="E-mail" 
        class="{{$classe}}"
    >
    @if($errors->has('email'))
        {{$errors->first('email')}}
    @endif
    <br>
    <select name="motivo_contatos_id" class="{{$classe}}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $key => $motivo_contato)
            <option 
                value="{{$motivo_contato->id}}" 
                {{old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : ''}}
            >
                {{$motivo_contato->motivo_contato}}
            </option>
        @endforeach
    </select>
    {{$errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : ''}}
    <br>
    <textarea name="mensagem" class="{{$classe}}">{{(old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem'}}</textarea>
    {{$errors->has('mensagem') ? $errors->first('mensagem') : ''}}
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>