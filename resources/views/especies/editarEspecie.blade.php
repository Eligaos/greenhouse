@extends('app')

@section('customStyles')


@endsection
@section('title', ' - Editar Espécie')

@section('content')
<div class="col-sm-10 col-md-10 col-sm-offset-2 col-md-offset-1 centered-form">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="modal-title">Editar Espécie</h3>
		</div>
		<div class="panel-body">
			
			<form method="POST" action="/admin/especies/editar/submit/{{$especie->id}}">
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">							
				<div class="form-group">
					<h4 class="border-bottom sm-margin-left">Dados da Espécie</h4>
					<div class="col-xs-12 col-md-12">
						<label for="nome_comum">Nome Comum</label>
						<div class="input-group margin-bottom">					
							@if(old('nome_comum')!=null)	
							<input type="text" name="nome_comum" id="nome_comum" value="{{ old('nome_comum') }}" placeholder="Insira o nome comum" class="form-control"></input><span class="input-group-addon"></span>
							@else
							<input type="text" class="form-control" id="nome_comum"  name="nome_comum" value="{{$especie->nome_comum}}"placeholder="Insira o nome comum" required><span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
							@endif
						</div>
						<label for="especie">Espécie</label>
						<div class="input-group margin-bottom">								
							@if(old('especie')!=null)	
							<input type="text" name="especie'" value="{{ old('especie') }}" placeholder="Insira o nome da espécie" class="form-control"></input><span class="input-group-addon"></span>
							@else
							<input type="text" class="form-control" id="especie"  name="especie" value="{{$especie->especie}}" placeholder="Insira o nome da espécie" required><span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
							@endif

						</div>

						<label for="cultivar">Cultivar</label>
						<div class="input-group lg-margin-bottom">								
							<input type="text" class="form-control" id="cultivar" value="{{$especie->cultivar}}" name="cultivar" placeholder="Insira o nome do cultivar"><span class="input-group-addon"></span>
						</div>
					</div>		
				</div>		
				<div class="form-group">
					<h4 class="border-bottom sm-margin-left">Paramêtros Ideiais</h4>
					<div class="col-xs-12 col-md-12">
						<label  for="ph_solo_ideal">Ph do Solo Ideal</label>
						<div class="input-group margin-bottom">					
							<input type="text" class="form-control"  value="{{$especie->ph_solo_ideal}}" id="ph_solo_ideal" name="ph_solo_ideal" placeholder="Insira o ph ideal do solo"><span class="input-group-addon">
						</div>
						<label for="ph_agua_ideal">Ph da Água Ideal </label>
						<div class="input-group margin-bottom">								
							<input type="text" class="form-control"  value="{{$especie->ph_agua_ideal}}" id="ph_agua_ideal"  name="ph_agua_ideal" placeholder="Insira o ph ideal da água"><span class="input-group-addon"></span>
						</div>

						<label for="temperatura_atmosferica_ideal">Temperatura Atmosférica Ideal</label>
						<div class="input-group margin-bottom">								
							<input type="text" class="form-control" value="{{$especie->temperatura_atmosferica_ideal}}" id="temperatura_atmosferica_ideal"  name="temperatura_atmosferica_ideal" placeholder="Insira a temperatura atmosférica ideal"><span class="input-group-addon"></span>
						</div>
						<label for="temperatura_solo_ideal">Temperatura do Solo Ideal </label>
						<div class="input-group margin-bottom">								
							<input type="text" class="form-control" value="{{$especie->temperatura_solo_ideal}}" id="temperatura_solo_ideal"  name="temperatura_solo_ideal" placeholder="Insira a temperatura ideal do solo"><span class="input-group-addon"></span>
						</div>

						<label for="condutividade_electrica_solo_ideal">Condutividade Eléctrica do Solo Ideal </label>
						<div class="input-group lg-margin-bottom">								
							<input type="text" class="form-control" value="{{$especie->condutividade_electrica_solo_ideal}}"  id="condutividade_electrica_solo_ideal"  name="condutividade_electrica_solo_ideal" placeholder="Insira a condutividade eléctrica do solo ideal"><span class="input-group-addon"></span>
						</div>
					</div>	
				</div>
				<div class="form-group">
					<h4 class="border-bottom sm-margin-left">Informação Adicional</h4>
					<div class="col-xs-12 col-md-12">
						<label  for="tipo_fisionomico">Tipo Fisionómico</label>
						<div class="input-group margin-bottom">			
							<input type="text" class="form-control" value="{{$especie->tipo_fisionomico}}" id="tipo_fisionomico" name="tipo_fisionomico" placeholder="Insira o tipo fisionómico"><span class="input-group-addon">
						</div>

						<label for="habitat">Habitat</label>
						<div class="input-group margin-bottom">			
							<input type="text" class="form-control" value="{{$especie->habitat}}" id="habitat" name="habitat" placeholder="Insira o habitat" ><span class="input-group-addon">
						</div>

						<label  for="epoca_floracao">Época de Floração</label>
						<div class="input-group margin-bottom">			
							<input type="text" class="form-control" value="{{$especie->epoca_floracao}}"  id="epoca_floracao" name="epoca_floracao" placeholder="Insira a época de floração" ><span class="input-group-addon">
						</div>

						<label for="coleccao_termica">Colecção Térmica</label>
						<div class="input-group lg-margin-bottom">			
							<input type="text" class="form-control"  value="{{$especie->coleccao_termica}}"  id="coleccao_termica"  name="coleccao_termica" placeholder="Insira a colecção teŕmica"><span class="input-group-addon"></span>
						</div>		
					</div>		
				</div>	

			</div>
			<div class="panel-footer"> 
				<div class="col-sm-12 input-group">
					<a href="{{ url()->previous() }}" role="button" name="cancelar"class="btnL btn btn-default pull-right">Cancelar</a>
					<input type="submit" id="submit" value="Guardar" class="btn btn-success pull-right">
				</div>
			</div>
		</form>
		@endsection
		@section('customScripts')
		@endsection
