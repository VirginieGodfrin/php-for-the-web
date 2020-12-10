<?php
use PHPUnit\Framework\TestCase;
use Symfony\Component\Panther\PantherTestCaseTrait;

final class HomepageTest extends TestCase
{
    use PantherTestCaseTrait;
    
    /**
     * @test
     */
    public function phpunit_works(): void
    {
        self::assertTrue(true);
    }
    
    /**
     * @test
     */
    public function the_homepage_works(): void
    {
        // The first thing this test does is set up a client that we can use to browse our website
        // programmatically. The client is like an actual user of the website, except, we tell it
        // what to do.
        $client = self::createHttpBrowserClient();
        $response = $client->request('GET', self::$baseUri . '/');
        // Make a request for the homepage:
        $response = $client->request('GET', '/');
        // The page should contain an <h1> element with the right text:
        self::assertStringContainsString(
            'Hello world !',
            $response->filter('h1')->text()
        );
    }
}

