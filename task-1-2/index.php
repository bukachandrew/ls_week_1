<?php

const PICTURE_ALL = 80;
const PICTURE_MARKER = 23;
const PICTURE_PENCIL = 40;

echo PICTURE_ALL . " - рисунков <br>";
echo PICTURE_MARKER . " - фломастерами <br>";
echo PICTURE_PENCIL . " - карандашами <br>";
echo PICTURE_ALL - PICTURE_MARKER - PICTURE_PENCIL . " - красками <br>";