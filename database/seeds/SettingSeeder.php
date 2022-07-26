<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::truncate();

        Setting::insert([
            [
                'key'=>'info',
                'value'=>json_encode([
                    'name'=>'Extreme VET',
                    'currency'=>'USD',
                    'reports_logo'=>'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',
                    'address'=>'Address',
                    'phone'=>'+99',
                    'email'=>'support@extremelab.tech',
                    'website'=>'https://www.extremelab.tech',
                    'footer'=>'All rights are reserved',
                    'socials'=>[
                        'facebook'=>'#',
                        'twitter'=>'#',
                        'instagram'=>'#',
                        'youtube'=>'#',
                    ]
                ])
            ],
            [
                'key'=>'reports',
                'value'=>json_encode([
                    "show_header"=>true,
                    "show_footer"=>true,
                    "show_signature"=>true,
                    "margin-top"=>"0",
                    "margin-right"=>"20",
                    "margin-bottom"=>"20",
                    "margin-left"=>"20",
                    "content-margin-top"=>"230",
                    "content-margin-bottom"=>"220",
                    "footer"=>"footer here",
                    "branch_name"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "branch_info"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "owner_title"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "owner_data"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "test_title"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "test_name"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "test_head"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "result"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "unit"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "reference_range"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "status"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "comment"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "signature"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "antibiotic_name"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "sensitivity"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "commercial_name"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif"
                    ],
                    "report_footer"=>[
                        "color"=>"#000000",
                        "font-size"=>"12",
                        "font-family"=>"sans-serif",
                        "text-align"=>"center"
                    ],
                ])
            ],
            [
                'key'=>'emails',
                'value'=>json_encode([
                    'host'=>'',
                    'port'=>'',
                    'username'=>'',
                    'password'=>'',
                    'encryption'=>'',
                    'from_address'=>'',
                    'from_name'=>'',
                    'header_color'=>'#c43e00',
                    'footer_color'=>'#363636',
                    'owner_code'=>[
                        'active'=>false,
                        'subject'=>'Owner code',
                        'body'=>'Welcome , {owner_name}<br>Your code is : {owner_code}',
                    ],
                    'reset_password'=>[
                        'active'=>false,
                        'subject'=>'Reset your passwor',
                        'body'=>'Reset your password'
                    ],
                    'receipt'=>[
                        'active'=>false,
                        'subject'=>'Order receipt',
                        'body'=>'Welcome {owner_name},<br> your receipt is attached',
                    ],
                    'report'=>[
                        'active'=>false,
                        'subject'=>'Medical report',
                        'body'=>'welcome , {owner_name}<br>you report is attached'
                    ]
                ])
            ],
            [
                'key'=>'sms',
                'value'=>json_encode([
                    'sid'=>'',
                    'token'=>'',
                    'from'=>'',
                    'owner_code'=>[
                        'active'=>false,
                        'message'=>'welcome {owner_name} , your  code is {owner_code}'
                    ],
                    'tests_notification'=>[
                        'active'=>false,
                        'message'=>'welcome {owner_name} , your tests are ready now .. you can check tests by using your code : {owner_code}'
                    ]
                ])
            ],
            [
                'key'=>'whatsapp',
                'value'=>json_encode([
                    'receipt'=>[
                        'active'=>false,
                        'message'=>'welcome {owner_name} , receipt link is {receipt_link}'
                    ],
                    'report'=>[
                        'active'=>false,
                        'message'=>'welcome {owner_name} , tests report link is {report_link}'
                    ]
                ])
            ],
            [
                'key'=>'api_keys',
                'value'=>json_encode([
                    'google_map'=>''
                ])
            ],
        ]);
    }
}
