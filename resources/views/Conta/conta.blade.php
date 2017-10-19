
<div class="container">
<div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                        <h1 class="title-pg text-center">Criar Conta</h1>

                    <div class="col-md-12">
                            <form class="form-horizontal" method="post" action="{{route('pre-reg.store')}}">
                            <!-- Token pass input-->
                            <!--<input type="hidden" name="_token" value="{{csrf_token()}}">-->
                            {!! csrf_field() !!} <!--É o mesmo que o de cima -->
                           <div class="col-md-6">
                                <!-- Apelido input-->
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="apelido">Apelido</label>
                                        <input id="apelido" name="apelido" type="text" placeholder="" class="form-control" value="{{$disciplina->nome or old('nome')}}">
                                </div>

                                <!-- Celular input-->
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="celular">Celular</label>
                                        <input id="celular" name="celular" type="number" placeholder="+258" class="form-control" value="{{$disciplina->nome or old('nome')}}">
                                </div>

                                <!-- Email input-->
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="email">Email</label>
                                        <input id="email" name="email" type="email" placeholder="" class="form-control" value="{{$disciplina->nome or old('nome')}}">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <!-- senha input-->
                                <div class="form-group col-md-12">
                                    <label class="control-label text-left" for="nome">Outros nomes</label>
                                        <input id="nome" name="nome" type="text" placeholder="" class="form-control" value="{{$disciplina->pseudonome or old('pseudonome')}}">
                                </div>

                                <!-- Celular Alternativo input-->
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="celular2">Celular Alternativo</label>
                                        <input id="celular2" name="celular2" type="number" placeholder="+258" class="form-control" value="{{$disciplina->nome or old('nome')}}">
                                </div>

                                <!-- Senha input-->
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="celular2">Senha</label>
                                        <input id="senha" name="senha" type="number" placeholder="" class="form-control" value="{{$disciplina->nome or old('nome')}}">
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 widget-right">
                                    <input type="submit" class="btn btn-primary btn-md pull-right" value="Gravar"> 
                                    <a href="{{route('loginCandidato')}}" id="voltar" class="btn btn-warning btn-md pull-right">Voltar</a>
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