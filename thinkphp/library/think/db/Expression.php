<?php
// +----------------------------------------------------------------------
// | 更多资源请关注：三岁半资源网:sansuib.com
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace think\db;

class Expression
{
    /**
     * 查询表达式
     *
     * @var string
     */
    protected $value;

    /**
     * 创建一个查询表达式
     *
     * @param  string  $value
     * @return void
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * 获取表达式
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    public function __toString()
    {
        return (string) $this->value;
    }
}
