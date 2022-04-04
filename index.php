<?php

require __DIR__ . '/vendor/autoload.php';

$otTracer = new \DDTrace\OpenTracer1\Tracer(\DDTrace\GlobalTracer::get());
\OpenTracing\GlobalTracer::set($otTracer);

$scope = $otTracer->startActiveSpan('request');
$span = $scope->getSpan();
$span->setTag('service.name', 'service_name');
$span->setTag('resource.name', 'resource_name');
$span->setTag('span.type', 'cli');

$scope->close();
