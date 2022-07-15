@extends('gentelella.layouts.app')


@section('content')


<div class="x_panel modal-content">
    <div class="x_title">
       <h2>Voluntários</h2>
       <ul class="nav navbar-right panel_toolbox">
          <a href="{{url('voluntario/create')}}" class="btn-circulo btn  btn-success btn-md  pull-right " data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nova Sala"> Novo(a) Voluntário </a>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_panel">
       <div class="x_content">
         <table id="tb_voluntarium" class="table table-hover table-striped compact">
           


            <thead>
               <tr>
                  <th>Nome</th>
                  <th>Profissões</th>
                  <th>Experiência</th>
                  <th>Ações</th>

               </tr>
            </thead>
            <tbody>
               @foreach ($voluntarios as $voluntario)
                   <tr>
                     <td>{{$voluntario->nome}}</td>
                     <td>
                        @foreach ($voluntario->profissoes as $profissoes)
                            {{$profissoes->profissao_nome}}
                            <br>
                        @endforeach
                     </td>
                     <td>@foreach ($voluntario->experiencias as $experiencias)
                        {{$experiencias->experiencia_nome}}
                        <br>
                    @endforeach</td>
                     <td></td>
                   </tr>
               @endforeach

            </tbody>
           {{-- <tbody> 
                  
                  
                     @foreach ($voluntario as $volutarium)
                        <th>
                           <td>{{$volutarium->nome}}</td>
                        </th>
                     @endforeach
                  
                  
                     <td>
                        @foreach ($profissao as $profissaoum)
                           <th>
                              <td>{{$profissaoum->profissao_nome}}</td>
                           </th>
                        @endforeach
                     </td>
                     
                     <td>
                        @foreach ($experiencia as $experienciaum)
                           <th>
                              <td>{{$experienciaum->experiencia_nome}}</td>
                           </th>
                        @endforeach
                     </td>
                  
                
         </tbody> --}}
        </table>
      
       </div>
    </div>
 </div>

@endsection

@push('scripts')

	<script type="text/javascript">
 
 $(document).ready(function(){
            var tb_voluntarium = $("#tb_voluntarium").DataTable({
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