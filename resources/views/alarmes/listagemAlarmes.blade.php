@extends('app')

@section('customStyles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="col-sm-10 col-sm-offset-2 col-md-offset-1">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="modal-title" >Lista de Alarmes</h3>
		</div>
			
		@if( Session::get('message'))
		<div class="col-xs-12 col-md-12 col-lg-12 alert alert-info">
			<span > {{ Session::get('message') }}</span>
		</div>
		@endif
		<div class="panel-body">
			<div class="table-container">
				@if(count($lista)!=0)	
				<table id="dataTable" class="table table-filter table-striped table-bordered table-responsive">
					<thead>						
						<tr class="success">
							<th>Estufa</th>
							<th>Regra</th>
							<th>Tipo</th>
							<th>Descricao</th>
							<th class="no-sort">Opções</th>
						</tr>
					</thead>		
					<tbody>		
						@foreach($lista as $key => $alarme)
						<tr>									
							<td>		
								<span>{{$alarme->estufa_nome}}</span>
							</td>
							@if($alarme->regra == ">")
							<td>		
								<span>Valores Superiores a {{$alarme->valor}} {{$alarme->unidade}}</span>
							</td>
							@else
							<td>		
								<span>Valores Inferiores a {{$alarme->valor}} {{$alarme->unidade}}</span>
							</td>
							@endif
							<td>		
								<span>{{$alarme->parametro}}</span>
							</td>
							<td>		
								<span>{{$alarme->descricao}}</span>
							</td>							
							<td>
								<div class="text-center">
									<a  toggle="tooltip" data-placement="top" title="Detalhes Alarme" role="button" name="detalhes" href="/admin/alarmes/detalhes/{{$alarme->alarm_id}}">  <button type="button" class="btn btn-default btn-xs">
										<span class="glyphicon glyphicon-th-list"></span> Detalhes
									</button></a>

									<a toggle="tooltip" data-placement="top" title="Editar Alarme" role="button" name="editar" href="/admin/alarmes/detalhes/{{$alarme->alarm_id}}">  <button type="button" class="btn btn-default btn-xs">
										<span class="glyphicon glyphicon-edit"></span> Editar
									</button></a>
									<a toggle="tooltip" data-placement="top" title="Remover Alarme" role="button" name="detalhes" href="#">  <button type="button" class="btn btn-default btn-xs">
										<span class="glyphicon glyphicon-remove"></span> Remover
									</button></a>
								</div>
							</td>
						</tr>													
						@endforeach
					</tbody>
				</table>	
			</div>
			@else
			<div class="text-center" >
				<h4> Não existem alarmes adicionados</h4>
			</div>
			@endif	
		</div>
		<div class="panel-footer"> 
			<div class="col-sm-12 input-group">
				<a href="/admin/alarmes/adicionar" role="button" name="adicionar" id="adicionar alarme" class="btn btn-success center-block pull-left" toggle="tooltip" data-placement="top" title="Adicionar novo Alarme">Adicionar novo Alarme</a>
				<a href="/admin/alarmes/historico" role="button" name="historico" id="historico alarme" class="btn btn-default center-block pull-left btnL" toggle="tooltip" data-placement="top" title="Histórico Alarmes">Histórico de Ocorrência de Alarmes</a>
			</div>
		</div>	
	</div>			
</div>
@endsection

@section('customScripts')

<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src="{{asset('js/dataTable.js')}}"></script>
@endsection