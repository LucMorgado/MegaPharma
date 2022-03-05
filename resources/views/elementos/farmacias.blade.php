<div class="bg-secondary d-flex justify-content-center py-3">
  <div class="bg-white rounded resultado p-3 position-relative">
      <h1 class=" text-center display-3 fw-light lh-sm text-primary pt-4 pb-0">{{ Str::upper('Farmacia') }}</h1>
      <p  class="text-center fs-6 text-highlight lh-sm pt-5">{{ Str::upper('endereco') }}</p>
      <p  class=" text-center display-5 pb-5 text-primary">{{ Str::upper('telefone') }}</p>
      <div class="text-center position-absolute start-50 bottom-0 translate-middle">
          <button  class=" btn btn-highlight" data-bs-toggle="modal" data-bs-target="#ver-{{ 'id' }}">Ver encarte</button>
      </div>
  </div>
</div>

<!-- Modal encarte-->
<div class="modal fade" id="ver-{{'id' }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="text-center">{{ Str::upper('nome') }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
@isset($encarte)
      <img src="{{ asset('encartes/' . $encarte['nome']) }}" class="img-fluid" alt="...">
      <div class="modal-footer justify-content-evenly">
        <a href="{{ asset('encartes/' . $encarte['nome']) }}" download type="button" class="btn btn-success"><i class="bi bi-arrow-down-circle"></i> Baixar</a>
@else
        <p class="text-center fs-3">Sem Encarte</p>
        <div class="modal-footer justify-content-evenly">
@endisset
    </div>
  </div>
</div>
</div>

<style type="text/css">
  
  .resultado{ width: auto; }
</style>