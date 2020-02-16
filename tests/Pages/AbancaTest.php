<?php
declare(strict_types = 1);

namespace Embed\Tests\Pages;

class AbancaTest extends AbstractTestCase
{
    public function testOne()
    {
        $this->assertEmbed(
            'https://www.abanca.com/gl',
            [
                'linkedData' => [
                    '@context' => 'http://schema.org',
                    '@type' => 'Organization',
                    'name' => 'ABANCA',
                    'url' => 'https://www.abanca.com/',
                    'logo' => 'https://www.abanca.com/img/logo-social.jpg',
                    'sameAs' => [
                        'https://www.facebook.com/SomosABANCA',
                        'https://twitter.com/somosABANCA',
                        'https://www.youtube.com/user/somosABANCAtv',
                        'https://www.flickr.com/photos/125188945@N05/',
                    ],
                    'contactPoint' => [
                        [
                            '@type' => 'ContactPoint',
                            'telephone' => '+34-981 910 522',
                            'contactType' => 'customer service',
                        ],
                    ],
                ],
            ]
        );
    }
}
