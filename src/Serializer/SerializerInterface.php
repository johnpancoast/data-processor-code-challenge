<?php
/**
 * @package       johnpancoast/code-challenge
 * @copyright (c) 2016 John Pancoast
 * @license       Public Domain
 */


namespace Pancoast\CodeChallenge\Serializer;

/**
 * Serializes data between formats
 *
 * @author John Pancoast <johnpancoaster@gmail.com>
 */
interface SerializerInterface
{
    /**
     * Register handlers
     *
     * @param HandlerInterface[] $handlers An array of HandlerInterface's
     */
    public function registerHandlers(array $handlers);

    /**
     * Serialize data
     *
     * @param mixed $data
     * @param string $handler Handler's supported format string
     *
     * @return mixed
     */
    public function serialize($data, $handler);

    /**
     * Deserialize data
     *
     * @param mixed $data
     * @param object $type The type to deserialize to
     * @param string $handler Handler's supported format string
     *
     * @return mixed
     */
    public function deserialize($data, $type, $handler);
}
