<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Settings;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run($userid = 1)
    {
        // add countries_list to DB once table will create
        $settingsList = array(
             array(
                "user_id" => $userid,
                "name" => 'Name',
                "label" => 'Name',
                "type" => '',
                "placeholder" => '',
                "default_value" => '',
                "is_show" => '1',
                "status" => '1',
                "is_deleted" => '0',
                "is_required" => '1'
            ),
             array(
                "user_id" => $userid,
                "name" => 'Client ID',
                "label" => 'Client ID',
                "type" => '',
                "placeholder" => '',
                "default_value" => '',
                "is_show" => '0',
                "status" => '1',
                "is_deleted" => '0',
                "is_required" => '0'
            ),
            array(
                "user_id" => $userid,
                "name" => 'Phone',
                "label" => 'Phone',
                "type" => '',
                "placeholder" => '',
                "default_value" => '',
                "is_show" => '0',
                "status" => '1',
                "is_deleted" => '0',
                "is_required" => '0'
            ),
            array(
                "user_id" => $userid,
                "name" => 'Email',
                "label" => 'Email',
                "type" => '',
                "placeholder" => '',
                "default_value" => '',
                "is_show" => '0',
                "status" => '1',
                "is_deleted" => '0',
                "is_required" => '0'
            ),
            array(
                "user_id" => $userid,
                "name" => 'Party Size',
                "label" => 'Party Size',
                "type" => '',
                "placeholder" => '',
                "default_value" => '',
                "is_show" => '0',
                "status" => '1',
                "is_deleted" => '0',
                "is_required" => '0'
            ),
            array(
            	"user_id" => $userid,
                "name" => 'Quote Wait',
                "label" => 'Quote Wait',
                "type" => '',
                "placeholder" => '',
                "default_value" => '',
                "is_show" => '0',
                "status" => '1',
                "is_deleted" => '0',
                "is_required" => '0'
            ),
            array(
            	"user_id" => $userid,
                "name" => 'Notes',
                "label" => 'Notes',
                "type" => '',
                "placeholder" => '',
                "default_value" => '',
                "is_show" => '0',
                "status" => '1',
                "is_deleted" => '0',
                "is_required" => '0'
            ),
            array(
            	"user_id" => $userid,
                "name" => 'Services',
                "label" => 'Services',
                "type" => '',
                "placeholder" => '',
                "default_value" => '',
                "is_show" => '0',
                "status" => '1',
                "is_deleted" => '0',
                "is_required" => '0'
            ),
            array(
            	"user_id" => $userid,
                "name" => 'Resources',
                "label" => 'Resources',
                "type" => '',
                "placeholder" => '',
                "default_value" => '',
                "is_show" => '0',
                "status" => '1',
                "is_deleted" => '0',
                "is_required" => '0'
            )
        );
        Settings::insert($settingsList);
    }
}
