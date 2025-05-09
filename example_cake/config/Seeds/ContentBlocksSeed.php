<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

class ContentBlocksSeed extends AbstractSeed
{
    public function run(): void
    {
        $data = [
            [
                'parent' => 'global',
                'label' => 'Website Title',
                'description' => 'Shown on the home page, as well as any tabs in the users browser.',
                'slug' => 'website-title',
                'type' => 'text',
                'value' => 'ugie-cake/cakephp-content-blocks-example-app',
            ],
            [
                'parent' => 'global',
                'label' => 'Logo',
                'description' => 'Shown in the centre of the home page, and also in the top corner of all administration pages.',
                'slug' => 'logo',
                'type' => 'image',
            ],
            [
                'parent' => 'home',
                'label' => 'Home Page Content',
                'description' => 'The main content shown in the centre of the home page.',
                'slug' => 'home-content',
                'type' => 'html',
                'value' => '<p>Example app showcasing the <code>ugie-cake/cakephp-content-blocks</code> plugin.</p>',
            ],
            [
                'parent' => 'home',
                'label' => 'Contact Us',
                'description' => 'The contact us information that is displayed on the home page.',
                'slug' => 'contact-us',
                'type' => 'html',
                'value' => '<p><a href="mailto:Harry.Wang1@monash.edu">Send Email</a></p>',
            ],
        ];

        $table = $this->table('content_blocks');
        $table->insert($data)->save();
    }
}