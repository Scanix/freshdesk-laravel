<?php 

namespace FWRD\Laravel\Freshdesk\Test;

use Illuminate\Config\Repository;
use Laravel\Lumen\Application;

class LumenAwsServiceProviderTest extends FreshdeskServiceProviderTest
{
    public function setUp()
    {
        if (!class_exists(Application::class)) {
            $this->markTestSkipped();
        }

        parent::setUp();
    }

    protected function setupApplication()
    {
        // Create the application such that the config is loaded.
        $app = new Application(sys_get_temp_dir());
        $app->instance('config', new Repository());

        return $app;
    }
}
