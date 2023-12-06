<?php

abstract class ParentClass extends
{
    abstract public function someMethod1(string $param1): string;
}


final class chileClass extends ParentClass
{
    public function someMethod1(string $param1): string
    {
        return $param1;
    }
}