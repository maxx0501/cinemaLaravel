
<!-- Modal -->
<div class="modal fade" id="modalDeleteFun-{{$dadosFuncionarios->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Excluir funcionário</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-light">
        Deseja excluir o(a) funcionário(a): {{$dadosFuncionarios->nomefun}}? </br>
        Se continuar não tem volta chefe!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

        <form method="post" action="{{route('apagar-funcionario',$dadosFuncionarios->id)}}">
            @method('delete')
            @csrf
        <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>
</div>