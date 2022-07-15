@extends('gentelella.layouts.app')


@section('content')
<div class="x_panel modal-content">
    <div class="x_title">
       <h2>Novo(a) Voluntário</h2>
       <div class="clearfix"></div>
    </div>
    <div class="x_panel">
       <div class="x_content">
        <form action="{{url('/voluntario')}}"  method="POST">
            {{ csrf_field() }}
                <div class="row ">
                        <div class="col-lg-6 mb-3 container">
                            <label class="form-label fw-normal" for="nomeCompleto">Nome Completo:</label>
                            <input required class="form-control" name="nome" type="text" id="nomeCompleto" placeholder="Nome Completo" maxlength="96">
                        </div>
                        <div class="col-lg-4 mb-3 form-group">
                            <label class="form-label fw-normal">Data de Nascimento:</label>
                            <input required class="form-control datepicker" name="data_de_nascimento" id="data-de-nascimento" type="date" placeholder="dd/mm/aaaa" >
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">CPF:</label>
                            <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" pattern=".{14,}" maxlength="14" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">Tipo Sanguineo:</label>
                            <input type="text" id="rh_fator" name="tipo_sanguineo" placeholder="RH" pattern=".{3,}" maxlength="3" class="form-control" required>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <label class="form-label fw-normal">Email:</label>
                            <input type="email" id="email" name="email" placeholder="Email"  maxlength="50" class="form-control" required>
                        </div>
                        
                        
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">Nível de Instrução:</label>
                            <input type="text" id="nv_instruction" name="nivel_instrucao" placeholder="Nível de Instrução"  maxlength="32" class="form-control" required>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <label class="form-label fw-normal">Endereço:</label>
                            <input type="text" id="adress" name="endereco" placeholder="Endereço"  maxlength="50" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">Complemento:</label>
                            <input type="text" id="complement" name="complemento" placeholder="Complemento"  maxlength="50" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">Cep:</label>
                            <input type="text" id="cep" name="cep" placeholder="00000-000"  maxlength="9" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">Bairro:</label>
                            <input type="text" id="bairro" name="bairro" placeholder="Bairro"  maxlength="50" class="form-control" required>
                        </div>
                        <div class="col-md-4 mb-3 form-group">
                            <label class="form-label fw-normal">Municipio:</label>
                            <input type="text" id="municipio" name="municipio" placeholder="Municipio"  maxlength="50" class="form-control" required>
                        </div>
                        
                        <div class="col-md-5 mb-3 form-group">
                            <label class="form-label fw-normal">Telefone:</label>
                            <input type="text" id="telefone" name="telefone" placeholder="(21)XXXXX-XXXX"  maxlength="14" class="form-control" required>
                        </div>
                       

                        <div class="row clonedata">
                            <div id="select1" class="col-md-8 col-sm-12">
                                <label class="control-label ">Profissão:</label>
                                <select  required class="form-control" name="profissao_nome[]" id="profissao">
                                    <option value="" selected>Selecione uma profissão</option>
                                    @foreach ($profissoes as $profisao)
                                        <option value="{{ $profisao->nome }}" >{{ $profisao->nome }}</option>
                                    @endforeach
                                        
                                </select>
                            </div>   
                            
                            
                            <div class="col-md-4 tn-buttons">
                                <label class="control-label">Adicionar:</label>
                                <br/>
                                 <button type="button" class="mb-xs mr-xs btn btn-info addmore"><i class="fa fa-plus"></i></button>
                                 {{-- <button type="button" class="mb-xs mr-xs btn btn-danger removemore"><i class="fa fa-remove"></i></button> --}}
                            </div>
                              
                        </div>
                        <div id="packagingappendhere">
                           
                        </div>


                        <div class="row clonedata">
                            <div id="select1" class="col-md-8 col-sm-12">
                                <label class="control-label ">Experiêcia:</label>
                                <select  required class="form-control" name="experiencia_nome[]" id="profissao">
                                    <option value="" selected>Selecione uma Experiêcia</option>
                                    @foreach ($experiencias as $experiencia)
                                        <option value="{{ $experiencia->nome }}" >{{ $experiencia->nome }}</option>
                                    @endforeach
                                        
                                </select>
                            </div>   
                            
                            
                            <div class="col-md-4 tn-buttons">
                                <label class="control-label">Adicionar:</label>
                                <br/>
                                 <button id="1" type="button" class="mb-xs mr-xs btn btn-info addmore2"><i class="fa fa-plus"></i></button>
                                 {{-- <button type="button" class="mb-xs mr-xs btn btn-danger removemore"><i class="fa fa-remove"></i></button> --}}
                            </div>
                              
                        </div>
                        <div id="packagingappendhere2">
                           
                        </div>



                       
            </div>
            <br>
            <div class="card-footer text-center">
                <button type="submit" id="btn_salvar" class="btn btn-primary">Salvar</button>
            </div>
         </form>
   </div>
</div>
</div>

@endsection

@push('scripts')

<script type="text/javascript">


    //jquery
    $(document).on('click', '.addmore', function (ev) {
        var $clone = $(this).parent().parent().clone(true);
        var $newbuttons = "<label>Adicionar:</label><br><button type='button' class='mb-xs mr-xs btn btn-info addmore'><i class='fa fa-plus'></i></button><button type='button' class='mb-xs mr-xs btn btn-danger removemore'><i class='fa fa-remove'></i></button>";
        $clone.find('.tn-buttons').html($newbuttons).end().appendTo($('#packagingappendhere'));
    });

    $(document).on('click', '.removemore', function () {
        $(this).parent().parent().remove();
    });

    $(document).on('click', '.addmore2', function (ev) {
        var $clone = $(this).parent().parent().clone(true);
        var $newbuttons = "<label>Adicionar:</label><br><button type='button' class='mb-xs mr-xs btn btn-info addmore'><i class='fa fa-plus'></i></button><button type='button' class='mb-xs mr-xs btn btn-danger removemore'><i class='fa fa-remove'></i></button>";
        $clone.find('.tn-buttons').html($newbuttons).end().appendTo($('#packagingappendhere2'));
    });

    $(document).on('click', '.removemore', function () {
        $(this).parent().parent().remove();
    });
    

	</script>
@endpush