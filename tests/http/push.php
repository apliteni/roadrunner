<?php

use \Psr\Http\Message\ServerRequestInterface;
use \Psr\Http\Message\ResponseInterface;

function handleRequest(ServerRequestInterface $req, ResponseInterface $resp): ResponseInterface
{
    $resp->getBody()->write(strtoupper($req->getQueryParams()['hello']));
    return $resp->withAddedHeader("http2-push", __FILE__)->withStatus(201);
}
