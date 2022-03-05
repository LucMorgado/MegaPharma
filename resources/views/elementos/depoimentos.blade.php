<div id="depoimentos" class="d-flex container justify-content-center">
@for ($i = 0; $i < 3; $i++)
	<div class="dep rounded-3 m-3 p-3">
		
		<h3 class="text-center mb-4">"Melhor da região"</h3>
		<div class="avaliacao d-flex justify-content-center">
			@for ($j = 0; $j < 5; $j++)
		<span class="m-2">
				@include('icones.star')
		</span>
			@endfor
		</div>
		<h4 class="text-center fs-4">Marcelo Silva</h4>
		<p class="text-center fs-6">Imbariê, Duque de Caxias/RJ</p>
	</div>
@endfor

</div>

<style type="text/css">
	.dep { border: 1px solid var(--bs-primary); }
</style>