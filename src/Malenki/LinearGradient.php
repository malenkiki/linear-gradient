<?php
/*
Copyright (c) 2013 Michel Petit <petit.michel@gmail.com>

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */



namespace Malenki;


/**
 * Create linear gradient in CSS for all major browser version.
 * 
 * @author Michel Petit <michel.petit@gmail.com> 
 * @license MIT
 */
class LinearGradient
{
    protected $color_start = null;
    protected $color_finish = null;
    protected $str_from = null;
    protected $str_to = null;
    protected $float_cursor = 0.5;


    public function from($str_horizontal, $str_vertical)
    {
        return $this;
    }

    public function to($str_horizontal, $str_vertical)
    {
        return $this;
    }

    public function start($int_red, $int_green, $int_blue)
    {
        return $this;
    }
    
    public function finish($int_red, $int_green, $int_blue)
    {
        return $this;
    }

    public function cursor($float)
    {
        return $this;
    }



    public function render()
    {
        /*
        $str_out = "
            background: #f6f5f3;
background: -moz-linear-gradient(left, #f6f5f3 0%, #ffffff 19%, #ffffff 100%);
background: -webkit-gradient(linear, left top, right top, color-stop(0%,#f6f5f3), color-stop(19%,#ffffff), color-stop(100%,#ffffff));
background: -webkit-linear-gradient(left, #f6f5f3 0%,#ffffff 19%,#ffffff 100%);
background: -o-linear-gradient(left, #f6f5f3 0%,#ffffff 19%,#ffffff 100%);
background: -ms-linear-gradient(left, #f6f5f3 0%,#ffffff 19%,#ffffff 100%);
background: linear-gradient(left, #f6f5f3 0%,#ffffff 19%,#ffffff 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f6f5f3', endColorstr='#ffffff',GradientType=1 );
";
         */
    }
}
