<?php

namespace Oneup\UploaderBundle\Uploader\Response;

interface ResponseInterface
{
    /**
     * Transforms this object to an array of data
     *
     * @return array
     */
    public function assemble();

    /**
     * @param $code
     */
    public function setStatusCode($code);

    /**
     * @return int|null
     */
    public function getStatusCode();

    /**
     * @return bool
     */
    public function hasStatusCode();
}
