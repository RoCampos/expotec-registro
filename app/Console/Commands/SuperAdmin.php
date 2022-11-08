<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SuperAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin
                            {email : email do usuário}
                            {nome : nome do usuário}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Criar super admin';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $email = $this->argument('email');
        $nome = $this->argument('nome');

        $info = $this->fakeInfo($email, $nome);

        $admin = User::create($info);

        $this->info('Superuser created...');
        $this->table(
            [
                'name',
                'email',
            ], 
            [
                [
                'name' => $info['name'],
                'email'=> $info['email']
                ]
            ]
        );


    }


    public function fakeInfo($email, $nome) : array
    {

        $details = array();

        $details['name'] = $nome;
        $details['email']= $email;
        $details['password'] = Hash::make('123123123');
        $details['matricula'] = '123123123';        

        return $details;

    }

}
