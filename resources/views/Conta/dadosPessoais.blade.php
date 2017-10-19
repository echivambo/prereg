@extends('templat.templat')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1 class="title-pg text-center">Dados Pessoais</h1>

                        <div class="col-md-12">
                            <form class="form-horizontal" method="post" action="{{route('pre-reg.store')}}">
                                <!-- Token pass input-->
                            <!--<input type="hidden" name="_token" value="{{csrf_token()}}">-->
                            {!! csrf_field() !!} <!--É o mesmo que o de cima -->
                                <div class="col-md-6">
                                    <!-- Sexo input-->
                                    <div class="form-group col-md-12">
                                        <label class="control-label" for="sexo">Sexo</label>
                                        <select name="sexo" id="sexo" class="form-control">
                                            <option value="">Selecione o seu sexo...</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Feminino">Feminino</option>
                                        </select>
                                    </div>

                                    <!-- Data de nascimento input-->
                                    <div class="form-group col-md-12">
                                        <label class="control-label" for="dataNascimento">Data de nascimento</label>
                                        <input id="dataNascimento" name="dataNascimento" type="date" placeholder="" class="form-control" value="{{$disciplina->nome or old('nome')}}">
                                    </div>


                                    <!-- Estado civil input-->
                                    <div class="form-group col-md-12">
                                        <label class="control-label" for="estadoCivil">Estado civil</label>
                                        <select name="estadoCivil" id="estadoCivil" class="form-control">
                                            <option value="">Selecione o seu estado civil...</option>
                                            <option value="Solteiro(a)">Solteiro(a)</option>
                                            <option value="Casado(a)">Casado(a)</option>
                                            <option value="Divorciado(a)">Divorciado(a)</option>
                                            <option value="Viúvo(a)">Viúvo(a)</option>
                                        </select>
                                    </div>

                                    <!-- Distrito de nascimento input-->
                                    <div class="form-group col-md-12">
                                        <label class="control-label" for="distrito">Email</label>
                                        <select name="distrito" id="distrito" class="form-control">
                                            <option value="">Selecione o distrito de nascimento...</option>
                                            <option value="Kambukuana">Kambukuana</option>
                                            <option value="kanfumo">kanfumoa)</option>
                                            <option value="Dondo">Dondo</option>
                                            <option value="Matacuana">Matacuana</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- Nome do pai input-->
                                    <div class="form-group col-md-12">
                                        <label class="control-label text-left" for="nome">Nome do pai</label>
                                        <input id="pai" name="pai" type="text" placeholder="" class="form-control" value="{{$disciplina->pseudonome or old('pseudonome')}}">
                                    </div>

                                    <!-- Nome da mae input-->
                                    <div class="form-group col-md-12">
                                        <label class="control-label" for="mae">Nome da mãe</label>
                                        <input id="mae" name="mae" type="number" placeholder="+258" class="form-control" value="{{$disciplina->nome or old('nome')}}">
                                    </div>

                                    <!-- Nível médio input-->
                                    <div class="form-group col-md-12">
                                        <label class="control-label" for="escola">Nível básico</label>
                                        <select name="escola" id="escola" class="form-control">
                                            <option value="">Selecione a escola...</option>
                                            <option value="Escola secundaria do Infulene">Escola secundária do Infulene</option>
                                            <option value="Escola Secundaria 17 de Setembro">Escola Secundaria 17 de Setembro</option>
                                        </select>
                                    </div>

                                    <!-- Ano em que concluio o nivel medio input-->
                                    <div class="form-group col-md-12">
                                        <label class="control-label" for="ano">Ano em que concluio o ensino básico</label>
                                        <input id="ano" name="ano" type="number" placeholder="" min="1990" max="2050" class="form-control" value="{{$disciplina->nome or old('nome')}}">
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 widget-right">
                                        <input type="submit" class="btn btn-primary btn-md pull-right" value="Gravar">
                                        <a href="{{route('pre-reg.index')}}" id="voltar" class="btn btn-warning btn-md pull-right">Voltar</a>
                                    </div>
                                </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>	<!--/.main-->
        </div>
    </div>
@endsection