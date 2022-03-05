<div class="container position-relative">
	<div class="busca bg-primary p-3">
	<h3 class="text-center display-3 text-white">Encontre uma</h3>
	<h2 class="text-center display-3 text-secondary"><b>Megapharma</b></h2>
	<h3 class="text-center display-3 text-white">perto de vocÊ</h3>

	<form>
		<div id="nossasLojas">  
            <div class="input-group mb-3">
            <select required name="estado" id="selEstados" class="form-select bdRoundLeft" aria-label="Default select example" onchange="cidades(this.value);">
              <option selected>Estado</option>
            </select>
            <select name="cidade" disabled class="form-select" aria-label="Default select example" id="selCidade" onchange="bairros(this.value);">
              <option  selected>Cidade</option>
            </select>
            <select name="bairro" disabled class="form-select bdRoundRight" aria-label="Default select example" id="selBairro" onchange="botao(this.value);">
              <option selected>Bairro</option>
            </select>
        </div>
        <div class="text-center">
                <button disabled class="btn btn-highlight" id="selBt" onclick="encontrar();">Encontrar</button>
        </div>
    </div>
	</form>
	</div>
</div>


<style type="text/css">
	

	.busca { width: 55%;min-height: 400px;z-index: 9; }
</style>