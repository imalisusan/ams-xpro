<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'admin' => [
            'users' => 'c,r,u,d',
            'profile' => 'c,r,u,d',
            'courses' => 'c,r,u,d'
        ],
        'user' => [
            'profile' => 'r,u',
            'courses' => 'r,u',
            'feestatement' => 'r',
            'feestructure' => 'r'
        ],
        'student' => [
            'profile' => 'r,u',
            'courses' => 'r,u',
            'feestatement' => 'r',
            'feestructure' => 'r'
            
        ],

        'lecturer' => [
            'courses' => 'c,r,u,d',
            'coursemarks' => 'c,r,u,d',
        ],

        'mentor' => [
            'mentors' => 'c,r,u,d',
            'mentorusers' => 'c,r,u,d',
            'mentorsessions' => 'c,r,u,d',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
