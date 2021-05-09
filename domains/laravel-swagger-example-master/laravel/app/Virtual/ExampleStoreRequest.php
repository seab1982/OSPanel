<?php

/**
 * @OA\Schema(
 *     type="object",
 *     title="Example storring request",
 *     description="Some simple request createa as example",
 * )
 */
class ExampleStoreRequest
{
    /**
     * @OA\Property(
     *     title="Name",
     *     description="Name of key for storring",
     *     example="random",
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *     title="Value",
     *     description="Value for storring",
     *     example="awesome",
     * )
     *
     * @var string
     */
    public $value;
}
