<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);


        //Manger Permission
        App\Models\Permission::insert(['title'=>'اضافة ادمن','for'=>'الادمن']);
        App\Models\Permission::insert(['title'=>'تعديل ادمن','for'=>'الادمن']);
        App\Models\Permission::insert(['title'=>'حذف ادمن','for'=>'الادمن']);
        App\Models\Permission::insert(['title'=>'اظهار ادمن','for'=>'الادمن']);


        //Manger Permission
        App\Models\Permission::insert(['title'=>'اضافة وظيفة','for'=>'الوظائف']);
        App\Models\Permission::insert(['title'=>'تعديل وظيفة','for'=>'الوظائف']);
        App\Models\Permission::insert(['title'=>'حذف وظيفة','for'=>'الوظائف']);
        App\Models\Permission::insert(['title'=>'اظهار وظيفة','for'=>'الوظائف']);


        $role = new \App\Models\Role();
        $role->title = 'المدير';
        $role->save();


        $perm = \App\Models\Permission::all(['id'])->toArray();
        $role->permissions()->sync($perm);

        $admin = new \App\Models\Admin();

            $admin->username = 'admin';
            $admin->password = bcrypt('123456');
            $admin->email = 'admin@admin.com';
            $admin->name = 'admin';

             $admin->save();

             $admin->roles()->sync($role);









    App\Models\User::insert(['verified' => 1, 'name' => 'user','password' => bcrypt('123456'),'email' => 'user@user.com']);




       App\Models\Permission::insert(['title'=>'Create Trip','for'=>'trip']);
       App\Models\Permission::insert(['title'=>'Edit Trip','for'=>'trip']);
       App\Models\Permission::insert(['title'=>'Delete Trip','for'=>'trip']);
       App\Models\Permission::insert(['title'=>'Create Category','for'=>'category']);
       App\Models\Permission::insert(['title'=>'Edit Category','for'=>'category']);
       App\Models\Permission::insert(['title'=>'Delete Category','for'=>'category']);
       App\Models\Permission::insert(['title'=>'Create Slider','for'=>'slider']);
       App\Models\Permission::insert(['title'=>'Edit Slider','for'=>'slider']);
       App\Models\Permission::insert(['title'=>'Delete Slider','for'=>'slider']);
       App\Models\Role::insert(['title' => 'المدير']);

          App\Models\Admin::insert(['username' => 'ahmed','password' => bcrypt('123456'),'email' => 'ahmed@ahmed.com','name'=>'admin']);



// App\student::insert(['fname' => '_test_student','password' => bcrypt('123'),'remember_token' => bcrypt('123'),'email' => 'test@student.com','phone'=>'01276794081','class_room_id'=>1,'seg'=>'yousry@admin.com']);
// App\User::insert(['name' => '_test_student','password' => bcrypt('123'),'remember_token' => bcrypt('123'),'email' => 'test@student.com']);

    }

}
