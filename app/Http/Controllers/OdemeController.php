<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect;

use Turkpos\Config;
use Turkpos\Soap;
use Turkpos\BuilderObject\Odeme;

Config::$CLIENT_CODE = 10738;
Config::$CLIENT_USERNAME = 'Test';
Config::$CLIENT_PASSWORD = 'Test';
Config::$SERVICE_URI = 'http://test-dmz.ew.com.tr:8080/turkpos.ws/service_turkpos_test.asmx?wsdl';

class OdemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $soap = new Soap();
        $spid = 1011;
        $guid = '0c13d406-873b-403b-9c09-a5766840d98c';
        $kkSahibi = "Albert Einstein";
        $kkNo = "4022774022774026";
        $kkSkAy = "12";
        $kkSkYil = "2026";
        $kkCvc = "000";
        $kkSahibiGsm = "5547659102";
        $hataUrl = "http://localhost/blog/public/basarisiz";
        $basariliUrl = "http://localhost/blog/public/basarili";
        $siparisId = "1";
        $odemeUrl = "http://localhost/blog/public/odeme";
        $siparisAciklama = "siparis aciklama";
        $taksit = 1;
        $islemtutar = "100,00";
        $toplamTutar = "100,00";
        $islemid = "";
        $ipAdr = "88.237.42.54";
        $dataBir = "";
        $dataIki = "";
        $dataUc = "";
        $dataDort = "";
        $dataBes = "";


        $soap = new Soap();


        $nesne = new Odeme($spid, $guid, $kkSahibi, $kkNo, $kkSkAy, $kkSkYil, $kkCvc, $kkSahibiGsm,
            $hataUrl, $basariliUrl, $siparisId, $siparisAciklama, $taksit, $islemtutar, $toplamTutar, $islemid, $ipAdr, $odemeUrl,
            $dataBir, $dataIki, $dataUc, $dataDort, $dataBes);


        $res = $soap->send($nesne)->getSoapResultMethod();

        //echo "<pre>";

        $url = $res["UCD_URL"];

        return Redirect::to($url);

    }



        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function basarili($id)
    {
        echo "<pre>";
        print_r($_POST);

        dd(1);
    }





        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function basarisiz($id)
    {
        echo "<pre>";
        print_r($_POST);

        dd(2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
