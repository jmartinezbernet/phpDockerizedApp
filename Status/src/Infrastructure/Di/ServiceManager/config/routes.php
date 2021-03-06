<?php

return function (\Zend\Expressive\Application $app): void {

    $app->get('/status', \Status\Infrastructure\Ui\Rest\Resource\StatusResource::class);
    $app->get('/status/{demoId}', \Status\Infrastructure\Ui\Rest\Resource\DemoResource::class);
};
