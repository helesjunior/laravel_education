@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Novo usuários</h3>
            {!!
            form($form->add('Cadastrar','submit',[
                'attr' => ['class' => 'btn btn-primary'],
                'label' => Icon::create('floppy-disk').' Inserir'
            ]))
            !!}
        </div>
    </div>

@endsection