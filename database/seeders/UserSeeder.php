<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [ 'name' =>  'HUMAUN',
            'email' =>  'admin@gmail.com',
            'password' =>  bcrypt('Password'),
            'is_admin' =>  '1',
            'phone' =>  '+8001710 000 000',
            'user_desc' =>  ' প্রকাশিত হয় প্রথম কবিতার বই তীব্র জ্বরের মৌসুমে।',
            'user_profile' =>  'public/admin/storage/user_profile/1.png',],

            [ 'name' =>  'মুহিন তপু',
            'email' =>  'mohin@gmail.com',
            'password' =>  bcrypt('Password'),
            'is_admin' =>  '0',
            'phone' =>  '+8001710 000 001',
            'user_desc' =>  'জন্ম ও বেড়ে ওঠা পাহাড়ে। খাগড়াছড়িতে। কৈশোর থেকেই লেখালেখি গান আড্ডা ভ্রমণের সাথে যুক্ত। বসবাস চট্টগ্রামে। কবিতা লিখেন বেশি গল্প লেখেন কম। ২০২১ সালে প্রকাশিত হয় প্রথম কবিতার বই তীব্র জ্বরের মৌসুমে।',
            'user_profile' =>  'public/admin/storage/user_profile/2.png',],

            ['name' =>  'সিদ্দিক বকর',
            'email' =>  'siddik@gmail.com',
            'password' =>  bcrypt('Password'),
            'is_admin' =>  '0',
            'phone' =>  '+8001710 000 003',
            'user_desc' =>  'জন্ম কিশোরগঞ্জ জেলার বাজিতপুর উপজেলায়। প্রকাশিত বই: জীবন্মুক্ত বাতিঘর, (গল্পগ্রন্থ, প্রকাশক- বেহুলা বাংলা, ফেব্রুয়ারি ২০১৭), করাতকাটা ঘুম (গল্পগ্রন্থ, প্রকাশক- ঘোড়াউত্রা প্রকাশন, ফেব্রুয়ারি ২০২২)',
            'user_profile' =>  'public/admin/storage/user_profile/3.png', ],

            [ 'name' =>  'অপু শহীদ',
            'email' =>  'apu@gmail.com',
            'password' =>  bcrypt('Password'),
            'is_admin' =>  '1',
            'phone' =>  '+8001710 000 005',
            'user_desc' =>  'নাট্যকার, নাট্য নির্দেশক ও কথাসাহিত্যিক। জন্ম ও বর্তমান বসবাস ঢাকায়। প্রকাশিত বই: সার্বজনীন নীরবতা চুক্তি (অনুপ্রাণন প্রকাশন, ২০১৭), চৈত্র বলে মেঘে যাবো, ঈশ্বর পাঠ।',
            'user_profile' =>  'public/admin/storage/user_profile/4.png',],
            
            [ 'name' =>  'আমান উল্লাহ্',
            'email' =>  'aman@gmail.com',
            'password' =>  bcrypt('Password'),
            'is_admin' =>  '0',
            'phone' =>  '+8001710 000 008',
            'user_desc' =>  'কিশোরগঞ্জ জেলায় ১৯৬২ সালে জন্ম । চট্টগ্রাম বিশ্ববিদ্যালয়ে চারুকলা অনুষদে পড়াশোনা শেষে শিক্ষকতা করেছেন রাজশাহী আর্ট স্কুলে। বর্তমানে শান্ত-মারিয়ম বিশ্ববিদ্যারয়ে সহকারী অধ্যাপক হিসেবে ফাইন আর্টস বিভাগে শিক্ষকতা করছেন। যুক্ত রয়েছেন বিভিন্ন লিটলম্যাগ কার্যক্রমের সাথে। প্রকাশিত বই: বোমাবেল।',
            'user_profile' =>  'public/admin/storage/user_profile/6.png',],
            

        

        ],
    );
            
    }
}
