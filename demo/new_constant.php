<?php

const CONSTANT = 'Hello World';

echo CONSTANT;

const ANOTHER_CONST = CONSTANT.'; Goodbye World';

echo ANOTHER_CONST;

const ANIMALS = ['dog', 'cat', 'bird'];

echo ANIMALS[1];

define('ANIMALS_TWO', ['dog', 'cat', 'bird']);

echo ANIMALS_TWO[1];
?>