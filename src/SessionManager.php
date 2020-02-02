<?php

namespace thomasisok\Session;

class SessionManager implements SessionManagerInterface
{
    public function has(str $key): bool
    {
        return true;
    }
    public function set(str $key, $value): void
    {
    }
    public function get(str $key)
    {
        return true;
    }
    public function clear(): void
    {
    }
}