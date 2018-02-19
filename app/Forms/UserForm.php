<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $id = $this->getData('id');

        $this
            ->add('cpf', 'text', [
                'label' => 'CPF',
                'rules' => "required|max:14|unique:users,cpf,{$id}"
            ])
            ->add('name', 'text', [
                'label' => 'Nome',
                'rules' => 'required|max:255'
            ])
            ->add('email', 'email', [
                'label' => 'E-mail',
                'rules' => "required|max:255|unique:users,email,{$id}"
            ]);
    }
}
