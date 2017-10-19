
@extends('admin.layout')
@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="box-title titulo">Registo de cursos</h3>
                 <div class="panel-body">
                    <form class="form-horizontal" action="" method="post">
                        <div class="col-md-6">
                        <fieldset>
                            <!-- Disciplina input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="nomeC">Curso</label>
                                <div class="col-md-9">
                                    <input id="nomeC" name="nomeC" type="text" placeholder="Designaçäo do Curso" class="form-control" required>
                                </div>
                            </div>

                            <!-- Aliases input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="pseudonioC">Pseudonio</label>
                                <div class="col-md-9">
                                    <input id="pseudonioC" name="pseudonioC" type="text" placeholder="Pseudonio do curso" class="form-control" required>
                                </div>
                            </div>
                        </fieldset>
                        </div>

                        <div class="col-md-6">
                        <fieldset>
                            <!-- Disciplina input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="nome">Disciplina</label>
                                <div class="col-md-9">
                                    <input id="nome" name="nome" type="text" placeholder="Designaçäo da disciplina" class="form-control" required>
                                </div>
                            </div>

                            <!-- Aliases input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="pseudonio">Pseudonio</label>
                                <div class="col-md-9">
                                    <input id="pseudonio" name="pseudonio" type="text" placeholder="Pseudonio da diciplina" class="form-control" required>
                                </div>
                            </div>

                            <!-- Peso input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="peso">Peso</label>
                                <div class="col-md-9">
                                    <input id="peso" name="peso" type="text" placeholder="Peso da diciplina" class="form-control" required>
                                </div>
                            </div>

                        </fieldset>
                        </div>
                        <div class="col-md-12">
                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 widget-right">
                                    <button name="gravar" type="submit" class="btn btn-success btn-md pull-right">Gravar</button>
                                </div>
                            </div>
                        </div>
                    </form>

                <div class="col-md-12">
                        <h3 class="box-title titulo">lista de cursos</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Deshmukh</td>
                                    <td>Prohaska</td>
                                    <td>@Genelia</td>
                                    <td>admin</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Deshmukh</td>
                                    <td>Gaylord</td>
                                    <td>@Ritesh</td>
                                    <td>member</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sanghani</td>
                                    <td>Gusikowski</td>
                                    <td>@Govinda</td>
                                    <td>developer</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Roshan</td>
                                    <td>Rogahn</td>
                                    <td>@Hritik</td>
                                    <td>supporter</td>
                                </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.main-->

@endsection()