@extends('layouts.app')

@section('content')
    <!-- /.navbar -->
    <header id="head" class="secondary"></header>

    <!-- container -->
    <div class="container">


        <div class="row">
            
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title"></h1>
                </header>
                
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <h3 class="thin text-center"><b>Silahkan Masuk Dengan Akun Yang Sudah Anda Punya</b></h3>
                            <br>
                            
                            {!! Form::open(['url'=>'login', 'class'=>'form-horizontal']) !!}
                            <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                                {!! Form::label('email','Alamat Email *',['class'=>'col-md-12']) !!}
                                <div class="col-md-12">
                                    {!! Form::email('email',null,['class'=>'form-control']) !!}
                                    {!! $errors->first('email','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
                                {!! Form::label('password','Kata Sandi *',['class'=>'col-md-12']) !!}
                                <div class="col-md-12">
                                    {!! Form::password('password',['class'=>'form-control']) !!}
                                    {!! $errors->first('password','<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label>
                                            {!! Form::checkbox('remember') !!} Ingat Saya
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8">
                                    <b><a href="{{ url('/password/reset')}}">Lupa Kata Sandi ?</a></b>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <button class="btn btn-action btn-primary" type="submit">Masuk</button>
                                </div>
                            </div>
                            {!! Form::close() !!}      
                        </div>
                    </div>

                </div>
                
            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->
@endsection
