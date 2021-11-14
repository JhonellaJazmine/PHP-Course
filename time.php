<?php

// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minytes with leading zeros (00 to 59)
// s - seconds with leading zeros (00 to 59)
// a - lowercase ante meridiem and post meridiem (am or pm)

date_default_timezone_set('Africa/Cairo');
//echo date_default_timezone_get();

echo date('m-d-Y l, h:i:s a');