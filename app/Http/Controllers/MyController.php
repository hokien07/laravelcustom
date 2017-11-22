<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\http\Requests;

class MyController extends Controller
{
    public function xinchao() {
        echo "Chao cac ban!";
    }

    public function khoahoc($ten) {
        echo "Khoa hoc: " . $ten;

        //chuyen huong cho route
        return redirect()->route('newname');
    }


    //get url trong request
    //paht(); lay duong dan tuyet doi.
    //url(); lay het duong dan
    //isMethod(); lay thong tin phuong thuc.
    //is(admin/*); kiem tra co ton tai ten admin khong
    public function GetUrl(Request $request) {
        //echo $request -> path();

//        if($request->isMethod('post')) {
//            echo 'get';
//            return;
//        }
//        echo 'post';

//        if($request->is('my*')) {
//            echo 'yes';
//            return;
//        }
//        echo 'no';


    }


    //lay du lieu tu form
    public function postForm(Request $request) {
         if($request->has('hoten')) {
             echo 'Ten cua ban la: ' . $request-> hoten;
             return;
         }
         echo "vui long kiem tra lai duong truyen";

    }

    //lam viec voim cookie.


    //set cookie
    public function setCookie() {
        $response = new Response();
        $response->withCookie(
            'hoten',
            'hokien07',
            0,1
        );
        return $response;
    }

    public function getCookie(Request $request) {
        return $request->cookie('hoten');
    }

    //upload file.
    public function postFile(Request $request) {
        //check isset file
        if($request->hasFile('myfile')) {
            $file = $request->file('myfile');
            if($file->getClientOriginalExtension('myfile') == 'png') {
                //lay ten file
                $fileName = $file->getClientOriginalName('myfile');
                $file ->move('images', $fileName);
            }else {
                echo "Chi nhan file: png";
            }
            return;
        }
        echo "Vui long chon File!";
    }

    //views
    public function myview() {
        return view('myview');
    }
    //goi view va truyen tham so
    public function time($t) {
        return view('myview', ['t' => $t]);
    }

    //Layouts
    public function blade($str) {
        $khoahoc = 'laravel -5xxxx';
        if($str == 'laravel'){
            return view('pages.laravel', ['khoahoc'=>$khoahoc]);
        }

        elseif($str == 'lamphp'){
            return view('pages.lamphp',['khoahoc'=>$khoahoc]);
        }

    }











































}
