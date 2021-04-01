<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'institution_create',
            ],
            [
                'id'    => 18,
                'title' => 'institution_edit',
            ],
            [
                'id'    => 19,
                'title' => 'institution_show',
            ],
            [
                'id'    => 20,
                'title' => 'institution_delete',
            ],
            [
                'id'    => 21,
                'title' => 'institution_access',
            ],
            [
                'id'    => 22,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 23,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 24,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 25,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 26,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 27,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 28,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 29,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 30,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 31,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 32,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 33,
                'title' => 'task_create',
            ],
            [
                'id'    => 34,
                'title' => 'task_edit',
            ],
            [
                'id'    => 35,
                'title' => 'task_show',
            ],
            [
                'id'    => 36,
                'title' => 'task_delete',
            ],
            [
                'id'    => 37,
                'title' => 'task_access',
            ],
            [
                'id'    => 38,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 39,
                'title' => 'post_create',
            ],
            [
                'id'    => 40,
                'title' => 'post_edit',
            ],
            [
                'id'    => 41,
                'title' => 'post_show',
            ],
            [
                'id'    => 42,
                'title' => 'post_delete',
            ],
            [
                'id'    => 43,
                'title' => 'post_access',
            ],
            [
                'id'    => 44,
                'title' => 'application_create',
            ],
            [
                'id'    => 45,
                'title' => 'application_edit',
            ],
            [
                'id'    => 46,
                'title' => 'application_show',
            ],
            [
                'id'    => 47,
                'title' => 'application_delete',
            ],
            [
                'id'    => 48,
                'title' => 'application_access',
            ],
            [
                'id'    => 49,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
