@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Listagem de Usuários</h3>
            {!! Button::primary('Novo usuário')->asLinkTo(route('admin.users.create')) !!}


        </div>
        <div class="row">
            {!!
            Table::withContents($users->items())
            ->striped()
            ->condensed()
            ->hover()
            ->callback('Açoes', function ($field,$model){
                $linkEdit = route('admin.users.edit',['user' => $model->id]);
                $linkShow = route('admin.users.show',['user' => $model->id]);
                return Button::withIcon(Icon::create('folder-open').'&nbsp;&nbsp;Ver')->asLinkTo($linkShow)->small().
                       Button::withIcon(Icon::create('pencil').'&nbsp;&nbsp;Editar')->asLinkTo($linkEdit)->small();
            })
            !!}
        </div>
        {!! $users->links() !!}
    </div>

@endsection