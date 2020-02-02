<?php

namespace thomasisok\Session;

interface SessionManagerInterface
{
    public function has(str $key): bool;
    public function set(str $key, $value): void;
    public function get(str $key);
    public function clear(): void;
}
