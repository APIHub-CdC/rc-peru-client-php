<?php

namespace rc\pe\Client\Model;

interface ModelInterface
{
    
    public function getModelName();
    
    public static function rc_peTypes();
    
    public static function rc_peFormats();
    
    public static function attributeMap();
    
    public static function setters();
    
    public static function getters();
    
    public function listInvalidProperties();
    
    public function valid();
}
