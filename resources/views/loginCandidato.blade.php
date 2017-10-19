
@extends('admin.layoutCandidato')
@section('contentCandidato')

<div class="col-md-offset-4 col-md-4 transparence">
    <div class="white-box">
    <h1>INFATEC</h1><br>
        <form class="form-horizontal form-material">
            <div class="form-group">
                <label class="col-md-12">Codigo do candidato</label>
                <div class="col-md-12">
                    <input type="text" placeholder="55201" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Password</label>
                <div class="col-md-12">
                    <input type="password" placeholder="**********" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button class="btn btn-success  pull-right">Login</button>
                    <div class="login-help">
                        <a href="{{route('pre-reg.index')}}" class="conta">Criar conta</a> <b>-</b> <a href="#" class="conta">Esquecí a senha</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection()

