<?php

use App\Models\User;

class SentrySeeder extends Seeder {

    public function run()
    {

        Sentry::getUserProvider()->create(array(
            'email'       => 'nicholaspball@gmail.com',
            'password'    => "admin",
            'first_name'  => 'Nick',
            'last_name'   => 'Ball',
            'activated'   => 1,
        ));

        Sentry::getGroupProvider()->create(array(
            'name'        => 'Admin',
            'permissions' => array('admin' => 1),
        ));

        // Assign user permissions
        $adminUser  = Sentry::getUserProvider()->findByLogin('nicholaspball@gmail.com');
        $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
        $adminUser->addGroup($adminGroup);
    }

}