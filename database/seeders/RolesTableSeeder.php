<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Админ',
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'user']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Наблюдатель',
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'beta-member']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Промо-участник',
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'member']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Участник',
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'vip-member']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Вип-участник',
            ])->save();
        }
    }
}
