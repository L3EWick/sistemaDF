@extends('gentelella.layouts.app')


@section('content')


<div class="x_panel modal-content">
    <div class="x_title">
       <h2>Profissões</h2>
       <ul class="nav navbar-right panel_toolbox">
          <a href="{{url('profissao/create')}}" class="btn-circulo btn  btn-success btn-md  pull-right " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nova Sala"> Nova Profissão </a>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_panel">
       <div class="x_content">
         <table id="tb_Profissoes" class="table table-hover table-striped compact">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Açoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profissoes as $profisao)
                    <tr>
                        <td>{{$profisao->nome}}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
       </div>
    </div>
 </div>

@endsection

@push('scripts')

	<script type="text/javascript">
$(document).ready(function(){
            var tb_Profissoes = $("#tb_Profissoes").DataTable({
               language: {
                     'url' : '{{ asset('js/portugues.json') }}',
               "decimal": ",",
               "thousands": "."
               },
               stateSave: true,
               stateDuration: -1,
               responsive: true,
            })
         });

	</script>
@endpush