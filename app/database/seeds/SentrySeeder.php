<?php

use App\Models\User;

class SentrySeeder extends Seeder {

    public function run()
    {

        // Sentry::getUserProvider()->create(array(
        //     'email'       => 'nicholaspball@gmail.com',
        //     'password'    => "admin",
        //     'first_name'  => 'Nick',
        //     'last_name'   => 'Ball',
        //     'activated'   => 1,
        // ));

        Sentry::getUserProvider()->create(array(
            'email'       => 'shacarey@gmail.com',
            'password'    => "wilder1!",
            'first_name'  => 'Shannon',
            'last_name'   => 'Carey',
            'activated'   => 1,
        ));

        // Sentry::getGroupProvider()->create(array(
        //     'name'        => 'Admin',
        //     'permissions' => array('admin' => 1),
        // ));

        // Assign user permissions
        // $adminUser  = Sentry::getUserProvider()->findByLogin('nicholaspball@gmail.com');
        // $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
        // $adminUser->addGroup($adminGroup);

        $adminUser  = Sentry::getUserProvider()->findByLogin('shacarey@gmail.com');
        $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
        $adminUser->addGroup($adminGroup);
    }

}