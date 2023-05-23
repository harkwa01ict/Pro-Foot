<?php

namespace Database\Seeders;

use App\Models\jobModel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $category = new jobModel();
        $category->name = 'Accountant';
        $category->openpost = 2;
        $category->image = 'images\imagejob\accountant.jpg';
        $category->description = "We are searching for an accountant to join the accounting team composed with 5 people and based in Luxembourg City (Gare area)...";
        $category->content = "We are searching for an accountant to join the accounting team composed with 5 people and based in Luxembourg City (Gare area). As an Accountant, you will be responsible for assisting with various accounting tasks, including accounts payable/receivable, financial reporting, general ledger entries, and other duties as assigned. The ideal candidate will have a passion for accounting and a strong desire to learn and grow within the company.";
        $category->save();

        $category = new jobModel();
        $category->name = 'Manager';
        $category->openpost = 1;
        $category->image = 'images\imagejob\manager.jpg';
        $category->description = "An exciting opportunity has arisen to join our team as a Loans Manager at Luxembourg's United Football Club. The Loans Manager will be responsible for ensuring that the Club and identified players in the Professional Development Phase have appropriate loan opportunities and that whilst on loan, a... ";
        $category->content = "An exciting opportunity has arisen to join our team as a Loans Manager at Luxembourg's United Football Club. The Loans Manager will be responsible for ensuring that the Club and identified players in the Professional Development Phase have appropriate loan opportunities and that whilst on loan, a comprehensive support programme is in place for them from the host club and Luxembourg's United Football Club. The Loans Manager will also be required to mentor and support players who are out on loan and develop effective relationships across the professional and non-league game. It will be vital that the Loans Manager can provide effective, concise written and verbal feedback to the multi-disciplinary team. ";
        $category->save();

        $category = new jobModel();
        $category->name = 'Marketer';
        $category->openpost = 3;
        $category->image = 'images\imagejob\marketer.jpg';
        $category->description = "We are looking for a talented, self-starting, and forward-thinking Digital Marketing Manager to join our growing and dynamic marketing team. Based in our International Headquarters in Schengen, this role will be reporting to the General...";
        $category->content = "We are looking for a talented, self-starting, and forward-thinking Digital Marketing Manager to join our growing and dynamic marketing team. Based in our International Headquarters in Schengen, this role will be reporting to the General Manager Marketing. This role will be leading the Digital Marketing Team to drive the digital transformation at PM-International by managing projects on an operational & strategic level that include web platforms, mobile platforms, and E-Commerce systems. ";
        $category->save();

        $category = new jobModel();
        $category->name = 'Administrative Assistant';
        $category->openpost = 1;
        $category->image = 'images\imagejob\administrativ.jpg';
        $category->description = "We are searching for administrative assistants for connecting people and technologies. Finding the perfect match for our customers. Always finding the right experts for every challenge - that's our goal at Pro-Foot, which is why we are looking for you...";
        $category->content = "We are searching for administrative assistants for connecting people and technologies. Finding the perfect match for our customers. Always finding the right experts for every challenge - that's our goal at Pro-Foot, which is why we are looking for you: As someone ambitious who, like us, wants to take technology to the next level. We are involved in exciting projects for well-known customers across all technologies and sectors and convince us day after day with your well-founded expertise and professional knowledge. Your colleagues rely on your support in their day-to-day business. As an important part of the team, you know exactly what to do to keep it running smoothly and ensure that nothing important is overlooked. You enjoy everyone's trust and act as a reliable team player. ";
        $category->save();

        $category = new jobModel();
        $category->name = 'Social Media manager';
        $category->openpost = 4;
        $category->image = 'images\imagejob\socialmedia.jpg';
        $category->description = "We are looking for a talented, self-starting, and forward-thinking Digital Marketing Manager to join our growing and dynamic marketing team...";
        $category->content = "We are looking for a talented, self-starting, and forward-thinking Digital Marketing Manager to join our growing and dynamic marketing team. Based in our International Headquarters in Luxembourg, this role will be reporting to the General Manager Marketing. This role will be leading the Digital Marketing Team to drive the digital transformation at Pro-Foot Agency by managing projects on an operational & strategic level that include web platforms, mobile platforms. ";
        $category->save();


        $category = new jobModel();
        $category->name = 'Web Developer';
        $category->openpost = 5;
        $category->image = 'images\imagejob\fullstackdev.webp';
        $category->description = "At Pro-Foot, our culture is deeply supportive and rich in opportunity and reward. You will help our clients thrive and our communities prosper, empowered by a spirit of shared purpose...";
        $category->content = "At Pro-Foot, our culture is deeply supportive and rich in opportunity and reward. You will help our clients thrive and our communities prosper, empowered by a spirit of shared purpose. Whether you’re helping clients find new opportunities, developing new technology, or providing expert advice to internal partners, you will be doing work that matters in the world, in an environment built on teamwork, service, responsibility, diversity, and integrity. ";
        $category->save();
    }
}
