@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Editar usuário</h3>
            {!!
            form($form->add('Editar','submit',[
                'attr' => ['class' => 'btn btn-primary'],
                'label' => Icon::create('floppy-disk').' Editar'
            ]))
            !!}
        </div>
    </div>

@endsection