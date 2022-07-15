@extends('gentelella.layouts.app')


@section('content')
<div class="x_panel modal-content">
    <div class="x_title">
       <h2>Experências</h2>
       <ul class="nav navbar-right panel_toolbox">
          <a href="{{url('experiencia/create')}}" class="btn-circulo btn  btn-success btn-md  pull-right " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nova Sala"> Nova Experiência </a>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_panel">
       <div class="x_content">
         
        <table id="tb_experiencias" class="table table-hover table-striped compact">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Açoes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($experiencias as $experiencia)
                    <tr>
                        <td>{{$experiencia->nome}}</td>
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
            var tb_experiencias = $("#tb_experiencias").DataTable({
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