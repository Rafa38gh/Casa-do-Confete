<x-app-layout>
<title>Edit</title>


<form action="{{ route('recommendations.update',['recommendation' => $recommendation->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <textarea name="body" cols="100" rows="30" placeholder="Escreva as recomendações aqui"></textarea>

    <button type="submit">Atualizar</button>
</form>
</x-app-layout>