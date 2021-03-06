@extends('app')

@section('customStyles')


@endsection
@section('title', ' - Detalhes Espécie')

@section('content')
<div class="col-sm-10 col-md-10 col-sm-offset-2 col-md-offset-1 centered-form">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="modal-title">Detalhes Espécie</h3>
		</div>
		<div class="panel-body">						
			<div>
				<h4 class="border-bottom sm-margin-left">Dados da Espécie</h4>
				<div class="col-xs-12 col-md-12">
					<p>
						<label for="nome_comum">Nome da Comum: </label>
						<span>{{$especie->nome_comum}}</span>
					</p>
					<p>
						<label for="especie">Nome da Espécie: </label>
						@if($especie->especie != "")	
						<span>{{$especie->especie}}</span>
						@else
						<span>Não Definido</span>
						@endif
					</p>
					<p>
						<label for="cultivar">Cultivar: </label>
						@if($especie->cultivar != "")	
						<span>{{$especie->cultivar}}</span>
						@else
						<span>Não Definido</span>
						@endif
					</p>
				</div>			
				<div >

					<h4 class="border-bottom sm-margin-left">Paramêtros Ideiais</h4>
					<div class="col-xs-12 col-md-12">
						<p>
							<label for="cultivar">Ph do Solo Ideal: </label>
							@if($especie->ph_solo_ideal != null)	
							<span>{{$especie->ph_solo_ideal}}</span>
							@else
							<span>Não Definido</span>
							@endif
						</p>

						<p>
							<label for="ph_agua_ideal">Ph da Água Ideal: </label>
							@if($especie->ph_agua_ideal != null)	
							<span>{{$especie->ph_agua_ideal}}</span>
							@else
							<span>Não Definido</span>
							@endif
						</p>
						<p>
							<label for="temperatura_atmosferica_ideal">Temperatura Atmosférica Ideal: </label>
							@if($especie->temperatura_atmosferica_ideal != null)	
							<span>{{$especie->temperatura_atmosferica_ideal}}</span>
							@else
							<span>Não Definido</span>
							@endif
						</p>
						<p>
							<label for="temperatura_solo_ideal">Temperatura do Solo Ideal: </label>
							@if($especie->temperatura_solo_ideal != null)	
							<span>{{$especie->temperatura_solo_ideal}}</span>
							@else
							<span>Não Definido</span>
							@endif
						</p>
						<p>
							<label for="condutividade_electrica_solo_ideal">Condutividade Eléctrica do Solo Ideal : </label>
							@if($especie->condutividade_electrica_solo_ideal != null)	
							<span>{{$especie->condutividade_electrica_solo_ideal}}</span>
							@else
							<span>Não Definido</span>
							@endif
						</p>



					</div>			
					<div >
						<h4 class="border-bottom sm-margin-left">Informação Adicional</h4>
						<div class="col-xs-12 col-md-12">
							<p>
								<label for="tipo_fisionomico">Tipo Fisionómico: </label>
								@if($especie->tipo_fisionomico != null)	
								<span>{{$especie->tipo_fisionomico}}</span>
								@else
								<span>Não Definido</span>
								@endif
							</p>
							<p>
								<label for="habitat">Habitat: </label>
								@if($especie->habitat != null)	
								<span>{{$especie->habitat}}</span>
								@else
								<span>Não Definido</span>
								@endif
							</p>
							<p>
								<label for="epoca_floracao">Época de Floração: </label>
								@if($especie->epoca_floracao != null)	
								<span>{{$especie->epoca_floracao}}</span>
								@else
								<span>Não Definido</span>
								@endif
							</p>
							<p>
								<label for="coleccao_termica">Colecção Térmica: </label>
								@if($especie->coleccao_termica != null)	
								<span>{{$especie->coleccao_termica}}</span>
								@else
								<span>Não Definido</span>
								@endif
							</p>
						</div>		
					</div>								

				</div>
			</div>

		</div>
		<div class="panel-footer"> 
			<div class="col-sm-12 input-group">
				<a href="{{ url()->previous() }}" role="button" name="cancelar"class="btn btn-default pull-right">Voltar</a>
				<a class="btn btn-success pull-right" toggle="tooltip" data-placement="top" title="Editar Espécie"  role="button" name="editar" href="/admin/especies/editar/{{$especie->id}}">Editar</a>
			</div>
		</div>
		
	</div>
</div>

@endsection
@section('customScripts')
@endsection
