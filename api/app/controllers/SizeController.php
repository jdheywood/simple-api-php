<?php

class SizeController extends BaseController {

  public function mobile()
  {
    #return View::make('size.mobile');
    return Response::json(array('size' => 'mobile', 'id' => '1'));
  }

  public function tablet()
  {
    #return View::make('size.tablet');
    return Response::json(array('size' => 'tablet', 'id' => '2'));
  }

  public function desktop()
  {
    #return View::make('size.desktop');
    return Response::json(array('size' => 'desktop', 'id' => '3'));
  }
}