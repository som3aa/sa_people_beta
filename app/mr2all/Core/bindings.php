<?php

// The Pages Bindings
App::bind('Mr2all\Pages\PagesInterface', function(){
    return new Mr2all\Pages\PagesRepository(new Mr2all\Pages\Pages);
});

// Bind Facade Check with our Helper class Check
App::bind('check', function(){
    return new Mr2all\Helpers\Check;
});